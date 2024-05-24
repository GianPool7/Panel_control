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

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <div class="row page-titles mx-0">
                    <div class="col-sm-12 p-md-0">
                        <div class="welcome-text">
                            <h4>REPORTE DE INSERCIÓN LABORAL</h4>
                            <br>
                            <a href="reportes/r_insercion.php" class="btn btn-danger" >PDF</a>
                            <a href="excel/re_insercion.php" class="btn btn-success" >EXCEL</a>
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
                                                <th>Situación Académica</th>
                                                <th>Trabaja</th>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Carrera</th>
                                                <th>Año</th>
                                                <th>Semestre</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-dark">
                                            <?php
                                                
                                                $query="SELECT * FROM estudiante WHERE tipoe!='estudiante' ORDER BY labura DESC ;";
                                                
                                                $result_pos=mysqli_query($conne,$query);

                                                while ($row=mysqli_fetch_array($result_pos)) { 
                                            ?>
                                                <tr>
                                                    <td><?php echo $row ['tipoe']?></td>
                                                    <td><?php echo $row ['labura']?></td>
                                                    <td><?php echo $row ['nombrese']?></td>
                                                    <td><?php echo $row ['apellidose']?></td>
                                                    <td><?php echo $row ['carrerae']?></td>
                                                    <td><?php echo $row ['anioeg']?></td>
                                                    <td><?php echo $row ['semestreeg']?></td>
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
