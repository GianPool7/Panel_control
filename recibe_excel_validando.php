<?php
require('conexion.php');

$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);
       
        $nomapee                        = !empty($datos[0])  ? ($datos[0]) : '';
        $dnie                           = !empty($datos[1])  ? ($datos[1]) : '';
        $carreraturnoe                  = !empty($datos[2])  ? ($datos[2]) : '';
        $asemestree                     = !empty($datos[3])  ? ($datos[3]) : '';
        

        
       
if( !empty($nomapee) ){
    $checkemail_duplicidad = ("SELECT nomapee FROM redusys WHERE nomapee='".($nomapee)."' ");
            $ca_dupli = mysqli_query($conne, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }   

//No existe Registros Duplicados
if ( $cant_duplicidad == 0 ) { 

$insertarData = "INSERT INTO redusys( 
   	nomapee,
    dnie,
    carreraturnoe,
    asemestree
) VALUES(
    '$nomapee',
    '$dnie',
    '$carreraturnoe',
    '$asemestree'
)";
mysqli_query($conne, $insertarData);
        
} 
/**Caso Contrario actualizo el o los Registros ya existentes*/
else{
    $updateData =  ("UPDATE redusys SET 
        nomapee='" .$nomapee. "',
		dnie='" .$dnie. "',
        carreraturnoe='" .$carreraturnoe. "', 
        asemestree='" .$asemestree. "',
        WHERE nomapee='" .$nomapee. "'
    ");
    $result_update = mysqli_query($conne, $updateData);
    } 
  }

 $i++;
}

?>

<a href="reporteedusys.php">Atras</a>