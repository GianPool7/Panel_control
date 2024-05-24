<?php

    header('Content-type: text/html; charset=utf-8');
        
    require ('conexion.php');
    
    include('includes/header.php');

  
?>

    <div class="content-body">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="row">


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
          
 
            
                if ($conn->set_charset('utf8') === false) {
                die('Error: ' .  $conn->error);
                }
            
            
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
            title: 'R. DE EMPRESAS POR PROGRAMA DE ESTUDIOS',
            subtitle: 'R. DE EMPRESAS POR PROGRAMA DE ESTUDIOS',
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