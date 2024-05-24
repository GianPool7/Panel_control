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
                            <h4>REPORTE ENCUESTA SATISFACIÓN DE EGRESADOS</h4>
                            <br>
                            <a href="reportes/r_estudiante.php" target="_blank" class="btn btn-danger" >PDF</a>
                            <a href="excel/re_satisfacion.php" class="btn btn-success" >EXCEL</a>
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
                                            <th>¿La carrera profesional que estudió lo ayudó a insertarse laboralmente?</th>                                            
                                            <th>Situación</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Carrera</th>
                                            <th>Año</th>
                                            <th>Semestre</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-dark">
                                        <?php
                                            $query="SELECT * FROM estudiante where tipoe!='estudiante';";
                                            $result_empresas=mysqli_query($conne,$query);

                                            while ($row=mysqli_fetch_array($result_empresas)) { ?>
                                            <tr>
                                                <td>Si</td>
                                                <td><?php echo $row ['tipoe']?></td>
                                                <td><?php echo $row ['nombrese']?></td>
                                                <td><?php echo $row ['apellidose']?></td>
                                                <td><?php echo $row ['carrerae']?></td>
                                                <td><?php echo $row ['anioeg']?></td>
                                                <td><?php echo $row ['semestreeg']?></td>
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

