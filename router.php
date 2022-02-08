<?php
    include_once("controllers/{$controller}.php");
    $objController = ucfirst($controller);
    $controller = new $objController();
    $controller->$action();