<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 07/02/2019
 * Time: 01:39 PM
 */

namespace AppData\Model;


class Alta
{
    private $tabla="users",$nombre,$apellidos,$email,$password,$id_sucursal, $tabla2="sucursal",$contraseña2, $is_admin;

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

    public function getAll()
    {
        $sql="SELECT * FROM {$this->tabla} WHERE is_admin=2";
        $datos=$this->conexion->QuerResultado($sql);
        return $datos;
    }

    public function getOne($id)
    {
        $sql="SELECT id_user,nombre,apellidos,email,users.password,id_sucursal FROM {$this->tabla} where id_user={$id} and is_admin=2 ";
        $datos=$this->conexion->QuerResultado($sql);
        return $datos;
    }

    public function update($id)
    {
        $sql="UPDATE {$this->tabla} SET nombre='{$this->nombre}' and apellidos='{$this->apellidos}' and email='{$this->email}' and password='{$this->password}' and id_sucursal={$this->id_sucursal} WHERE id_user={$id} and  is_admin=2";
        $this->conexion->QuerySimple($sql);
    }

    public function add()
    {
        $sql="INSERT INTO {$this->tabla} VALUES('','{$this->nombre}','{$this->apellidos}','{$this->email}','{$this->is_admin}','{$this->password}','{$this->id_sucursal}','{$this->contraseña2}') ";
        $this->conexion->QuerySimple($sql);
    }

    public function delete($id)
    {
        $sql="DELETE FROM {$this->tabla} WHERE id_user={$id}";
        $this->conexion->QuerySimple($sql);
    }

    public function getsuc()
    {
        $sql="SELECT * FROM {$this->tabla2}";
        $datos=$this->conexion->QuerResultado($sql);
        return $datos;
    }
}