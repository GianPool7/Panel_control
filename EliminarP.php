<?php

    include("conexion.php");

    if (isset($_GET['idpuesto'])) {
        $idpuesto=$_GET['idpuesto'];
        $query="DELETE FROM puesto where idpuesto='$idpuesto'";
        $resultado_eliminado=mysqli_query($conne,$query);
        if (!$resultado_eliminado) {
            die("Error del codigo al eliminar, llamar soporte xd");
        }

        header("Location:puestos.php");

    }

?>