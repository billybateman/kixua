<?php

// Initialize helpers
foreach ($config['helpers'] as $helper) {
    $registry->$helper = new $helper($registry, '');
}

// Initialize libraries
foreach ($config['libraries'] as $library) {
    $registry->$library = new $library($registry, '');
}

// Initialize models
foreach ($config['models'] as $model) {
    $registry->$model = new $model($registry, '');
}

// Determine the protocol
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";

// Construct the base URL
$baseUrl = $protocol . "://" . $_SERVER['HTTP_HOST'];

// Retrieve routes based on the URL
$routesModel = new sites_model();
$results = $routesModel->get_by_url($baseUrl);

// Set session variables
//$registry->session->set('sites', 1);
$registry->session->set('sites_id', 1);

// Define constant for site ID
define('SITES_ID', 1);

?>