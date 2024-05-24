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
                        <th>Apellidos</th>
                        <th>Programa de estudios</th>
                        <th>Trabaja</th>
                        <th>Nombre de la empresa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query="SELECT * FROM estudiante where tipoe!='estudiante';";
                        $result_empresas=mysqli_query($conne,$query);

                        while ($row=mysqli_fetch_array($result_empresas)) { ?>
                        <tr>
                            <td><?php echo $row ['nombrese']?></td>
                            <td><?php echo $row ['apellidose']?></td>
                            <td><?php echo $row ['carrerae']?></td>
                            <td><?php echo $row ['labura']?></td>
                            <td><?php echo $row ['nombreempresaestud']?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>