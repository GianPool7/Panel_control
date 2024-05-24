<?php

    header('Content-type: text/html; charset=utf-8');
    
    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
      die('Error: ' .  $conne->error);
    }


    if (isset($_GET['idestudiante'])) {
        $idestudiante=$_GET['idestudiante'];

        $query="SELECT * FROM estudiante WHERE idestudiante=$idestudiante;";

        $result=mysqli_query($conne,$query);
        if (mysqli_num_rows($result)==1) {
            $row=mysqli_fetch_array($result);
            
            $nombrese=$row['nombrese'];
            $apellidose=$row['apellidose'];
            $tipodoce=$row['tipodoce'];
            $numdoce=$row['numdoce'];
            $passestu=$row['passestu'];
            $carrerae=$row['carrerae'];
            $emaile=$row['emaile'];
            $telfe=$row['telfe'];
            $anioeg=$row['anioeg'];
            $semestreeg=$row['semestreeg'];

        }
    }

    if (isset($_POST['editaregresado'])) {

        $idestudiante=$_GET['idestudiante'];

        $nombrese=$_POST['nombrese'];
        $apellidose=$_POST['apellidose'];
        $tipodoce=$_POST['tipodoce'];
        $numdoce=$_POST['numdoce'];
        $passestu=$_POST['passestu'];
        $carrerae=$_POST['carrerae'];
        $cicloe=$_POST['cicloe'];
        $emaile=$_POST['emaile'];
        $telfe=$_POST['telfe'];
        $anioeg=$_POST['anioeg'];
        $semestreeg=$_POST['semestreeg'];
        
        $query="UPDATE estudiante SET nombrese='$nombrese', apellidose='$apellidose',tipodoce='$tipodoce',numdoce='$numdoce',passestu=sha1('$passestu'),carrerae='$carrerae',emaile='$emaile',telfe='$telfe',anioeg='$anioeg',semestreeg='$semestreeg'  WHERE idestudiante='$idestudiante'";

        mysqli_query($conne,$query);

        header('Location:egresado.php');
        
    }


?>

<?php
include('includes/header.php');
?>

<div class="content-body">
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <form action="Editaregresado.php?idestudiante=<?php echo $_GET['idestudiante'];?>" method="post" >

                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombrese" value="<?php echo $nombrese;?>">
                        </div>

                    </div>

                    
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellidos</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apellidose" value="<?php echo $apellidose;?>">
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">N DOC</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="numdoce" value="<?php echo $numdoce;?>">
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Contraseña</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="passestu" value="<?php echo $passestu;?>">
                        </div>

                    </div>
                    
                    <!---

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Ciclo</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cicloe" value="<?php echo $cicloe;?>">
                        </div>

                    </div>
                    
                    --->

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emaile" value="<?php echo $emaile;?>">
                        </div>

                    </div>
                    
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telfe" value="<?php echo $telfe;?>">
                        </div>

                    </div>
                    <!----
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Año</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="anioeg" value="<?php echo $anioeg;?>">
                        </div>

                    </div>
                    --->
                    
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Semestre</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="semestreeg" value="<?php echo $semestreeg;?>">
                        </div>

                    </div>
                    
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="exampleInputEmail1">carrera</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="carrerae" value="<?php echo $carrerae;?>">
                        </div>

                    </div>

                </div>
                
                <!----

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telfe" value="<?php echo $telfe;?>">
                        </div>

                    </div>


                </div>

                --->
                
                    <a href="egresado.php" class="btn btn-warning" >Cancelar</a>
                    
                    <button type="submit" class="btn btn-primary" name="editaregresado" >Editar</button>
                    
            </form>
        </div>

    </div>
</div>
    <!-- /.container-fluid -->


<?php
include ('includes/footer.php');
?>