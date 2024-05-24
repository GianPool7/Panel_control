<?php

require ('../conexion.php');

header("Content-Type: application/vnd.ms-excel; charset-utf8_spanish2_ci");
header("Content-Disposition: attachment; filename= Egresados.xls");

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
                        <th>Tipo estudiante</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Dni</th>
                        <th>Carrera</th>
                        <th>Ciclo</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Distrito</th>
                        <th>Año</th>
                        <th>Semestre</th>
                        <th>Trabaja</th>
                        <th>Condicion</th>
                        <th>Cargo</th>
                        <th>Nombre de Empresa</th>
                        <th>tiempo</th>
                        <th>Tipo de Empresa</th>
                        <th>Remuneración</th>
                        <th>Justificacion</th>
                        <th>Razon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query="SELECT * FROM estudiante where tipoe!='estudiante';";
                        $result_empresas=mysqli_query($conne,$query);

                        while ($row=mysqli_fetch_array($result_empresas)) { ?>
                        <tr>
                            <td><?php echo $row ['tipoe']?></td>
                            <td><?php echo $row ['nombrese']?></td>
                            <td><?php echo $row ['apellidose']?></td>
                            <td><?php echo $row ['numdoce']?></td>
                            <td><?php echo $row ['carrerae']?></td>
                            <td><?php echo $row ['cicloe']?></td>
                            <td><?php echo $row ['emaile']?></td>
                            <td><?php echo $row ['telfe']?></td>
                            <td><?php echo $row ['distritoe']?></td>
                            <td><?php echo $row ['anioeg']?></td>
                            <td><?php echo $row ['semestreeg']?></td>
                            <td><?php echo $row ['labura']?></td>
                            <td><?php echo $row ['condicionestu']?></td>
                            <td><?php echo $row ['cargoestu']?></td>
                            <td><?php echo $row ['nombreempresaestud']?></td>
                            <td><?php echo $row ['tiempo']?></td>
                            <td><?php echo $row ['tipoempresaestud']?></td>
                            <td><?php echo $row ['remu']?></td>
                            <td><?php echo $row ['porqueestud']?></td>
                            <td><?php echo $row ['razon']?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>