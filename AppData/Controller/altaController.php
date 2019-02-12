<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 07/02/2019
 * Time: 01:37 PM
 */

namespace AppData\Controller;


class altaController
{
    private $alta;
    public function __construct()
    {
        $this->alta= new \AppData\Model\Alta();
    }

    public function index()
    {
        $datos[0]=$this->alta->getAll();
        $datos[1]=$this->alta->getsuc();
        return $datos;
    }

    public function crear()
    {
        if ($_POST){
            $this->alta->set('nombre',$_POST['nombre']);
            $this->alta->set('apellidos',$_POST['apellidos']);
            $this->alta->set('email',$_POST['email']);
            $this->alta->set('password',$_POST['password']);
            $this->alta->set('id_sucursal',$_POST['id_sucursal']);
            $this->alta->set('is_admin',$_POST['is_admin']);
            $this->alta->set('contraseña2',$_POST['contraseña2']);
            $this->alta->set('is_admin',$_POST['is_admin']);


            $this->alta->add();

            $datos[0]=$this->alta->getAll();
//            header('Location:'.URL.'Alta');
            ?>
            <script type="text/javascript">
                window.location="<?=URL?>Alta";
            </script> <?php
            return $datos;
        }
    }

    public function modificar($id)
    {
        $datos=$this->alta->getOne($id[0]);
        return $datos;
//        print_r(json_encode(mysqli_fetch_assoc($datos)));
    }

    public function eliminar($id)
    {
        $this->alta->delete($id[0]);
        $datos[0]=$this->alta->getAll();
        return $datos;
    }

    public function actualizar($id)
    {
        if ($_POST){
            $this->alta->set('id_user',$_POST['$id']);
            $this->alta->set('nombre',$_POST['nombre']);
            $this->alta->set('apellidos',$_POST['apellidos']);
            $this->alta->set('email',$_POST['email']);
            $this->alta->set('password',$_POST['password']);
            $this->alta->set('id_sucursal',$_POST['id_sucursal']);

            $this->alta->update($id);
            ?>
            <script type="text/javascript">
                window.location="<?=URL?>Alta";
            </script> <?php
        }
    }


}