<?php
     $insertarCliente = new ControladorClientes();
     $insertarCliente -> CtrInsertarCliente();
?> 
         <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tabla de clientes</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="inicio" class="fw-normal">Inicio</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="box-title"><center>Tabla de clientes</center></h3>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarCliente">
                                    Nuevo Cliente
                                </button>
                            </div>
                            <div class="card-body table-responsive">
                                <table  class="table table-striped table-bordered" name="tablaClientes" id="tablaClientes">
                                    <thead>
                                        <tr>
                                            <th style="width:10px">#</th>
                                            <th>Nombre</th>
                                            <th>Representante Legal</th>
                                            <th>RFC</th>
                                            <th>Telefono</th>
                                            <th>Celular</th>
                                            <th>Dirección</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>CEMEX</td>
                                            <td>Representante 1</td>
                                            <td class="text-center">CEMEX-RFC</td>
                                            <td>845123345</td>
                                            <td>845123345</td>
                                            <td class="text-center">Cementos</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-warning btnEditar" aria-label = "btnEditar" idCliente="1" data-bs-toggle="modal" data-bs-target="#modalEditarCliente"><i class="fas fa-pencil-alt"></i></button>
                                                    <button class="btn btn-danger btnEliminar" aria-label = "btnEliminar" idCliente="1"><i class="far fa-trash-alt"></i></button>
                                                </div>
                                            </td>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

             <!--=====================================
            MODAL AGREGAR CLIENTE
            ======================================-->
            <div id="modalAgregarCliente" class="modal fade"  aria-labelledby="modalAgregarClienteLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        
                        <!--=====================================
                        CABEZA DEL MODAL
                        ======================================-->
                        <div class="modal-header">
                            <center><h4 class="modal-title" id="modalAgregarClienteLabel">Agregar Cliente</h4></center>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <!--<span aria-hidden="true">&times;</span>-->
                            </button>
                        </div>
                        <!--=====================================
                        CUERPO DEL MODAL
                        ======================================-->
                        <form id="AgregarCliente" name="AgregarCliente" role="form" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="box-body">

                                    <!-- ENTRADA PARA EL NOMBRE -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" style=""><i class="fas fa-user"></i></span>
                                            <div class="form-floating col">
                                                <input type="text" class="form-control" name="nuevoNombre" id="nuevoNombre" required>
                                                <label for="nuevoNombre">Nombre</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ENTRADA PARA EL REPRESENTANTE-->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" style=""><i class="fas fa-user"></i></span>
                                            <div class="form-floating col">
                                                <input type="text" class="form-control" name="nuevoRepre" id="nuevoRepre" required>
                                                <label for="nuevoRepre">Representante</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ENTRADA PARA EL RFC -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" style=""><i class="fas fa-clipboard-check"></i></span>
                                            <div class="form-floating col">
                                                <input type="text" class="form-control"id="nuevoRFC"  name="nuevoRFC"  required>
                                                <label for="nuevoRFC">RFC</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ENTRADA PARA EL TELEFONO-->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" style=""><i class="fas fa-clipboard-check"></i></span>
                                            <div class="form-floating col">
                                                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" style="height: 100px;" id="nuevoTel"  name="nuevoTel" required>
                                                <label for="nuevoTel">Telefono</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ENTRADA PARA EL CELULAR-->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" style=""><i class="fas fa-clipboard-check"></i></span>
                                            <div class="form-floating col">
                                                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" style="height: 100px;" id="nuevoCel"  name="nuevoCel" required>
                                                <label for="nuevoCel">Celular</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ENTRADA PARA LA DIRECCIÓN-->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" style=""><i class="fas fa-clipboard-check"></i></span>
                                            <div class="form-floating col">
                                                <textarea type="text" class="form-control" style="height: 100px;" id="nuevaDireccion"  name="nuevaDireccion" required></textarea>
                                                <label for="nuevaDireccion">Dirección</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                        Final de las entradas
                                    -->
                                </div>
                            </div>

                            <!--=====================================
                            PIE DEL MODAL
                            ======================================-->
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-secondary pull-left" data-bs-dismiss="modal">Salir</button>
                                <button type="submit"  class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--=====================================
            END MODAL AGREGAR CLIENTE
            ======================================-->
            <!--=====================================
            MODAL EDITAR CLIENTE
            ======================================-->
            <div id="modalEditarCliente" class="modal fade"  aria-labelledby="modalEditarClienteLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        
                        <!--=====================================
                        CABEZA DEL MODAL
                        ======================================-->
                        <div class="modal-header">
                            <center><h4 class="modal-title" id="modalEditarClienteLabel">Agregar Cliente</h4></center>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <!--<span aria-hidden="true">&times;</span>-->
                            </button>
                        </div>
                        <!--=====================================
                        CUERPO DEL MODAL
                        ======================================-->
                        <form id="editarCliente" name="editarCliente" role="form" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="box-body">

                                    <!-- ENTRADA PARA EDITAR EL NOMBRE -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" style=""><i class="fas fa-user"></i></span>
                                            <div class="form-floating col">
                                                <input type="text" class="form-control" name="editarNombre" id="editarNombre" required>
                                                <input type="hidden" class="form-control" name="id" id="id" required>
                                                <label for="editarNombre">Nombre</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ENTRADA PARA EDITAR EL RFC -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" style=""><i class="fas fa-clipboard-check"></i></span>
                                            <div class="form-floating col">
                                                <input type="text" class="form-control"id="editarRFC"  name="editarRFC"  required>
                                                <label for="editarRFC">RFC</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ENTRADA PARA EDITAR LA DESCRIPCIÓN-->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" style=""><i class="fas fa-clipboard-check"></i></span>
                                            <div class="form-floating col">
                                                <textarea type="text" class="form-control" style="height: 100px;" id="editarDescripcion"  name="editarDescripcion" required></textarea>
                                                <label for="editarDescripcion">Descripción</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!--
                                        Final de las entradas
                                    -->
                                </div>
                            </div>

                            <!--=====================================
                            PIE DEL MODAL
                            ======================================-->
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-secondary pull-left" data-bs-dismiss="modal">Salir</button>
                                <button type="submit"  class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--=====================================
            END MODAL AGREGAR CLIENTE
            ======================================-->
