<?php

    include("conexion.php");

    if (isset($_GET['idempresa'])) {
        $idempresa=$_GET['idempresa'];
        $query="DELETE FROM empresa where idempresa='$idempresa'";
        $resultado_eliminado=mysqli_query($conne,$query);
        if (!$resultado_eliminado) {
            die("Error del codigo al eliminar, llamar soporte xd");
        }

        header("Location:empresas.php");

    }

?>