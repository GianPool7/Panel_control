<?php

    include('includes/header.php');


?>

    <div class="content-body">
        <div class="container-fluid">

            <div class="row">
                
                <div class="col-12">
                    
                    <div class="row">

<!----
                        <div class="col-lg-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">

                                    <a href="../reportes/r_graf_seg.php" target="_blank" class="btn btn-danger" >PDF</a>

                                </div>
                            </div>
                        </div> -->

                        <div class="col-lg-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">

                                    <div id="tipos_estudiantes" style="width: 100%; height: 500px;"></div>
                                    

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">

                                    <div id="por_carrera" style="width: 100%; height: 500px;"></div>

                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">

                                    <div id="por_anio" style="width: 100%; height: 500px;"></div>

                                </div>
                            </div>
                        </div>
                        


                    </div>
                    
                </div>
                
            </div>

        </div>
    </div>






<!---TIPOS DE ESTUDIANTES--->



        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
              ['Situación Académica', 'Cantidad'],

              <?php
              
                    header('Content-type: text/html; charset=utf-8');
        
                    require ('conexion.php');
                
                    if ($conn->set_charset('utf8') === false) {
                    die('Error: ' .  $conn->error);
                    }
                
                $query="SELECT tipoe,count(tipoe)as cantidades FROM estudiante where tipoe!='estudiante' GROUP BY tipoe;";
                $res=mysqli_query($conn,$query);
                while($data=mysqli_fetch_array($res)){
                  $yea=$data['tipoe'];
                  $sal=$data['cantidades'];
              ?>
              ['<?php echo $yea;?>',<?php echo $sal;?>],   
              <?php   
                }
              ?> 
            ]);

            var options = {
              chart: {
                title: 'EGRESADOS, SEGÚN SU SITUACIÓN ACADÉMICA',
                subtitle: '2023',
              },
              bars: 'vertical', // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('tipos_estudiantes'));
            chart.draw(data, options);


          }
        </script>



<!--FIN DE TIPOS--->


<!---Egresados segun su carrera--->

        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
              ['CAMPO DE ESTUDIO ESPECÍFICO', 'Cantidad'],

              <?php
              
                  header('Content-type: text/html; charset=utf-8');
        
                    require ('conexion.php');
                
                    if ($conn->set_charset('utf8') === false) {
                    die('Error: ' .  $conn->error);
                    }
              
              
                
                $querys="SELECT carrerae,count(carrerae)as cantidad FROM estudiante where tipoe!='estudiante' GROUP BY carrerae;";
                $res=mysqli_query($conn,$querys);
                while($data=mysqli_fetch_array($res)){
                  $yea=$data['carrerae'];
                  $sal=$data['cantidad'];
              ?>
              ['<?php echo $yea;?>',<?php echo $sal;?>],   
              <?php   
                }
              ?> 
            ]);

            var options = {
              chart: {
                title: 'EGRESADOS, SEGÚN SU CAMPO DE ESTUDIO ESPECÍFICO',
                subtitle: '2023 ',
              },
              bars: 'vertical', // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('por_carrera'));
            chart.draw(data, options);


          }
        </script>

<!--FIN DE TIPOS--->


<!---Egresados segun su carrera--->

        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
              ['Año de Egresado', 'Cantidad'],

              <?php
              
                  header('Content-type: text/html; charset=utf-8');
        
                    require ('conexion.php');
                
                    if ($conn->set_charset('utf8') === false) {
                    die('Error: ' .  $conn->error);
                    }
              
              
                
                $querys="SELECT anioeg,count(anioeg)as cantidades FROM estudiante where tipoe!='estudiante' and anioeg!='' GROUP BY anioeg;";
                $res=mysqli_query($conn,$querys);
                while($data=mysqli_fetch_array($res)){
                  $yea=$data['anioeg'];
                  $sal=$data['cantidades'];
              ?>
              ['<?php echo $yea;?>',<?php echo $sal;?>],   
              <?php   
                }
              ?> 
            ]);

            var options = {
              chart: {
                title: 'EGRESADOS, SEGÚN SU AÑO DE ESTUDIOS',
                subtitle: '2023 ',
              },
              bars: 'vertical', // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('por_anio'));
            chart.draw(data, options);


          }
        </script>

<!--FIN DE TIPOS--->



<!--- AÑO  
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
              ['Año de egreso', 'Cantidad'],

              <?php
              
                    header('Content-type: text/html; charset=utf-8');
        
                    require ('conexion.php');
                
                    if ($conn->set_charset('utf8') === false) {
                    die('Error: ' .  $conn->error);
                    }
                
                $queryss="SELECT anioeg,count(anioeg)as cantidad FROM estudiante where tipoe!='estudiante' GROUP BY anioeg;";
                $res=mysqli_query($conn,$queryss);
                while($data=mysqli_fetch_array($res)){
                  $yearsss=$data['anioeg'];
                  $sal=$data['cantidad'];
              ?>
              ['<?php echo $yearsss;?>',<?php echo $sal;?>],   
              <?php   
                }
              ?> 
            ]);

            var options = {
              chart: {
                    title: 'EGRESADOS, SEGÚN SU AÑO DE ESTUDIOS',
                    subtitle: '2023 ',
              },
              bars: 'vertical', // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('por_anio'));
            chart.draw(data, options);


          }
        </script>

<!---FIN AÑO--->









<?php

include('includes/footer.php');

?>