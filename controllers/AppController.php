<?php

namespace Controllers;

use MVC\Router;

class AppController {
    public static function index(Router $router){
        $router->render('page/index', []);
    }

}