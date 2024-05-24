<?php

    header('Content-type: text/html; charset=utf-8');
        
    include('includes/header.php');
    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
    die('Error: ' .  $conne->error);
    }
    
?>
        <!--**********************************
            Sidebar end
        ***********************************-->

                <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">

                            <form action="AgregarEmpresa.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombrerze">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">RUC</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nruce">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Distrito</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="distritoe">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Telefono de empresa</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tele">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contacto</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contactoe">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cargo Contacto</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ccontactoempresa">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Celular de contacto</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="celulare">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo contacto</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correoe">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Programas</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="programaee">
                                            <option value="ADMINISTRACIÓN DE EMPRESAS">Administración de Empresas</option>
                                            <option value="CONTABILIDAD">Contabilidad</option>
                                            <option value="DESARROLLO DE SISTEMAS">Desarrollo de Sistemas</option>
                                            <option value="CONTABILIDAD Y DESARROLLO DE SISTEMAS">Contabilidad y Desarrollo de Sistemas</option>
                                            <option value="ADMINISTRACIÓN DE EMPRESAS Y DESARROLLO DE SISTEMAS">Administración de Empresas y Desarrollo de Sistemas</option>
                                            <option value="ADMINISTRACIÓN DE EMPRESAS Y CONTABILIDAD">Administración de Empresas y Contabilidad</option>
                                            <option value="TODAS">Todos</option>
                                        </select>
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cuentanos ...</label>
                                    <textarea type="text" class="form-control" id="inputCity" rows="3" name="detallee"></textarea>
                                </div>
                                
                                
                                <div class="form-group">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile" name="logoempresa">
                                </div>


                                <button type="submit" class="btn btn-primary" name="insertare" >Agregar</button>

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </form>

                        </div>
                    </div>
                </div>
        </div>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>REPORTE DE EMPRESAS</h4>
                            <br>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Agregar
                                </button>

                            <a href="reportes/r_empresa.php" target="_blank" class="btn btn-danger" >PDF</a>
                            <a href="re_empresas.php" class="btn btn-success" >EXCEL</a>
                        </div>
                    </div>
                </div>
                <!-- row -->


                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lista</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Logo</th>
                                                <th>Nombre</th>
                                                <th>Ruc</th>
                                                <th>Contacto</th>
                                                <th>Correo</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-dark">
                                            <?php
                                                $query="SELECT * FROM empresa;";
                                                $result_empresas=mysqli_query($conne,$query);

                                                while ($row=mysqli_fetch_array($result_empresas)) { ?>
                                                <tr>
                                                    <td><img class="img-thumbnail" src="logos/<?php echo $row ['logoempresa']?>" alt=""> </td>
                                                    <td><?php echo $row ['nombrerze']?></td>
                                                    <td><?php echo $row ['nruce']?></td>
                                                    <td><?php echo $row ['contactoe']?></td>
                                                    <td><?php echo $row ['correoe']?></td>
                                                    <td>
                                                        <a href="EditarE.php?idempresa=<?php echo $row ['idempresa']?>" class="btn btn-success"><i class="fas fa-pen"></i></a> 
                                                        <!---<a href="EliminarE.php?idempresa=<?php echo $row ['idempresa']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>--->
                                                    </td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<?php

include('includes/footer.php');

?>

