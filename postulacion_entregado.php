<?php


    header('Content-type: text/html; charset=utf-8');
    
    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
      die('Error: ' .  $conne->error);
    }

    if (isset($_GET['idpostular'])) {
        $idpostular=$_GET['idpostular'];
        $query="UPDATE postular SET estado='Entregado' where idpostular='$idpostular'";
        $resultado_eliminado=mysqli_query($conne,$query);
        if (!$resultado_eliminado) {
            die("Error del codigo al eliminar, llamar soporte xd");
        }

        header("Location:postulados.php");

    }
        


?>