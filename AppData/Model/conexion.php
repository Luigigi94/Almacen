<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 01/02/2019
 * Time: 11:37 AM
 */
namespace AppData\Model;

class conexion{

    private $datos=array("server" => "localhost", "user" => "root", "password" => "", "base" => "almacen");
    public $stm;

    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"], $this->datos["password"],$this->datos["base"]);
        $this->conexion->set_charset("utf8");
    }

    public function QuerySimple($sql)
    {
        $this->conexion->query($sql) or die(mysqli_error($this->conexion));
    }

    public function QuerResultado($sql)
    {
        $datos=$this->conexion->query($sql) or die(mysqli_error($this->conexion));
        return $datos;
    }

    public function __destruct()
    {
        $this->conexion->close();
    }
}