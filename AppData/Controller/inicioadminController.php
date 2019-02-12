<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 06/02/2019
 * Time: 12:02 PM
 */

namespace AppData\Controller;


class inicioadminController
{
    private $inicioadmin;

    public function __construct()
    {
        $this->inicioadmin = new \AppData\Model\InicioAdmin();
    }

    public function index()
    {
//        $datos[0]=$this->inicioadmin->getCafe();
        $datos[0]=$this->inicioadmin->getPape();
        return $datos;

    }
}