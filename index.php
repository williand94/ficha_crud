<?php
require_once("config/APP.php");

if (!empty($_GET['views'])) {

    $path = explode("/", $_GET['views']);

    $controller = $path[0];
    $action = $path[1];
} else {

    $controller = 'homeController';
    $action = 'home';
}

require_once("views/template.php");
