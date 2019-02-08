<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 01/02/2019
 * Time: 11:45 AM
 */

namespace AppData\Config;
class Request
{
    private $controlador;
    private $metodo;
    private $argumento;
//    private $log=URL.Login;
    public function __construct()
    {
        if (isset($_SESSION["email"])) {
            if (isset($_GET['url'])) {
                $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                $ruta = explode("/", $ruta);
                $ruta = array_filter($ruta);
                //print_r($ruta); //sirve para imprimir arreglos
                if ($ruta[0] == "index.php") {
                    $this->controlador = "inicioAdmin";
                } else {
                    $this->controlador = strtolower(array_shift($ruta));
                }
                $this->metodo = strtolower(array_shift($ruta));
                if (!$this->metodo)
                    $this->metodo = "index";
                $this->argumento = $ruta;
            } else {
                $this->controlador = "inicioAdmin";
                $this->metodo = "index";
            }
        }
        else
        {
            $this->controlador="login";
            if(isset($_POST["email"]))
                $this->metodo = "verify";
            else if(isset($_POST["numero"]))
                $this->metodo = "reset";
            else
                $this->metodo = "index";
        }
    }
    public function getControlador()
    {
        return $this->controlador;
    }
    public function getMetodo()
    {
        return $this->metodo;
    }
    public function getArgumento()
    {
        return $this->argumento;
    }
}