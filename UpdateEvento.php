<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('conexion.php');
                        
$idevento         = $_POST['idevento'];

$evento            = ucwords($_REQUEST['evento']);
$dese            = ucwords($_REQUEST['dese']);
$f_inicio          = $_REQUEST['fechainicio'];
$fechainicio       = date('Y-m-d', strtotime($f_inicio)); 

$f_fin             = $_REQUEST['fechafin']; 
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 1 days");
$fechafin         = date('Y-m-d', ($fecha_fin1)); 
$hora            = ucwords($_REQUEST['hora']);
$color      = $_REQUEST['color'];

$UpdateProd = ("UPDATE eventoscalendar 
    SET evento ='$evento',
        dese ='$dese',
        fechainicio ='$fechainicio',
        fechafin ='$fechafin',
        hora ='$hora',
        color ='$color'
    WHERE idevento='".$idevento."' ");
$result = mysqli_query($conne, $UpdateProd);

header("Location:home.php?ea=1");
?>