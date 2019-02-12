<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 07/02/2019
 * Time: 09:57 PM
 */

$dato=$datos[0];
while ($row=mysqli_fetch_array($dato))
{
    echo "
    <tr>
        <td>{$row['nombre']}</td>
        <td>{$row['apellidos']}</td>
        <td>{$row['email']}</td>
        <td>{$row['password']}</td>
        <td>{$row['id_sucursal']}</td>
        <td>{$row['contraseña2']}</td>
        <td><button type='button' class='btn btn-default' data-toogle='modal' id='out' data-id='{$row['id_user']}'><i class='fas fa-user-edit'></i></button></td>
        <td><button type='button' class='btn btn-default' data-toogle='modal' id='cut' data-id='{$row['id_user']}'><i class='fas fa-trash'></i></button></td>
    </tr>
    ";
}