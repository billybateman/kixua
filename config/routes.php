<?php

$routes['login'] = "authentication/login";
$routes['logout'] = "authentication/logout";
$routes['forgot'] = "authentication/forgot";
$routes['register'] = "authentication/register";
$routes['admin'] = "admin/index";
$routes['profile'] = "users/update";

/*
$the_routes = new site_content_model();
$results = array();
$results = $the_routes->get_all();

if(is_array($results)){
    foreach($results as $row){
        $routes[$row->site_content_slug] = "index/page/" . $row->site_content_slug;
    }   
}
*/