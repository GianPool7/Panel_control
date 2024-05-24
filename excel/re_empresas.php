<?php

require ('../conexion.php');

header("Content-Type: application/vnd.ms-excel; charset-utf8_spanish2_ci");
header("Content-Disposition: attachment; filename= InsercionLaboral.xls");
/*
header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename= archivo.xls");*/



?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de egresados</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Ruc</th>
                        <th>Contacto</th>
                        <th>Cargo de contacto</th>
                        <th>Correo de empresa</th>
                        <th>detalle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query="SELECT * FROM empresa;";
                        $result_empresas=mysqli_query($conne,$query);

                        while ($row=mysqli_fetch_array($result_empresas)) { ?>
                        <tr>
                            <td><?php echo $row ['nombrerze']?></td>
                            <td><?php echo $row ['nruce']?></td>
                            <td><?php echo $row ['contactoe']?></td>
                            <td><?php echo $row ['ccontactoempresa']?></td>
                            <td><?php echo $row ['correoe']?></td>
                            <td><?php echo $row ['detallee']?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>