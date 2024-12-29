<?php

ini_set('error_reporting', E_STRICT);

/** Configuration Variables **/

define ('DEVELOPMENT_ENVIRONMENT',true);

// Configuration settings
define('CDN_FOLDER', __APP_PATH."/cdn");
define('CDN_URL', "/cdn");

$config['libraries'] = array (
  0 => 'session',
);

$config['models'] = array (
  0 => 'projects_model',
  1 => 'tasks_model',
  2 => 'clients_model',
  3 => 'contracts_model',
  4 => 'customers_model',
  5 => 'files_model',
  6 => 'forms_model',
  7 => 'images_model',
  8 => 'invoices_model',
  9 => 'notifications_model',
  10 => 'payments_model',
  11 => 'products_model',
  12 => 'profile_model',
  13 => 'services_model',
  14 => 'sites_model',
  15 => 'subscriptions_model',
  16 => 'users_online_model',
  17 => 'users_types_model',
  18 => 'usersmodel',
);

$config['helpers'] = array (
  0 => 'urlhelper',
  1 => 'confighelper',
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