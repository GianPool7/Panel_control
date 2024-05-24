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
                            <h4>REPORTE DE POSTULANTES A OFERTAS DE TRABAJO</h4>
                            <br>
                            <a href="reportes/r_postulados.php" target="_blank" class="btn btn-danger" >PDF</a>
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
                                                <th>puesto</th>
                                                <th>empresa</th>
                                                <th>estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody  class="text-dark">
                                            <?php
                                                $query="SELECT idpostular,nombrese,apellidose,puestot,nombrerze,estado
                                                FROM postular
                                                INNER JOIN estudiante 
                                                ON estudiante.idestudiante = postular.idestudiante";

                                                $result_asesorias=mysqli_query($conne,$query);

                                                while ($row=mysqli_fetch_array($result_asesorias)) { ?>
                                                <tr>
                                                    <td><?php echo $row ['nombrese']?></td>
                                                    <td><?php echo $row ['puestot']?></td>
                                                    <td><?php echo $row ['nombrerze']?></td>
                                                    <td><?php echo $row ['estado']?></td>
                                                    
                                                    <td>
                                                        <a href="postulacion_recibido.php?idpostular=<?php echo $row ['idpostular']?>" name="recibido" class="btn btn-info">Recibido</a>
                                                        <a href="postulacion_entregado.php?idpostular=<?php echo $row ['idpostular']?>" class="btn btn-warning">Entregado</a>
                                                        <a href="postulacion_finalizado.php?idpostular=<?php echo $row ['idpostular']?>" class="btn btn-danger">Finalizado</a>
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
        
        
        
        ?>
        
        

        <?php

include('includes/footer.php');


?>

