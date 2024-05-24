<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
//$hora = date("g:i:A");

require("conexion.php");
$evento            = ucwords($_REQUEST['evento']);
$dese            = ucwords($_REQUEST['dese']);
$f_inicio          = $_REQUEST['fechainicio'];
$fechainicio      = date('Y-m-d', strtotime($f_inicio)); 

$f_fin             = $_REQUEST['fechafin']; 
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 1 days");
$fechafin         = date('Y-m-d', ($fecha_fin1));  
$hora         = ucwords($_REQUEST['hora']);  
$color            = $_REQUEST['color'];


$InsertNuevoEvento = "INSERT INTO eventoscalendar(
      evento,
      dese,
      fechainicio,
      fechafin,
      hora,
      color
      )
    VALUES (
      '" .$evento. "',
      '" .$dese. "',
      '". $fechainicio."',
      '" .$fechafin. "',
      '" .$hora. "',
      '" .$color. "'
  )";
$resultadoNuevoEvento = mysqli_query($conne, $InsertNuevoEvento);

header("Location:home.php?e=1");

?>