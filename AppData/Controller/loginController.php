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

                $admin= $this->login->comprobar_admin();
                if (mysqli_num_rows($admin)>0){
                    $eladmin=mysqli_fetch_assoc($admin);
                    $_SESSION=$eladmin;
                    header("Location:".URL."inicioAdmin");
//                    echo ($_SESSION["email"]);
                }
                else {
                    $datosusados = $this->login->comprobar();
                    $datosgerentes = mysqli_fetch_assoc($datosusados);
                    $_SESSION = $datosgerentes;
                    header("Location:" . URL . "inicioGerente");
//                    echo($_SESSION["nombre"]);
                }
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