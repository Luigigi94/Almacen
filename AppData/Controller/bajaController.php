<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 07/02/2019
 * Time: 01:39 PM
 */

namespace AppData\Controller;


class bajaController
{
    private $baja;

    public function __construct()
    {
        $this->baja = new \AppData\Model\Baja();
    }

    public function index()
    {

    }
}