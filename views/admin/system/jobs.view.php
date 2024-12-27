<?php
// Fetch cron jobs and logs
$cronJobs = shell_exec('crontab -l');
$cronLog = file_get_contents(__APP_PATH.'/logs/cron'); // Adjust the path to your cron log file

// Function to add a new cron job
function addCronJob($job) {
    file_put_contents('/tmp/crontab.txt', shell_exec('crontab -l') . PHP_EOL . $job . PHP_EOL);
    shell_exec('crontab /tmp/crontab.txt');
    unlink('/tmp/crontab.txt');
}

// Function to remove a cron job
function removeCronJob($job) {
    $cronJobs = explode(PHP_EOL, shell_exec('crontab -l'));
    $newCronJobs = array_filter($cronJobs, function($line) use ($job) {
        return trim($line) !== trim($job);
    });
    file_put_contents('/tmp/crontab.txt', implode(PHP_EOL, $newCronJobs) . PHP_EOL);
    shell_exec('crontab /tmp/crontab.txt');
    unlink('/tmp/crontab.txt');
}

// Handle form submissions for adding/removing cron jobs
$message = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_cron_job'])) {
        try {
            addCronJob($_POST['new_cron_job']);
            $message = 'Cron job added successfully.';
        } catch (Exception $e) {
            $error = 'Failed to add cron job: ' . $e->getMessage();
        }
    } elseif (isset($_POST['remove_cron_job'])) {
        try {
            removeCronJob($_POST['remove_cron_job']);
            $message = 'Cron job removed successfully.';
        } catch (Exception $e) {
            $error = 'Failed to remove cron job: ' . $e->getMessage();
        }
    }
    // Refresh the page to show updated cron jobs
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>
<div class="container-fluid">
    <h1 class="mt-3">Scheduled Tasks/Jobs</h1>
    <p>Manage scheduled tasks and jobs here.</p>
    <?php if ($message): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($message); ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <button class="btn btn-secondary mb-3" onclick="location.reload();">Refresh</button>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Current Cron Jobs</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($cronJobs); ?></pre>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Add New Cron Job</div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="new_cron_job">Cron Job Command</label>
                            <input type="text" class="form-control" id="new_cron_job" name="new_cron_job" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Add Cron Job</button>
                    </form>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Remove Cron Job</div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="remove_cron_job">Cron Job Command</label>
                            <input type="text" class="form-control" id="remove_cron_job" name="remove_cron_job" required>
                        </div>
                        <button type="submit" class="btn btn-danger mt-2">Remove Cron Job</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Cron Job Log</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($cronLog); ?></pre>
                </div>
            </div>
        </div>
    </div>
</div>