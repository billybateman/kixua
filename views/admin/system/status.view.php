<?php
// Fetch server status data
$serverStatus = [
    'uptime' => shell_exec('uptime'),
    'diskUsage' => shell_exec('df -h'),
    'memoryUsage' => shell_exec('free -m'),
    'cpuLoad' => shell_exec('top -bn1 | grep "load average:"'),
    'network' => shell_exec('ifconfig'),
    'os' => php_uname(),
    'phpVersion' => phpversion(),
    'serverSoftware' => $_SERVER['SERVER_SOFTWARE']
];
?>
<div class="container-fluid">
    <h4 class="mb-0">Server Status</h1>
    <p>View the current status of the server.</p>
    <button class="btn btn-secondary mb-3" onclick="location.reload();">Refresh</button>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Uptime</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($serverStatus['uptime']); ?></pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Disk Usage</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($serverStatus['diskUsage']); ?></pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Memory Usage</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($serverStatus['memoryUsage']); ?></pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">CPU Load</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($serverStatus['cpuLoad']); ?></pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Network</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($serverStatus['network']); ?></pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Operating System</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($serverStatus['os']); ?></pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">PHP Version</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($serverStatus['phpVersion']); ?></pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Server Software</div>
                <div class="card-body">
                    <pre><?php echo htmlspecialchars($serverStatus['serverSoftware']); ?></pre>
                </div>
            </div>
        </div>
    </div>
</div>
