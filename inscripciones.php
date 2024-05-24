<?php

    header('Content-type: text/html; charset=utf-8');
        
    include('includes/header.php');
    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
    die('Error: ' .  $conne->error);
    }

?>
        <!--**********************************
            Sidebar end  style="border-style:dashed;"
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-12 p-md-0">
                        <div class="welcome-text">
                            <h4>REPORTE DE INSCRIPCIONES DE ACTIVIDADES Y/O EVENTOS</h4>
                            <br>
                            <a href="reportes/r_inscripciones.php" target="_blank" class="btn btn-danger" >PDF</a>
                            <a href="" class="btn btn-success" >EXCEL</a>
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
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                                <th>Carrera</th>
                                                <th>Correo</th>
                                                <th>Telefono</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-dark">
                                            <?php
                                                $query="SELECT * FROM inscripcionesasesorias;";
                                                $result_asesorias=mysqli_query($conne,$query);

                                                while ($row=mysqli_fetch_array($result_asesorias)) { ?>
                                                <tr>
                                                    <td><?php echo $row ['nombreia']?></td>
                                                    <td><?php echo $row ['apellidosia']?></td>
                                                    <td><?php echo $row ['telefonoia']?></td>
                                                    <td><?php echo $row ['carreraia']?></td>
                                                    <td><?php echo $row ['actual']?></td>
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

