<?php

    header('Content-type: text/html; charset=utf-8');
    

    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
      die('Error: ' .  $conne->error);
    }



if (isset($_POST ['insertare'])) {


    $nombrerze=$_POST['nombrerze'];
    $nruce=$_POST['nruce'];
    $distritoe=$_POST['distritoe'];
    $tele=$_POST['tele'];
    $contactoe=$_POST['contactoe'];
    $ccontactoempresa=$_POST['ccontactoempresa'];
    $celulare=$_POST['celulare'];
    $correoe=$_POST['correoe'];
    $programaee=$_POST['programaee'];
    $detallee=$_POST['detallee'];
    
    $logoempresa= $_FILES['logoempresa']['name'];
    
    
    if(isset($logoempresa) && $logoempresa != ""){
        
        $tipo = $_FILES['logoempresa']['type'];
        $temp  = $_FILES['logoempresa']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp')|| strpos($tipo,'png')))){
          /*$_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          header('location:../index.php');*/
       }else{
         $query = "INSERT INTO empresa(nombrerze,nruce,distritoe,tele,contactoe,ccontactoempresa,celulare,correoe,programaee,detallee,logoempresa)values('$nombrerze','$nruce','$distempresa','$tele','$contactoe','$ccontactoempresa','$celulare','$correoe','$programaee','$detallee','$logoempresa')";
         $resultado = mysqli_query($conne,$query);
         if($resultado){
              move_uploaded_file($temp,'logos/'.$logoempresa);   
             /*$_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';*/
             header('location:empresas.php');
         }else{
             //$_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             //$_SESSION['tipo'] = 'danger';
         }
       }
    }
}