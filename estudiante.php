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
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Registro de la tabla de estudiante</h4>
                            <br>
                            <a href="reportes/r_estudiante.php" target="_blank" class="btn btn-danger" >PDF</a>
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
                                            <th>Tipo estudiante</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Carrera</th>
                                            <th>Email</th>
                                            <th>Trabaja?</th>
                                            <th>Ver</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Tipo estudiante</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Carrera</th>
                                            <th>Email</th>
                                            <th>Trabaja?</th>
                                            <th>Ver</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $query="SELECT * FROM estudiante where tipoe='estudiante';";
                                            $result_empresas=mysqli_query($conne,$query);

                                            while ($row=mysqli_fetch_array($result_empresas)) { ?>
                                            <tr>
                                                <td><?php echo $row ['tipoe']?></td>
                                                <td><?php echo $row ['nombrese']?></td>
                                                <td><?php echo $row ['apellidose']?></td>
                                                <td><?php echo $row ['carrerae']?></td>
                                                <td><?php echo $row ['emaile']?></td>
                                                <td><?php echo $row ['labura']?></td>
                                                <td>
                                                    <a href="EditarE.php?idestudiante=<?php echo $row ['idestudiante']?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        <?php }?>
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

