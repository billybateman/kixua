<?php


ini_set('error_reporting', E_STRICT);

/** Configuration Variables **/

define ('DEVELOPMENT_ENVIRONMENT',true);

// Configuration settings
define('CDN_FOLDER', __APP_PATH."/cdn");
define('CDN_URL', "/cdn");

$config['libraries'] =  array(
    'session'
);

$config['models'] =  array(
    'usersmodel', 
    'users_types_model',
    'notifications_model',
    'images_model',
    'files_model',
    'sites_model',
    'users_online_model'
);

$config['helpers'] =  array(
'urlhelper'
);
        
define('SITE_NAME', 'Kixua Demo');
define('SITE_URL', 'http://localhost:8888/');
define('SITE_LOGO', '/assets/images/logo.png');
define('CONTACT_EMAIL', 'billy.bateman3@gmail.com');
define('CONTACT_PHONE', '3238241696');
define('_NO_REPLY_EMAIL', 'no-reply@kixua.com');
define('_NO_REPLY_NAME', 'Kixua');
define('DB_NAME', 'CodifyMVC');
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'CodifyMVC');
define('DB_PASSWORD', 'WeLoveCode!');
define('Ds', '/');
?>
