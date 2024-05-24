<?php

    header('Content-type: text/html; charset=utf-8');
    
    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
      die('Error: ' .  $conne->error);
    }

    include('conexion.php');

    if (isset($_GET['idempresa'])) {
        $idempresa=$_GET['idempresa'];

        $query="SELECT * FROM empresa WHERE idempresa=$idempresa;";

        $result=mysqli_query($conne,$query);
        if (mysqli_num_rows($result)==1) {
            $row=mysqli_fetch_array($result);
            
            $nombrerze=$row['nombrerze'];
            $nruce=$row['nruce'];
            $distritoe=$row['distritoe'];
            $tele=$row['tele'];
            $contactoe=$row['contactoe'];
            $ccontactoempresa=$row['ccontactoempresa'];
            $celulare=$row['celulare'];
            $correoe=$row['correoe'];
            $programaee=$row['programaee'];
            $detallee=$row['detallee'];
            $logoempresa=$row['logoempresa'];

        }
    }

    if (isset($_POST['editarempresa'])) {

        $idempresa=$_GET['idempresa'];

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
        

        // Comprobar si se ha cargado un archivo
        if (isset($_FILES['logoempresa'])) {

            extract($_POST);
            // Definir la carpeta de destino
            $carpeta_destino = "logos/";
            // Obtener el nombre y la extensi贸n del archivo
            $nombre_archivo = basename($_FILES["logoempresa"]["name"]);
            $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
            // Validar la extensi贸n del archivo
            if ($extension == "gif" || $extension == "jpeg" || $extension == "webp" || $extension == "png"|| $extension == "jpg") {
                // Mover el archivo a la carpeta de destino
                if (move_uploaded_file($_FILES["logoempresa"]["tmp_name"], $carpeta_destino . $nombre_archivo)) {
                    // Insertar la informaci贸n del archivo en la base de datos
                    
                    header('Content-type: text/html; charset=utf-8');
                    
                    require ('conexion.php');
                
                    if ($conne->set_charset('utf8') === false) {
                    die('Error: ' .  $conne->error);
                    }
                    
                    $sql = "UPDATE empresa SET nombrerze='$nombrerze',nruce='$nruce',distritoe='$distritoe',tele='$tele',contactoe='$contactoe',ccontactoempresa='$ccontactoempresa',celulare='$celulare',correoe='$correoe',programaee='$programaee',detallee='$detallee',logoempresa='$nombre_archivo' WHERE idempresa=$idempresa;";
                    $resultado = mysqli_query($conne, $sql);

                    if ($resultado) {
                        echo "<script language='JavaScript'>
                        alert('Archivo Subido');
                        location.assign('empresas.php');
                        </script>";
                    } else {
                        echo "<script language='JavaScript'>
                        alert('Error al subir el archivo: ');
                        location.assign('empresas.php');
                        </script>";
                    }

                } else {
                    echo "<script language='JavaScript'>
                    alert('Error al subir el archivo. ');
                    location.assign('empresas.php');
                    </script>";
                    echo $idempresa;
                }

            } else {
                echo "<script language='JavaScript'>
                alert('Solo se permiten archivos PNG, JPG y JPEG.');
                location.assign('empresas.php');
                </script>";
            }

            }

            
        }



?>

<?php
include('includes/header.php');
?>

<div class="content-body">
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
        <form action="EditarE.php?idempresa=<?php echo $_GET['idempresa'];?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre o Razon Social</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombrerze" value="<?php echo $nombrerze;?>">
                    </div>

                </div>

                
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Numero RUC</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nruce" value="<?php echo $nruce;?>">
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Distrito</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="distritoe" value="<?php echo $distritoe;?>">
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tele" value="<?php echo $tele;?>">
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Contacto</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contactoe" value="<?php echo $contactoe;?>">
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Cargo contacto</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ccontactoempresa" value="<?php echo $ccontactoempresa;?>">
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Celular</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="celulare" value="<?php echo $celulare;?>">
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correoe" value="<?php echo $correoe;?>">
                    </div>

                </div>


            </div>

            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Especialidad</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="programaee" value="<?php echo $programaee;?>">
                    </div>

                </div>


                <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Cuentanos</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="detallee" value="<?php echo $detallee;?>">
                    </div>

                </div>
            </div>
            
            <div class="form-group">
              <label for="formFile" class="form-label">Logo</label>
              <input class="form-control" type="file" id="formFile" name="logoempresa"> <?php echo $logoempresa;?>
            </div>


                <a href="empresas.php" class="btn btn-warning" >Cancelar</a>
                
                <button type="submit" class="btn btn-primary" name="editarempresa" >Editar</button>
                
        </form>
        </div>

    </div>
</div>
    <!-- /.container-fluid -->


<?php
include ('includes/footer.php');
?>