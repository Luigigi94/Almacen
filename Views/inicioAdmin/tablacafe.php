<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 06/02/2019
 * Time: 11:57 AM
 */

$datoscafe=$datos[1];

while ($row=mysqli_fetch_array($datoscafe)){
    echo "
<tr>
    <td>
    {$row["id"]}
    </td>
    <td>
    {$row["nombre"]}
    </td>
    <td>
    {$row["cantidad"]}
    </td>
    <td>
    {$row["fecha_sacar"]}
    </td>
    <td>
    {$row["nombrecito"]}
    </td>
</tr>";
}
