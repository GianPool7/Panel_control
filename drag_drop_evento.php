<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('conexion.php');
                        
$idEvento         = $_POST['idEvento'];
$start            = $_REQUEST['start'];
$fechainicio     = date('Y-m-d', strtotime($start)); 
$end              = $_REQUEST['end']; 
$fechafin        = date('Y-m-d', strtotime($end));  


$UpdateProd = ("UPDATE eventoscalendar 
    SET 
        fechainicio ='$fechainicio',
        fechafin ='$fechafin'

    WHERE idevento='".$idEvento."' ");
$result = mysqli_query($conne, $UpdateProd);

?>