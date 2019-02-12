<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 06/02/2019
 * Time: 12:02 PM
 */

namespace AppData\Model;


class InicioAdmin
{

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

    public function getPape()
    {
        $sql="SELECT articulo.nombre, categoria_tipo.tipo as Area, categoria.tipo AS unidad, almacen.cantidad, almacen.f_alta FROM articulo, categoria_tipo, categoria, almacen WHERE articulo.id_categoria=categoria.id_categoria AND articulo.id_cattipo=categoria_tipo.id_cattipo AND almacen.id_articulo=articulo.id_articulo ";
        $datos=$this->conexion->QuerResultado($sql);
        return $datos;
    }


}