<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 01/02/2019
 * Time: 11:44 AM
 */

namespace Views;


class Template
{
    public function header()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>SB Admin - Dashboard</title>

            <!-- Custom fonts for this template-->
            <link href="<?=URL?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

            <!-- Page level plugin CSS-->
            <link href="<?=URL?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

            <!-- Custom styles for this template-->
            <link href="<?=URL?>Public/CSS/sb-admin.css" rel="stylesheet">

            <script src="<?=URL?>vendor/jquery/jquery.min.js"></script>

        </head>
        <?php if (isset($_SESSION["email"])) {?>
        <body id="page-top">

        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                           aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0 hoverli">
                <li class="nav-item dropdown no-arrow mx-1 hoverli">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <span class="badge badge-danger">9+</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1 hoverli">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <span class="badge badge-danger">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow hoverli">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </div>
                </li>
            </ul>

        </nav>

        <div id="wrapper">
        <?php
        if ($_SESSION["is_admin"]==1){
//            echo $_SESSION["email"]." y ".$_SESSION["is_admin"];
    ?>
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?=URL?>inicioAdmin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Principal</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Usuarios</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Opciones:</h6>
                    <a class="dropdown-item" href="<?=URL?>Alta">Crear</a>
                    <a class="dropdown-item" href="<?=URL?>Baja">Eliminar</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Otras Paginas:</h6>
                    <a class="dropdown-item" href="#">Almacen</a>
                    <a class="dropdown-item" href="#">Sucursales</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
        </ul>


        <?php
    }
        else{
            echo "<ul class='sidebar navbar-nav'>
            <li class='nav-item active'>
                <a class='nav-link' href='index.html'>
                    <i class='fas fa-fw fa-tachometer-alt'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href=''#' id='pagesDropdown' role='button' data-toggle='dropdown'
                   aria-haspopup='true' aria-expanded='false'>
                    <i class='fas fa-fw fa-folder'></i>
                    <span>Pages</span>
                </a>
                <div class='dropdown-menu' aria-labelledby='pagesDropdown'>
                    <h6 class='dropdown-header'>Login Screens:</h6>
                    <a class='dropdown-item' href='login.html'>Login</a>
                    <a class='dropdown-item' href='register.html'>Register</a>
                    <a class='dropdown-item' href='forgot-password.html'>si sirve con el gerente alv</a>
                    <div class='dropdown-divider'></div>
                    <h6 class='dropdown-header'>Other Pages:</h6>
                    <a class='dropdown-item' href='404.html'>404 Page</a>
                    <a class='dropdown-item' href='blank.html'>Blank Page</a>
                </div>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='charts.html'>
                    <i class='fas fa-fw fa-chart-area'></i>
                    <span>Charts</span></a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='tables.html'>
                    <i class='fas fa-fw fa-table'></i>
                    <span>Tables</span></a>
            </li>
        </ul>";
        }

        ?>
               <div id="content-wrapper"> <?php
        }
    }
    public function Footer()
    {
        ?>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>

        </div>
        <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?=URL?>Login/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->

        <script src="<?=URL?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?=URL?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="<?=URL?>vendor/chart.js/Chart.min.js"></script>
        <script src="<?=URL?>vendor/datatables/jquery.dataTables.js"></script>
        <script src="<?=URL?>vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?=URL?>Public/JS/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="<?=URL?>Public/JS/demo/datatables-demo.js"></script>
        <script type="text/javascript">
            $(".hoverli").hover(function () {
                $("ul.nav-item").slideDown('medium');
            }, function () {
                $("ul.nav-item").slideUp("medium");
            });
        </script>
<!--        <script src="--><?//=URL?><!--Public/JS/demo/chart-area-demo.js"></script>-->

        </body>

        </html>

        <?php
    }
}