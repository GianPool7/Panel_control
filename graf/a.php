<?php

  include('includes/header.php');

  require ('conexion.php');
?>


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
                
                $query="SELECT tipoe,count(tipoe)as a FROM estudiante GROUP BY tipoe;";
                $res=mysqli_query($conn,$query);
                while($data=mysqli_fetch_array($res)){
                  $year=$data['tipoe'];
                  $sale=$data['a'];
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

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

    <div class="content-body">
      <div class="container-fluid">

        <div id="piechart_3d" style="width: 100%; height: 500px;"></div>

      </div>
    </div>


  </body>
</html>

<?php

include('includes/footer.php');

?>