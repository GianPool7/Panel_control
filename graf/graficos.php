<?php

  include('includes/header.php');

  require ('conexion.php');
?>

    <div class="content-body">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="row">
    <!----
                        <div class="col-lg-6 col-sm-6">

                            <div class="card">

                                <div class="card-body">

                                    <div id="estudiantes_trabajadores" style="width: 100%; height: 500px;"></div>

                                </div>

                            </div>
                        </div>
                    ---->

                        <div class="col-lg-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="egresados_trabajadores" style="width: 100%; height: 500px;"></div>
                                </div>
                            </div>
                        </div>


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

                                <div id="empresas" style="width: 100%; height: 500px;"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


<!---------->

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([

          ['Tipo de estudiante', 'Cantidad'],

              <?php
                
                $query="SELECT labura,count(labura)as cantidad FROM estudiante GROUP BY labura;";
                $res=mysqli_query($conn,$query);
                while($data=mysqli_fetch_array($res)){
                  $year=$data['labura'];
                  $sale=$data['cantidad'];
              ?>
              ['<?php echo $year;?>',<?php echo $sale;?>],  
              <?php   
                }
              ?> 

        ]);

        var options = {
            title: 'Grafico de Estudiantes',
            subtitle: 'Los registros de estudiantes',
        };

        var chart = new google.visualization.PieChart(document.getElementById('estudiantes_trabajadores'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

    <div class="content-body">
      <div class="container-fluid">

        <!----- <div id="piechart_3ds" style="width: 100%; height: 500px;"></div> --->

      </div>
    </div>


  </body>
</html>


<!--- EGRESADOS QUE TRABAJAN--->

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([

          ['Tipo de estudiante', 'Cantidad'],

              <?php
                
                $query="SELECT labura,count(labura)as cantidad FROM estudiante GROUP BY labura;";
                $res=mysqli_query($conn,$query);
                while($data=mysqli_fetch_array($res)){
                  $year=$data['labura'];
                  $sale=$data['cantidad'];
              ?>
              ['<?php echo $year;?>',<?php echo $sale;?>],  
              <?php   
                }
              ?> 

        ]);

        var options = {
            title: 'Grafico de egresados',
            subtitle: 'Los registros de egresados',
        };

        var chart = new google.visualization.PieChart(document.getElementById('egresados_trabajadores'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

    <div class="content-body">
      <div class="container-fluid">

        <!----- <div id="piechart_3ds" style="width: 100%; height: 500px;"></div> --->

      </div>
    </div>


  </body>
</html>

<!---FIN DE EGRESADOS QUE TRABAJAN--->


<!--- ESTUDIANTES QUE TRABAJAN--->

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Labora', 'Cantidad'],

              <?php
                
                $query="SELECT Labura,count(Labura)as cantidad FROM estudiante GROUP BY Labura;";
                $res=mysqli_query($conn,$query);
                while($data=mysqli_fetch_array($res)){
                  $year=$data['Labura'];
                  $sale=$data['cantidad'];
              ?>
              ['<?php echo $year;?>',<?php echo $sale;?>],   
              <?php   
                }
              ?> 
            ]);

            var options = {
              chart: {
                title: 'Grafico de Egresados que laboran',               
                subtitle: 'Los registros de Egresados que laboran',
              },
              bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('TIPOS DE ESTUDIANTES'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        </script>


  </head>
  <body>

    <div class="content-body">
      <div class="container-fluid">

        <!----- <div id="piechart_3d" style="width: 100%; height: 500px;"></div> --->

      </div>
    </div>


  </body>
</html>

<!---FIN DE ESTUDIANTES QUE TRABAJAN--->


<!----->


<!---TIPOS DE ESTUDIANTES--->


<html>
      <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
              ['Tipo de estudiante', 'Cantidad'],

              <?php
                
                $query="SELECT tipoe,count(tipoe)as a FROM estudiante GROUP BY tipoe;";
                $res=mysqli_query($conn,$query);
                while($data=mysqli_fetch_array($res)){
                  $yea=$data['tipoe'];
                  $sal=$data['a'];
              ?>
              ['<?php echo $yea;?>',<?php echo $sal;?>],   
              <?php   
                }
              ?> 
            ]);

            var options = {
              chart: {
                title: 'Reporte de Situación Académica ',
                subtitle: 'Reporte de Situación Académica',
              },
              bars: 'horizontal', // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('tipos_estudiantes'));
            chart.draw(data, options);


          }
        </script>
      </head>
      <body>
        <!----- <div id="barchart_material" style="width: 100px; height: 500px;"></div> --->
      </body>
</html>


<!--FIN DE TIPOS--->



<!--- EMPRESAS --->


<html>

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['programas', 'Cantidad'],
          <?php
            
            $query="SELECT programaee,count(programaee)as carrera FROM empresa GROUP BY programaee;";
            $res=mysqli_query($conn,$query);
            while($data=mysqli_fetch_array($res)){
              $year=$data['programaee'];
              $sale=$data['carrera'];
          ?>
          ['<?php echo $year;?>',<?php echo $sale;?>],   
          <?php   
            }
          ?> 
        ]);
        var options = {
          chart: {
            title: 'Reporte de empresas por programa',
            subtitle: 'Reporte de empresas por programa',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };
        var chart = new google.charts.Bar(document.getElementById('empresas'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <!---<div id="barchart_material" style="width: 1000px; height: 500px;"></div> --->
  </body>

</html>



<!----->


<?php

include('includes/footer.php');

?>