<?php
require_once('conexion.php');
$idevento    		= $_REQUEST['idevento']; 

$sqlDeleteEvento = ("DELETE FROM eventoscalendar WHERE  idevento='" .$idevento. "'");
$resultProd = mysqli_query($conne, $sqlDeleteEvento);

?>
  