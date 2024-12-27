<?php


?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Codify Installation</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" crossorigin="anonymous">
        <style>
        
        @import url("https://fonts.googleapis.com/css?family=Nunito:400,900|Montserrat|Roboto");
                
                body {
                background: linear-gradient(to right, #3FB6A8, #7ED386);
                }
    
                .fa {
                    color: #fff;
                }
    
                .container {
                background: #FFFFFF;
                width: 60vw;
                height: 100vh;
                margin: 0 auto;
                position: relative;
                margin-top: 5%;
                margin-bottom: 5%;
                /* padding-bottom: 13%; */
                box-shadow: 2px 5px 20px rgba(119, 119, 119, 0.5);
                }
    
                .logo {
                float: right;
                margin-right: 12px;
                margin-top: 12px;
                font-family: "Nunito Sans", sans-serif;
                color: #3DBB3D;
                font-weight: 900;
                font-size: 1.5em;
                letter-spacing: 1px;
                }
    
                .CTA {
                width: 80px;
                height: 40px;
                right: -20px;
                bottom: 0;
                margin-bottom: 90px;
                position: absolute;
                z-index: 1;
                background: #7ED386;
                font-size: 1em;
                transform: rotate(-90deg);
                transition: all 0.5s ease-in-out;
                cursor: pointer;
                }
                .CTA h1 {
                color: #FFFFFF;
                margin-top: 12px;
                margin-left: 9px;
                font-size: 0.7em;
                }
                .CTA:hover {
                background: #3FB6A8;
                transform: scale(1.1);
                }
    
                .leftbox {
                float: left;
                top: -5%;
                left: 5%;
                position: absolute;
                width: 15%;
                height: 110%;
                background: #7ED386;
                box-shadow: 3px 3px 10px rgba(119, 119, 119, 0.5);
                }
    
                nav a {
                list-style: none;
                padding: 35px;
                color: #FFFFFF;
                font-size: 1.1em;
                display: block;
                transition: all 0.3s ease-in-out;
                }
                nav a:hover {
                color: #3FB6A8;
                transform: scale(1.2);
                cursor: pointer;
                }
                nav a:first-child {
                margin-top: 7px;
                }
    
                .active {
                color: #3FB6A8;
                }
    
                .rightbox {
                /* float: right; */
                width: 90vw;
                height: 100%;
                }
    
                .site, .database, .process {
                transition: opacity 0.5s ease-in;
                position: absolute;
                width: 70vw;
                }
    
                h1 {
                font-family: "Montserrat", sans-serif;
                color: #7ED386;
                font-size: 1em;
                margin-top: 30px;
                margin-bottom: 15px;
                }
    
                h2 {
                color: #777777;
                font-family: "Roboto", sans-serif;
                width: 80%;
                text-transform: uppercase;
                font-size: 8px;
                letter-spacing: 1px;
                margin-left: 2px;
                }
    
                p {
                border-width: 1px;
                border-style: solid;
                border-image: linear-gradient(to right, #3FB6A8, rgba(126, 211, 134, 0.5)) 1 0%;
                border-top: 0;
                width: 80%;
                font-family: "Montserrat", sans-serif;
                font-size: 0.7em;
                /* padding: 7px 0px 17px 0px; */
                color: #070707;
                margin-bottom: 5px;
                }
    
                p.btn-p {
                border-width: unset;
                border-style: unset;
                border-image: unset;
                border-top: unset;
                width: 80%;
                margin-bottom: unset;
                padding-bottom: 20px;
                }
    
                span {
                font-size: 0.5em;
                color: #777777;
                }
    
                .btn {
                float: right;
                font-family: "Roboto", sans-serif;
                text-transform: uppercase;
                font-size: 10px;
                border: none;
                color: #3FB6A8;
                }
    
                .btn:hover {
                text-decoration: underline;
                font-weight: 900;
                }
    
                input {
                border: 1px solid #dddddd;
                font-family: "Roboto", sans-serif;
                padding: 2px;
                margin: 0px 0px px 0px;
                width: 100%;
                }
    
                .site h2 {
                margin-top: 15px;
                }
    
                .database h2 {
                margin-top: 25px;
                }
    
                .process h2 {
                margin-top: 25px;
                }
    
                .noshow {
                opacity: 0;
                }
    
                footer {
                position: absolute;
                width: 20%;
                bottom: 0;
                right: -20px;
                text-align: right;
                font-size: 0.8em;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-family: "Roboto", sans-serif;
                }
                footer p {
                border: none;
                padding: 0;
                }
                footer a {
                color: #ffffff;
                text-decoration: none;
                }
                footer a:hover {
                color: #7d7d7d;
                }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script>
            /*active button class onclick*/
            $("nav a").click(function (e) {
                e.preventDefault();
                $("nav a").removeClass("active");
                $(this).addClass("active");
                if (this.id === !"site") {
                    $(".site").addClass("d-none");
                } else if (this.id === "site") {
                    $(".database").removeClass("d-none");
                    $(".rightbox").children().not(".site").addClass("d-none");
                } else if (this.id === "database") {
                    $(".database").removeClass("d-none");
                    $(".rightbox").children().not(".database").addClass("d-none");
                } else if (this.id === "process") {
                    $(".process").removeClass("d-none");
                    $(".rightbox").children().not(".process").addClass("d-none");
                }
            });

        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div id="logo">
                <h1 class="logo">CodifyMVC</h1>
                <div class="CTA">
                <h1>Need Help?</h1>
                </div>
            </div>
            
            <div class="rightbox">
                <form action="installer.php" method="post" enctype="multipart/form-data">
                    <div class="site">
                        <h1>Site Details</h1>

                        <h2>Name</h2>
                        <p><input type="text" id="site_name" name="site_name" required></p>
                        
                        <h2>URL</h2>
                        <p><input type="url" id="site_url" name="site_url" required></p>
                        
                        <h2>Logo</h2>
                        <p> <input type="file" id="site_logo" name="site_logo"></p>
                        
                        <h2>Email</h2>
                        <p><input type="email" id="contact_email" name="contact_email" required>
                        </p>
                        
                        <h2>Phone</h2>
                        <p><input type="tel" id="contact_phone" name="contact_phone" required></p>

                        <h1>Database Details</h1>

                        <h2>Host</h2>
                        <p><input type="text" id="db_host" name="db_host" required></p>
                        
                        <h2>Name</h2>
                        <p><input type="text" id="db_name" name="db_name" required></p>
                        
                        <h2>User</h2>
                        <p><input type="text" id="db_username" name="db_username" required></p>
                        
                        <h2>Password</h2>
                        <p><input type="text" id="db_password" name="db_password" required></p>
                    
                        <small>Click "setup" to install databse and setup/update Composer</small>

                        <p class="btn-p"><button type="submit" class="btn">Setup</button></p>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <p>made by <a href="#"> Codify</a> ♡
        </footer>
    </body>
    </html>
  
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    $app_path = realpath('');

    // Create a MySQL connection using the provided database details

    $db_host = $_POST['db_host'];
    $db_username = $_POST['db_username'];
    $db_password = $_POST['db_password'];
    $db_name = $_POST['db_name'];

    $site_name = $_POST['site_name'];
    $site_url = $_POST['site_url'];
    $site_logo = $_FILES['site_logo'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
    $port = NULL;
	$socket = NULL;	
    
    $mysqli = new mysqli($db_host, $db_username, $db_password, $db_name, $port, $socket);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
        exit;
    }

    // Read the setup.sql file and execute the SQL queries
    $sql_file = file_get_contents($app_path.'/setup.sql');
    $sql_queries = explode(';', $sql_file);

    foreach ($sql_queries as $query) {
        $query = trim($query);
        if (!empty($query)) {
             $mysqli->query($query);
        }
    }
    $mysqli->close();
  
    // Create the config file
    $config_file = fopen($app_path.'/config/config.php', 'w');
    fwrite($config_file, '<?php' . PHP_EOL);

    fwrite($config_file, '

        ini_set(\'error_reporting\', E_STRICT);

        /** Configuration Variables **/

        define (\'DEVELOPMENT_ENVIRONMENT\',true);

        // Configuration settings
        define(\'CDN_FOLDER\', __APP_PATH."/cdn");
        define(\'CDN_URL\', "/cdn");

        $config[\'libraries\'] =  array(
            \'session\'
        );

        $config[\'models\'] =  array(
            \'usersmodel\', 
            \'users_types_model\',
            \'notifications_model\',
            \'images_model\',
            \'files_model\',
            \'sites_model\',
            \'users_online_model\'
        );

        $config[\'helpers\'] =  array(
        \'urlhelper\'
        );
        ' . PHP_EOL);

    fwrite($config_file, 'define(\'SITE_NAME\', \'' . $site_name . '\');' . PHP_EOL);
    fwrite($config_file, 'define(\'SITE_URL\', \'' . $site_url . '\');' . PHP_EOL);
    if ($site_logo['size'] > 0) {
      $site_logo_path = $app_path.'/cdn/uploads/' . basename($site_logo['name']);
      move_uploaded_file($site_logo['tmp_name'], $site_logo_path);
      fwrite($config_file, 'define(\'SITE_LOGO\', \'' . $site_logo_path . '\');' . PHP_EOL);
    } else {
      fwrite($config_file, 'define(\'SITE_LOGO\', \'/assets/images/logo.png\');' . PHP_EOL);
    }
    fwrite($config_file, 'define(\'CONTACT_EMAIL\', \'' . $contact_email . '\');' . PHP_EOL);
    fwrite($config_file, 'define(\'CONTACT_PHONE\', \'' . $contact_phone . '\');' . PHP_EOL);

    $base_site_url = normalizeUrl($site_url);

    fwrite($config_file, 'define(\'_NO_REPLY_EMAIL\', \'no-reply@' . $base_site_url . '\');' . PHP_EOL);
    fwrite($config_file, 'define(\'_NO_REPLY_NAME\', \'' . $site_name . '\');' . PHP_EOL);

    fwrite($config_file, 'define(\'DB_NAME\', \'' . $db_name . '\');' . PHP_EOL);
    fwrite($config_file, 'define(\'DB_HOST\', \'' . $db_host . '\');' . PHP_EOL);
    fwrite($config_file, 'define(\'DB_USERNAME\', \'' . $db_username . '\');' . PHP_EOL);
    fwrite($config_file, 'define(\'DB_PASSWORD\', \'' . $db_password . '\');' . PHP_EOL);
    fwrite($config_file, 'define(\'Ds\', \'/\');' . PHP_EOL);

    fwrite($config_file, '?>' . PHP_EOL);
    fclose($config_file);

    chmod($app_path.'/installer.php', 755);   
    unlink(realpath('installer.php'));

   header("Location: http://".$_SERVER['HTTP_HOST']."/"); /* Redirect browser */
}


function normalizeUrl($url) {
    $url = strtolower($url);
    $url = str_replace('http://', '', $url);
    $url = str_replace('https://', '', $url);
    $url = str_replace('www.', '', $url);
    $url = rtrim($url, '/');
    return $url;
}
?>