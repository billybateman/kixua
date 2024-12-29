<?php

class SystemController extends BaseController
{
    public function index()
    {
        // Handle the system management index view
        $this->registry->template->show('admin/system/index.view.php');
    }

    public function backup()
    {
        $this->registry->backupModel = new BackupModel($this->registry->db);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['action'])) {
                switch ($_POST['action']) {
                    case 'create':
                        $filename = 'backup_' . date('Ymd_His') . '.sql';
                        // Code to create a backup of the entire MySQL database
                        $this->registry->backupModel->createBackup($filename);
                        break;
                    case 'delete':
                        $this->registry->backupModel->deleteBackup($_POST['id']);
                        break;
                    case 'restore':
                        $backup = $this->registry->backupModel->getBackup($_POST['id']);
                        // Code to restore the MySQL database from the backup file
                        break;
                }
            }
        }

        $backups = $this->registry->backupModel->getAllBackups();
        $this->registry->template->backups = $backups;
        $this->registry->template->show('admin/system/backup.view.php');
    }

    public function status()
    {
        // Handle the server status view
        $this->registry->template->show('admin/system/status.view.php');
    }

    public function errorLogs()
    {
        // Handle the error logs view
        $this->registry->template->show('admin/system/error_logs.view.php');
    }

    public function cache()
    {
        // Handle the cache management view
        $this->registry->template->show('admin/system/cache.view.php');
    }

    public function jobs()
    {
        // Handle the scheduled tasks/jobs view
        $this->registry->template->show('admin/system/jobs.view.php');
    }

    public function files()
    {
        // Handle the scheduled tasks/jobs view

        if (isset($_REQUEST['action'])) {
            switch ($_REQUEST['action']) {
                case 'create':
                    $this->registry->template->show('admin/system/files/create.view.php');
                    exit;
                    break;
            }
        }
        $this->registry->template->show('admin/system/files.view.php');
    }

    public function migrations()
    {

        $this->registry->migrationsModel = new MigrationsModel($this->registry);
        $migrationsDir = __APP_PATH . '/migrations';
        
            if (isset($_REQUEST['action'])) {
                switch ($_REQUEST['action']) {
                    case 'create':
                        $this->registry->template->show('admin/system/migrations/create.view.php');
                        exit;
                        break;
                    case 'run':
                        $logFile = __APP_PATH . '/logs/migrations.log';
                        $migrations = array_diff(scandir($migrationsDir), array('..', '.','processed', 'default_migration.migration.php', '.DS_Store'));
                        
                        $new_models = array();

                        foreach ($migrations as $migration) {

                            $migrationName = extractMigrationTableName($migration);
                            $modelName = str_replace('.php', '', $migrationName);
                            $modelFile = __APP_PATH . '/models/' . $modelName . '_model.model.php';
                            
                            if(!file_exists($modelFile)){
                                $new_models[] = $modelName."_model";
                            }

                            $migrationFile = $migrationsDir . '/' . $migration;
                            //include $migrationFile;
                            $query = file_get_contents($migrationFile);
                            $this->registry->migrationsModel->create($query);
                            file_put_contents($logFile, "Filename:" . $migration. " Query:" . $query . " processed at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
                            //unlink($migrationFile);
                            rename($migrationFile, __APP_PATH . '/migrations/processed/' . $migration);
                        }

                        $this->registry->confighelper->updateConfigModels($new_models);

                        
                        $toaster = array('title' => 'Migrations', 'message' => 'Migrations processed successfully');
                        $this->registry->template->toaster = $toaster;
                       
                    break;
                    case 'createModels':
                        $migrations = array_diff(scandir($migrationsDir), array('..', '.', 'processed','default_migration.migration.php', '.DS_Store'));
                        $new_models = array();
                        
                        foreach ($migrations as $migration) {

                            $migrationName = extractMigrationTableName($migration);

                            $modelName = str_replace('.php', '', $migrationName);
                            $modelFile = __APP_PATH . '/models/' . $modelName . '_model.model.php';
                            
                            if(file_exists($modelFile)){
                                continue;
                            }

                            $new_models[] = $modelName."_model";
                            $modelContent = replaceDefaultWithModelName(__APP_PATH . '/models/' . "default_model.model.php", $modelName);

                            file_put_contents($modelFile, $modelContent);
                        }

                        $this->registry->confighelper->updateConfigModels($new_models);
                       

                        // Get current models
                        $current_models = ConfigHelper::getCurrentModels();


                        $toaster = array('title' => 'Models', 'message' => 'Models created successfully for all migrations');
                        $this->registry->template->toaster = $toaster;
                        break;
                }
            }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['action'])) {
                switch ($_POST['action']) {
                    case 'createAction':
                        $migrationName = $_POST['migration_name'];
                        $migrationQuery = $_POST['migration_query'];
                        $filename = $migrationsDir . '/' . date('Ymd_His') . '_' . $migrationName . '.php';
                        file_put_contents($filename, "$migrationQuery");
                    break;
            
                }
            }
        }

        $migrations = array_diff(scandir($migrationsDir), array('..', '.','processed','default_migration.migration.php', '.DS_Store'));
        $this->registry->template->migrations = $migrations;
        $this->registry->template->show('admin/system/migrations/browse.view.php');
    }
}
?>
