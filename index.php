<?php

require('conexion.php');

session_start();

if ($_POST) {
    
    $nombEusuario=$_POST['nombEusuario'];
    $passwEusuario=$_POST['passwEusuario'];

    $sql="SELECT idempleadosibp,nombrEmpleado,nombEusuario,passwEusuario FROM empleadosibp WHERE nombEusuario='$nombEusuario'";


    $resultados=$conne->query($sql);
    $num=$resultados->num_rows;


    if ($num>0) {
        
        $row=$resultados->fetch_assoc();
        $password_bd=$row['passwEusuario'];

        $pass_c=sha1($passwEusuario);

        if ($password_bd==$pass_c) {
            
            $_SESSION['idempleadosibp']=$row['idempleadosibp'];
            $_SESSION['nombrEmpleado']=$row['nombrEmpleado'];
            $_SESSION['nombEusuario']=$row['nombEusuario'];
            $_SESSION['passwEusuario']=$row['passwEusuario'];

            header("location:home.php");

        }else{
            echo "la contra esta mal";
        }


    }else{

    }

}

?>



<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Plataforma de seguimiento e inserción laboral</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center" style="background-image: url('images/fondo_loginibp.png');background-repeat: no-repeat;background-position: center;background-size: cover;">
                <div class="col-md-5">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h3 class="text-center mb-4"><B>BIENVENIDO</B> <br> <h5 class="text-center">Sistema de seguimiento e inserción laboral</h5></h3>
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <br>
                                        <div class="form-group">
                                            <label><strong>Usuario</strong></label>
                                            <input type="text" class="form-control" name="nombEusuario">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Contraseña</strong></label>
                                            <input type="password" class="form-control" name="passwEusuario">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>