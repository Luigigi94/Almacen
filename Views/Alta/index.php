<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 07/02/2019
 * Time: 01:36 PM
 */?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabele">Agregar Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="formclientes" method="post" action="" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required="required" autofocus="autofocus">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" id="is_admin" name="is_admin" class="form-control" required="required" value="2" hidden>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellido" required="required">
                                        <label for="apellidos">Apellido</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Correo" required="required">
                                <label for="email">Correo</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="password" id="confirmPassword" name="contraseña2" class="form-control" placeholder="Confirmar Contraseña" required="required">
                                        <label for="confirmPassword" id="labelpass">Confirmar Contraseña</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <select name="id_sucursal" id="id_sucursal" class="form-control">
                                    <option disabled selected value="dis">Sucursal</option>
                                    <?php
                                    $dato=$datos[1];
                                    while ($row=mysqli_fetch_array($dato)){
                                        echo "<option value='{$row['id_sucursal']}'>{$row['nombre']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!--                        <a class="btn btn-primary btn-block" href="--><?//=URL?><!--Alta/crear">Agregar</a>-->

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="enviarcrear" id="crearusuario">Crear</button>
                <button type="submit" class="btn btn-primary" name="enviarupdate" id="updateusuario">Actualizar</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Main Container -->

<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table fa-align-right"></i>
            Data Table Usuarios

<!--            <a class="btn btn-success" href="#" data-toggle="modal tooltip" data-target="#addModal" data-placement="top" title="Crear Usuarios"><i class="fas fa-plus-square"> </i></a>-->
            <button type="button" id="openmodal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus-square"> </i>
            </button>

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Email</td>
                        <td>Contraseña</td>
                        <td>Sucursal</td>
                        <td>Contraseña2</td>
                        <td>Modificar</td>
                        <td>Eliminar</td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Email</td>
                        <td>Contraseña</td>
                        <td>Sucursal</td>
                        <td>Contraseña2</td>
                        <td>Modificar</td>
                        <td>Eliminar</td>
                    </tr>
                    </tfoot>
                    <tbody id="bodytable">
                    <?php require("tabla.php") ?>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">

            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>


<script type="text/javascript">
     $(document).ready(function () {
         $("#openmodal").click(function () {
             $("#exampleModalLabele").html('Crear Usuarios');
             $("#formclientes").trigger("reset");
             $("#updateusuario").hide();
             $("#crearusuario").show();
             $("#formclientes").attr('action','<?=URL?>Alta/crear');
             });

         $("#bodytable").on("click","button#out",function () {
             $("#exampleModalLabele").html('Modificar Usuario');
             $("#labelpass").hide();
             $("#confirmPassword").hide();
             $("#crearusuario").hide();
             $("#updateusuario").show();
             $("#formclientes").attr('action','<?=URL?>Alta/actualizar');
             var id=$(this).data("id");
             $.get("<?=URL?>Alta/modificar/"+id,function (res) {
                 var datos=JSON.parse(res);
                 console.log(datos);
                 $("#id").val(datos["user_id"]);
                 $("#nombre").val(datos['nombre']);
                 $("#apellidos").val(datos['apellidos']);
                 $("#email").val(datos['email']);
                 $("#password").val(datos['password']);
                 $("#id_sucursal").val(datos['id_sucursal']);
             });
             $("#exampleModal").modal("show");
             $("#updateusuario").click(function () {
                 $("#formclientes").attr('action','<?=URL?>Alta/actualizar');
                 var id=$(this).data("id");
                 $.post('<?=URL?>Alta/actualizar/'+id, function (res) {
                     $("#formclientes").trigger('reset');
                     $("#bodytable").empty().append(res);
                     $("#exampleModal").modal('hide')
                 });
             });
         });

     });
</script>




