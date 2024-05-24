<?php

    header('Content-type: text/html; charset=utf-8');
    
    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
      die('Error: ' .  $conne->error);
    }



//[]

if (isset($_POST ['agregarPuesto'])) {
    
    $idempresa=$_POST['idempresa'];
    $situacionp=$_POST['situacionp'];
    $puestot=$_POST['puestot'];
    $vacantesp=$_POST['vacantesp'];
    $fechap=$_POST['fechap'];
    
    $sexop=$_POST['sexop'];
    $especialidadp=$_POST['especialidadp'];
    $condicionp=$_POST['condicionp'];
    $requisitosp=$_POST['requisitosp'];
    $funcionesp=$_POST['funcionesp'];
    $expp=$_POST['expp'];
    
    $cursop=$_POST['cursop'];
    $nivelcursop=$_POST['nivelcursop'];
    $frecuenciap=$_POST['frecuenciap'];
    $horariop=$_POST['horariop'];
    
    $remuneracionp=$_POST['remuneracionp'];
    $distritop=$_POST['distritop'];
    $direccionp=$_POST['direccionp'];
    $jornadap=$_POST['jornadap'];
    $beneficiop=$_POST['beneficiop'];
    

    
    $query="INSERT INTO puesto(idempresa,situacionp,puestot,vacantesp,fechap,sexop,especialidadp,condicionp,requisitosp,funcionesp,expp,cursop,nivelcursop,frecuenciap,horariop,remuneracionp,distritop,direccionp,jornadap,beneficiop)values('$idempresa','$situacionp','$puestot','$vacantesp','$fechap','$sexop','$especialidadp','$condicionp','$requisitosp','$funcionesp','$expp','$cursop','$nivelcursop','$frecuenciap','$horariop','$remuneracionp','$distritop','$direccionp','$jornadap','$beneficiop')";


    $result=mysqli_query($conne,$query);

    if ($result) {
        header('Location:puestos.php');
    }


}

?>