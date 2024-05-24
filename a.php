
<?php

$conne=mysqli_connect(
    "localhost",
    "root",
    "",
    "ibpastor_sistemabolsa"
);




$query="SELECT * FROM cuenta";
$result=mysqli_query($conne,$query);
$chart_data='';

while ($row = mysqli_fetch_array($result)) {
    $chart_data.="{year:'".$row["year"]."',profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sale"]."},";
}

$chart_data=substr($chart_data,0,-2);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gráficos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.min.js" integrity="sha512-synHs+rLg2WDVE9U0oHVJURDCiqft60GcWOW7tXySy8oIr0Hjl3K9gv7Bq/gSj4NDVpc5vmsNkMGGJ6t2VpUMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js" integrity="sha512-j4t/Zu3RKgAxOcA1NyhbIcvo2N4xkhdmWGW48b4ir3fJ2FUifmgNF0qfknzYGkuQO/HQmwawwB0zBjKWizYWGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js" integrity="sha512-6Cwk0kyyPu8pyO9DdwyN+jcGzvZQbUzQNLI0PadCY3ikWFXW9Jkat+yrnloE63dzAKmJ1WNeryPd1yszfj7kqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>


    <br/> <br/>


    <div class="container" style="width:900px">

        <h2>prueba</h2>

        <div class="" id="chart"></div>


    </div>
    
</body>
</html>

<script>

    Morris.Bar({
        
        element:'chart',
        data:[<?php echo $chart_data;?>],
        xkey:'year',
        ykeys:['profit','purchase','sale'],
        labels:['profit','purchase','sale'],
        hidehover:'auto',

    });

</script>



<?php
?>