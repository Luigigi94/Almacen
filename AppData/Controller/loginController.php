<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 01/02/2019
 * Time: 02:52 PM
 */

namespace AppData\Controller;

class loginController
{
    private $login;
    public function __construct()
    {
        $this->login= new \AppData\Model\Login();
    }
    public function index()
    {
        $datos1=$this->login->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function verify()
    {
        $_SESSION["error_login"]="";
        if(isset($_POST)) {
            $this->login->set("email", $_POST["email"]);
            $this->login->set("password", $_POST["password"]);
            $datos = $this->login->comprobar();
            if (mysqli_num_rows($datos) > 0) {
                $datos=mysqli_fetch_assoc($datos);
                $_SESSION["email"]=$datos["email"];
                header("Location:" . URL . "inicio");
                echo($_SESSION["nombre"]);
            }
            else {
                $_SESSION["error_login"] = "los datos no coinciden con nuestros registros";
                header("Location:" . URL . "login");
            }
        }
    }
    public function logout()
    {
        session_destroy();

    }

}