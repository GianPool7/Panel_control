<?php

  include('includes/header.php');

  require ('conexion.php');
?>

    <div class="content-body">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        
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
                                    <div id="tipo_empresa" style="width: 100%; height: 500px;"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="remuneracion" style="width: 100%; height: 500px;"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>



<!--- EGRESADOS QUE TRABAJAN--->

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
            title: 'POBLACIÓN DE EGRESADOS, SEGÚN CONDICIÓN DE ACTIVIDAD (LABORA O NO)',
            subtitle: 'Los registros de egresados',
        };

        var chart = new google.visualization.PieChart(document.getElementById('egresados_trabajadores'));
        chart.draw(data, options);
      }
    </script>

<!---FIN DE EGRESADOS QUE TRABAJAN--->

<!--- TIPO DE EMPRESAS --->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([

          ['Tipo de estudiante', 'Cantidad'],

              <?php
                
                $querys="SELECT tipoempresaestud,count(tipoempresaestud)as tipo FROM estudiante where labura='Si' and tipoe!='Estudiante'  and tipoempresaestud!='' GROUP BY tipoempresaestud;";
                $resp=mysqli_query($conn,$querys);
                while($data=mysqli_fetch_array($resp)){
                  $year=$data['tipoempresaestud'];
                  $sale=$data['tipo'];
              ?>
              ['<?php echo $year;?>',<?php echo $sale;?>],  
              <?php   
                }
              ?> 

        ]);

        var options = {
            title: 'POBLACIÓN DE EGRESADOS QUE LABORAN SEGÚN TIPO DE EMPRESA',
            subtitle: 'Los registros de Grafico de tipos de empresa',
        };

        var chart = new google.visualization.PieChart(document.getElementById('tipo_empresa'));
        chart.draw(data, options);
      }
    </script>

<!---FIN TIPO DE EMPRESAS--->


<!--- remuneracion --->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([

          ['Tipo de estudiante', 'Cantidad'],

              <?php
                
                $querys="SELECT remu,count(remu)as sueldo FROM estudiante where labura='Si' and tipoe!='Estudiante' and remu!='' GROUP BY remu;";
                $resp=mysqli_query($conn,$querys);
                while($data=mysqli_fetch_array($resp)){
                  $year=$data['remu'];
                  $sale=$data['sueldo'];
              ?>
              ['<?php echo $year;?>',<?php echo $sale;?>],  
              <?php   
                }
              ?> 

        ]);

        var options = {
            title: 'POBLACIÓN DE EGRESADOS, SEGÚN DIFERENCIA SALARIAL',
            subtitle: 'Los registros de Grafico de tipos de empresa',
        };

        var chart = new google.visualization.PieChart(document.getElementById('remuneracion'));
        chart.draw(data, options);
      }
    </script>


<!---FIN remuneracion--->





<?php

include('includes/footer.php');

?>