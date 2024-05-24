<?php

    header('Content-type: text/html; charset=utf-8');
            
    include('includes/header.php');
    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
    die('Error: ' .  $conne->error);
    }

?>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Puestos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    
                    <form action="AgregarPuestoAdmin.php" method="post">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Empresa</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="idempresa">
                                    <label for="exampleFormControlSelect1">Empresa</label>
                                        <?php 

                                        $consultaemrpesass="SELECT * FROM empresa";

                                        $mostrar=mysqli_query($conne,$consultaemrpesass) or die(mysqli_error($conne));

                                        ?>

                                        <?php foreach($mostrar as $opciones):?>

                                    <option value="<?php echo $opciones['idempresa'];?>"><?php echo $opciones['nombrerze'];?></option>

                                        <?php endforeach?>

                                    </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipo de Puesto</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="situacionp">
                                <option value="Practicas">Practicas</option>
                                <option value="Empleo">Empleo</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Puesto</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="puestot">
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vacantes</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="vacantesp">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fecha</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fechap">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Sexo</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="sexop">
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
                                <select class="form-control" id="exampleFormControlSelect1" name="especialidadp">
                                <option value="DESARROLLO DE SISTEMAS">Desarrollo de sistemas</option>
                                <option value="CONTABILIDAD">Contabilidad</option>
                                <option value="ADMINISTRACION DE EMPRESAS">Administración</option>
                                <option value="ADMINISTRACION DE EMPRESAS Y CONTABILIDAD">Adm y Con</option>
                                <option value="TODAS">Todas</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Condición</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="condicionp">
                                <option value="Estudiante I-VI ciclo">Estudiante I-VI ciclo</option>
                                <option value="Estudiante II-IV ciclo">Estudiante II-IV ciclo</option>
                                <option value="Estudiante V-VI ciclo">Estudiante V-VI ciclo</option>
                                <option value="Egresado">Egresado</option>
                                <option value="Egresado y estudiante">Estudiante - Egresado</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    
                    <div class="row">

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Requisitos</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="requisitosp"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <div class="form-group">
                                <label for="inputCity">Funciones</label>
                                <textarea type="text" class="form-control" id="inputCity" rows="3" name="funcionesp"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Experiencia</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="expp">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">Curso</label>
                            <input type="text" class="form-control" id="inputZip" name="cursop">
                        </div>

                        <div class="form-group col-md-4">
                                <label for="exampleFormControlSelect1">Nivel</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="nivelcursop">
                                <option value="Basico">Básico</option>
                                <option value="Intermedio">Intermedio</option>
                                <option value="Avanzado">Avanzado</option>
                                </select>
                        </div>

                    </div>

                    <div class="row">
                        
                        <div class="col ">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Frecuencia</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="frecuenciap">
                            </div>
                        </div>
                                            

                        <div class="col ">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Horario</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="horariop">
                            </div>
                        </div>

                    </div>
                        
                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputCity">Remuneración</label>
                            <input type="text" class="form-control" id="inputCity" name="remuneracionp">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">Distrito</label>
                            <input type="text" class="form-control" id="inputZip" name="distritop">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputZip">Dirección</label>
                            <input type="text" class="form-control" id="inputZip" name="direccionp">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jornada</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jornadap">
                                <option value="Planilla">Planilla</option>
                                <option value="Recibo Por Honorario">Recibo Por Honorario</option>
                                <option value="Sin especificar">Sin especificar</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Beneficios</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="beneficiop">
                            </div>
                        </div>

                    </div>


                        <button type="submit" class="btn btn-primary" name="agregarPuesto" >Agregar</button>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>REGISTRO DE OFERTAS LABORALES</h4>
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Agregar Puestos
                            </button>

                            <a href="reportes/r_puestos.php" target="_blank" class="btn btn-danger" >PDF</a>
                            <a href="" class="btn btn-success" >EXCEL</a>

                        </div>
                    </div>
                </div>
                <!-- row -->


                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lista</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <!--<th>Empresa</th>-->
                                                <th>Puesto</th>
                                                <th>Especialidad</th>
                                                <th>Experiencia</th>
                                                <th>Sexo</th>
                                                <th>Remuneración</th>
                                                <th>jornada</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-dark">
                                            <?php
                                                //$query="SELECT empresa.nomorazonsocialempresa,puesto.idpuesto,puesto.Ptrabajo,puesto.numvacpuesto,puesto.fecvenconpuesto,puesto.perfilpuesto,puesto.especilidadpuesto,puesto.condicionpuesto,puesto.sexopuesto,puesto.rangoedadpuesto,puesto.exppuesto,puesto.funcionespuesto,puesto.idiomapuesto,puesto.nivelidiomapuesto,puesto.conocimientopuesto,puesto.horariopuesto,puesto.remunpuesto,puesto.distritopuesto,puesto.direcpuesto,puesto.jornadapuesto,puesto.benefpuesto
                                                //       FROM puesto";


                                                $querycrud="SELECT * FROM puesto";

                                                $result_puestosg=mysqli_query($conne,$querycrud);

                                                while ($row=mysqli_fetch_array($result_puestosg)) { ?>

                                                <tr>
                                                    <!--<td><?php //echo $row ['nomorazonsocialempresa']?></td>-->
                                                    <td><?php echo $row ['puestot']?></td>
                                                    <td><?php echo $row ['especialidadp']?></td>
                                                    <td><?php echo $row ['expp']?></td>
                                                    <td><?php echo $row ['sexop']?></td>
                                                    <td>S/ <?php echo $row ['remuneracionp']?></td>
                                                    <td><?php echo $row ['jornadap']?></td>
                                                    <td>
                                                        <a href="EditarP.php?idpuesto=<?php echo $row ['idpuesto']?>" class="btn btn-success"><i class="fas fa-pen"></i></a> 
                                                        <a href="EliminarP.php?idpuesto=<?php echo $row ['idpuesto']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <?php

include('includes/footer.php');


?>

