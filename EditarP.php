<?php

    header('Content-type: text/html; charset=utf-8');
    
    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
      die('Error: ' .  $conne->error);
    }



    if (isset($_GET['idpuesto'])) {
        $idpuesto=$_GET['idpuesto'];

        /*$query="SELECT empresa.nomorazonsocialempresa,empresa.distempresa,empresa.comenempresa,puesto.idpuesto,puesto.areapuesto,puesto.Ptrabajopuesto,puesto.numvacpuesto,puesto.fecvenconpuesto,puesto.perfilpuesto,puesto.especilidadpuesto,puesto.condicionpuesto,puesto.sexopuesto,puesto.rangoedadpuesto,puesto.exppuesto,puesto.funcionespuesto,puesto.idiomapuesto,puesto.nivelidiomapuesto,puesto.conocimientopuesto,puesto.horariopuesto,puesto.remunpuesto,puesto.distritopuesto,puesto.direcpuesto,puesto.contrapuesto,puesto.benefpuesto
                FROM empresa
                INNER JOIN puesto ON empresa.idempresa = puesto.idempresa WHERE idpuesto=$idpuesto;";*/

        $query="SELECT * FROM puesto WHERE idpuesto=$idpuesto;";

        $result=mysqli_query($conne,$query);
        if (mysqli_num_rows($result)==1) {
            $row=mysqli_fetch_array($result);

            $idempresa=$row['idempresa'];
            $situacionp=$row['situacionp'];
            $puestot=$row['puestot'];
            $vacantesp=$row['vacantesp'];
            $fechap=$row['fechap'];
            $sexop=$row['sexop'];
            $especialidadp=$row['especialidadp'];
            $condicionp=$row['condicionp'];
            $requisitosp=$row['requisitosp'];
            $funcionesp=$row['funcionesp'];
            $expp=$row['expp'];
            $cursop=$row['cursop'];
            $nivelcursop=$row['nivelcursop'];
            $frecuenciap=$row['frecuenciap'];
            $horariop=$row['horariop'];
            $remuneracionp=$row['remuneracionp'];
            $distritop=$row['distritop'];
            $direccionp=$row['direccionp'];
            $jornadap=$row['jornadap'];
            $beneficiop=$row['beneficiop'];


        }
    }

    if (isset($_POST['editarpuestos'])) {

        $idempresa=$_GET['idempresa'];
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


        $query="UPDATE puesto SET situacionp='$situacionp', puestot='$puestot',vacantesp='$vacantesp',fechap='$fechap',sexop='$sexop',especialidadp='$especialidadp',condicionp='$condicionp',requisitosp='$requisitosp',funcionesp='$funcionesp',expp='$expp',cursop='$cursop',nivelcursop='$nivelcursop',frecuenciap='$frecuenciap',horariop='$horariop',remuneracionp='$remuneracionp',distritop='$distritop',direccionp='$direccionp',jornadap='$jornadap',beneficiop='$beneficiop' WHERE idpuesto=$idpuesto";
        
        mysqli_query($conne,$query);

        header('Location:puestos.php');
        
    }



?>

<?php
include('includes/header.php');
?>

<div class="content-body">
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <form action="EditarP.php?idpuesto=<?php echo $_GET['idpuesto'];?>" method="post">

                <div class="row">

                    <!--<div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Empresa</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="idempresa">
                                <label for="exampleFormControlSelect1">Empresa</label>
                                    <?php 
                            /*
                                    $consultaemrpesass="SELECT * FROM empresa";

                                    $mostrar=mysqli_query($conne,$consultaemrpesass) or die(mysqli_error($conne));
                                    */
                                    ?>

                                    <?php //foreach($mostrar as $opciones):?>

                                <option value="<?php //echo $opciones['idempresa'];?>"><?php //echo $opciones['nomorazonsocialempresa'];?></option>

                                    <?php// endforeach?>

                                </select>
                        </div>
                    </div> -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Situacion de Puesto</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="situacionp">
                            <option value="<?php echo $situacionp?>"><?php echo $situacionp?></option>
                            <option value="Practicas">Practicas</option>
                            <option value="Empleo">Empleo</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Puesto</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="puestot" value="<?php echo $puestot;?>">
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vacantes</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="vacantesp" value="<?php echo $vacantesp?>">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fecha</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fechap" value="<?php echo $fechap?>">
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sexo</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="sexop">
                            <option value="<?php echo $sexop?>"><?php echo $sexop?></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Ambos">Ambos</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Especialidad</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="especialidadp" >
                            <option value="<?php echo $especialidadp?>"><?php echo $especialidadp?></option>
                            <option value="Desarrollo de sistemas">Desarrollo de sistemas</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Administracion de empresas">Administracion</option>
                            <option value="Administracion de empresas y Contabilidad">Adm y Con</option>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Condicion</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="condicionp">
                            <option value="<?php echo $condicionp?>"><?php echo $condicionp?></option>
                            <option value="Estudiante II-IV ciclo">Estudiante II-IV ciclo</option>
                            <option value="Estudiante V-VI ciclo">Estudiante V-VI ciclo</option>
                            <option value="Egresado">Egresado</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Requisitos</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="requisitosp" value="<?php echo $requisitosp?>"><?php echo $requisitosp?></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">
                        <div class="form-group">
                            <label for="inputCity">Funciones</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="funcionesp" value="<?php echo $funcionesp?>"><?php echo $funcionesp?></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Experiencia</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="expp" value="<?php echo $expp?>">
                        </div>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="inputState">Curso</label>
                        <input type="text" class="form-control" id="inputZip" name="cursop" value="<?php echo $cursop?>">
                    </div>

                    <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Nivel</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="nivelcursop">
                            <option value="<?php echo $nivelcursop?>"><?php echo $nivelcursop?></option>
                            <option value="Basico">Basico</option>
                            <option value="Intermedio">Intermedio</option>
                            <option value="Avanzado">Avanzado</option>
                            </select>
                    </div>

                </div>

                <div class="row">

                    <div class="col ">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Frecuencia</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="frecuenciap" value="<?php echo $frecuenciap?>">
                        </div>
                    </div>

                    <div class="col ">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Horario</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="horariop" value="<?php echo $horariop?>">
                        </div>
                    </div>

                </div>
                    
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="inputCity">Remuneracion</label>
                        <input type="text" class="form-control" id="inputCity" name="remuneracionp" value="<?php echo $remuneracionp?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputState">Distrito</label>
                        <input type="text" class="form-control" id="inputZip" name="distritop" value="<?php echo $distritop?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputZip">Direccion</label>
                        <input type="text" class="form-control" id="inputZip" name="direccionp" value="<?php echo $direccionp?>">
                    </div>

                </div>

                <div class="row">

                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Contrato</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="jornadap">
                            <option value="<?php echo $jornadap?>"><?php echo $jornadap?></option>
                            <option value="Planilla">Planilla</option>
                            <option value="Recibo Por Honorario">Recibo Por Honorario</option>
                            <option value="Sin especificar">Sin especificar</option>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Beneficios</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="beneficiop" value="<?php echo $beneficiop?>">
                        </div>
                    </div>

                </div>
                    <br>

                    <a href="puestos.php" class="btn btn-warning">Cancelar</a>
                    <button type="submit" class="btn btn-primary" name="editarpuestos" >Editar</button>
            </form>
            <br>
        </div>

    </div>
</div>
    <!-- /.container-fluid -->


<?php
include ('includes/footer.php');
?>