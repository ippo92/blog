<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 07/06/2018
 * Time: 10:19
 */
namespace App\config;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($class)
    {
        $class = str_replace('App', '', $class);
        $class = str_replace('\\', '/', $class);
        require './'.$class.'.php';
    }
}
