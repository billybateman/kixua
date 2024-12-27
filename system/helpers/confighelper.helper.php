<?php

class confighelper extends helper {
    
    /**
     * Updates the models array in config.php file
     * @param array $new_models Array of new models to add
     * @return bool Returns true if successful, false otherwise
     */
    public static function updateConfigModels($new_models = []) {
        try {
            // Read the config file
            $config_path = __APP_PATH . '/config/config.php';
            $config_content = file_get_contents($config_path);
            
            if ($config_content === false) {
                throw new Exception("Unable to read config file");
            }

            // Convert the file content to PHP variables
            ob_start();
            eval('?>' . $config_content);
            ob_end_clean();

            // Merge existing models with new ones, removing duplicates
            if (!isset($config['models'])) {
                $config['models'] = [];
            }
            
            $config['models'] = array_unique(array_merge($config['models'], $new_models));
            sort($config['models']); // Sort alphabetically

            // Generate new config content
            $new_content = "<?php\n\n";
            $new_content .= "ini_set('error_reporting', E_STRICT);\n\n";
            $new_content .= "/** Configuration Variables **/\n\n";
            
            // Add DEVELOPMENT_ENVIRONMENT
            $dev_env = DEVELOPMENT_ENVIRONMENT ? 'true' : 'false';
            $new_content .= "define ('DEVELOPMENT_ENVIRONMENT'," . $dev_env . ");\n\n";
            
            // Add CDN settings
            $new_content .= "// Configuration settings\n";
            $new_content .= "define('CDN_FOLDER', __APP_PATH.\"/cdn\");\n";
            $new_content .= "define('CDN_URL', \"/cdn\");\n\n";
            
            // Add libraries
            $new_content .= "\$config['libraries'] = " . var_export($config['libraries'], true) . ";\n\n";
            
            // Add models
            $new_content .= "\$config['models'] = " . var_export($config['models'], true) . ";\n\n";
            
            // Add helpers
            $new_content .= "\$config['helpers'] = " . var_export($config['helpers'], true) . ";\n\n";
            
            // Add other defines
            $new_content .= "define('SITE_NAME', '" . SITE_NAME . "');\n";
            $new_content .= "define('SITE_URL', '" . SITE_URL . "');\n";
            $new_content .= "define('SITE_LOGO', '" . SITE_LOGO . "');\n";
            $new_content .= "define('CONTACT_EMAIL', '" . CONTACT_EMAIL . "');\n";
            $new_content .= "define('CONTACT_PHONE', '" . CONTACT_PHONE . "');\n";
            $new_content .= "define('_NO_REPLY_EMAIL', '" . _NO_REPLY_EMAIL . "');\n";
            $new_content .= "define('_NO_REPLY_NAME', '" . _NO_REPLY_NAME . "');\n";
            $new_content .= "define('DB_NAME', '" . DB_NAME . "');\n";
            $new_content .= "define('DB_HOST', '" . DB_HOST . "');\n";
            $new_content .= "define('DB_USERNAME', '" . DB_USERNAME . "');\n";
            $new_content .= "define('DB_PASSWORD', '" . DB_PASSWORD . "');\n";
            $new_content .= "define('Ds', '" . Ds . "');\n";
            $new_content .= "?>";

            // Write the new content back to the file
            if (file_put_contents($config_path, $new_content) === false) {
                throw new Exception("Unable to write to config file");
            }

            return true;
        } catch (Exception $e) {
            error_log("Config update failed: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Reads the current models from config.php
     * @return array|false Returns array of models or false on failure
     */
    public static function getCurrentModels() {
        try {
            $config_path = __APP_PATH . '/config/config.php';
            $config_content = file_get_contents($config_path);
            
            if ($config_content === false) {
                throw new Exception("Unable to read config file");
            }

            // Convert the file content to PHP variables
            ob_start();
            eval('?>' . $config_content);
            ob_end_clean();

            return isset($config['models']) ? $config['models'] : [];
        } catch (Exception $e) {
            error_log("Config read failed: " . $e->getMessage());
            return false;
        }
    }
}