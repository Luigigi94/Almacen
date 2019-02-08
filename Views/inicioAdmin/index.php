<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 01/02/2019
 * Time: 12:34 PM
 */

?>

<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <?=$_SESSION['nombre']." ".$_SESSION['apellidos'];?>
        </li>
    </ol>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Papeleria</a>
        </li>
        <li class="breadcrumb-item active">General</li>
    </ol>

    <!-- Icon Cards-->

    <!-- Area Chart Example-->
<!--    <div class="card mb-3">-->
<!--        <div class="card-header">-->
<!--            <i class="fas fa-chart-area"></i>-->
<!--            Area Chart Example</div>-->
<!--        <div class="card-body">-->
<!--            <canvas id="myAreaChart" width="100%" height="30"></canvas>-->
<!--        </div>-->
<!--        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
<!--    </div>-->

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Almacen</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
<!--                        <th>id</th>-->
                        <th>Nombre de Artículo</th>
                        <th>Área</th>
                        <th>Unidad</th>
                        <th>Cantidad</th>
                        <th>Fecha de Alta</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
<!--                        <th>id</th>-->
                        <th>Nombre de Artículo</th>
                        <th>Área</th>
                        <th>Unidad</th>
                        <th>Cantidad</th>
                        <th>Fecha de Alta</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php require("tablapape.php") ?>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">

            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

<!--    DataTable Exmaple 2 -->
<!--    <div class="card mb-3">-->
<!--        <div class="card-header">-->
<!--            <i class="fas fa-table"></i>-->
<!--            Data Table Papeleria</div>-->
<!--        <div class="card-body">-->
<!--            <div class="table-responsive">-->
<!--                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>id</th>-->
<!--                        <th>Nombre de Artícuadsadasdlo</th>-->
<!--                        <th>Cantidad</th>-->
<!--                        <th>Fecha de Expedición</th>-->
<!--                        <th>Encargado</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tfoot>-->
<!--                    <tr>-->
<!--                        <th>id</th>-->
<!--                        <th>Nombre de Artículo</th>-->
<!--                        <th>Cantidad</th>-->
<!--                        <th>Fecha de Expedición</th>-->
<!--                        <th>Encargado</th>-->
<!--                    </tr>-->
<!--                    </tfoot>-->
<!--                    <tbody>-->
<!--                    --><?php //require("tablacafe.php") ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!---->
<!--            <div class="table-responsive">-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
<!--    </div>-->
</div>
<!-- /.container-fluid -->
