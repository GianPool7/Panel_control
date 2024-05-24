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

                    <!-- Button trigger modal 

                    <div class="col-md-7">
                      <form action="recibEgresados.php" method="POST" enctype="multipart/form-data">
                        <div class="file-input text-center">
                            <input  type="file" name="dataClientes" id="file-input" class="file-input__input"/>
                            <label class="file-input__label" for="file-input">
                              <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
                              <span>Elegir Archivo Excel</span></label>
                          </div>
                          <div class="text-center mt-5">
                          <input type="submit" name="subir" class="btn btn-danger" value="Subir Excel"/>
                        </div>
                      </form>
                    </div>
                    
                    -->


                <div class="row page-titles mx-0">
                    <div class="col-sm-12 p-md-0">
                        <div class="welcome-text">
                            <h4>REPORTE ENCUESTA SEGUIMIENTO DE EGRESADOS</h4>
                            <br>
                            <a href="reportes/r_egresado.php" target="_blank" class="btn btn-danger" >PDF</a>
                            <a href="excel/re_egresados.php" class="btn btn-success" >EXCEL</a>
                            <!----<a href="excel/re_egresados.php" class="btn btn-success" >EXCEL</a>--->
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
                                            <th>Email</th>
                                            <th>Año</th>
                                            <th>Semestre</th>
                                            <!---<th>Acciones</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //and anioeg BETWEEN 2021 AND 2023
                                            $query="SELECT * FROM estudiante where  tipoe!='Estudiante';";
                                            $result_empresas=mysqli_query($conne,$query);

                                            while ($row=mysqli_fetch_array($result_empresas)) { ?>
                                            <tr>
                                                <td class="text-dark"><?php echo $row ['nombrese']?></td>
                                                <td class="text-dark"><?php echo $row ['apellidose']?></td>
                                                <td class="text-dark"><?php echo $row ['carrerae']?></td>
                                                <td class="text-dark"><?php echo $row ['emaile']?></td>
                                                <td class="text-dark"><?php echo $row ['anioeg']?></td>
                                                <td class="text-dark"><?php echo $row ['semestreeg']?></td>
                                                <!--- <td>

                                                    <a href="vere.php?idestudiante=<?php //echo $row ['idestudiante']?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                    <a href="Editaregresado.php?idestudiante=<?php //echo $row ['idestudiante']?>" class="btn btn-warning"><i class="fas fa-pen"></i></a>

                                                </td> --->
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

