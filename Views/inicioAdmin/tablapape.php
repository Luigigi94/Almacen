<?php
$datospape=$datos[0];

while ($row=mysqli_fetch_array($datospape)){
    echo "
<tr>
    <td>
    {$row["nombre"]}
    </td>
    <td>
    {$row["Area"]}
    </td>
    <td>
    {$row["unidad"]}
    </td>
    <td>
    {$row["cantidad"]}
    </td>
    <td>
    {$row["f_alta"]}
    </td>
</tr>";
}