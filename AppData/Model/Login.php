<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 01/02/2019
 * Time: 02:52 PM
 */

namespace AppData\Model;
class Login
{
    private $tabla="users";
    private $email, $password;
    public function __construct()
    {
        $this->conexion= new conexion();
    }
    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }
    public function get($atributo)
    {
        return $this->$atributo;
    }
    function getAll()
    {
        $sql="SELECT * FROM {$this->tabla}";
        $datos=$this->conexion->QuerResultado($sql);
        return $datos;
    }
    public function comprobar()
    {
        $sql="SELECT * FROM {$this->tabla} WHERE email='{$this->email}'";
        $datos=$this->conexion->QuerResultado($sql);
        return $datos;
    }

    public function comprobar_admin()
    {
        $sql="SELECT * FROM {$this->tabla} WHERE email='{$this->email}' and is_admin=1";
        $datos=$this->conexion->QuerResultado($sql);
        return $datos;
    }

}