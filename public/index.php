<?php
require ('../config/dev.php');
require_once '../vendor/autoload.php';



$router= new \App\src\routing\Router();
$router->run();