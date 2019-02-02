<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 01/02/2019
 * Time: 11:45 AM
 */

namespace AppData\Config;
class Autoload
{
    public static function run()
    {
        spl_autoload_register(function ($class)
        {
            $ruta=str_replace("\\",'/',$class).'.php';
            //echo $ruta;
            require_once ($ruta);
        });
    }
}