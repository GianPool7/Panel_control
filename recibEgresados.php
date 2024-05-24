<?php
require('conexion.php');

$tipo       = $_FILES['dataClientes']['type'];
$tamanio    = $_FILES['dataClientes']['size'];
$archivotmp = $_FILES['dataClientes']['tmp_name'];
$lineass     = file($archivotmp);

$i = 0;

foreach ($lineass as $line) {
    $cantidad_registros = count($lineass);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $dato = explode(";", $line);
       
        $tipoe                              = !empty($dato[0])  ? ($dato[0]) : '';
        $nombrese                           = !empty($dato[1])  ? ($dato[1]) : '';
        $apellidose                         = !empty($dato[2])  ? ($dato[2]) : '';
        $tipodoce                           = !empty($dato[3])  ? ($dato[3]) : '';
        $numdoce                            = !empty($dato[4])  ? ($dato[4]) : '';
        $passestu                           = !empty($dato[5])  ? ($dato[5]) : '';
        $carrerae                           = !empty($dato[6])  ? ($dato[6]) : '';
        $cicloe                             = !empty($dato[7])  ? ($dato[7]) : '';
        $emaile                             = !empty($dato[8])  ? ($dato[8]) : '';
        $telfe                              = !empty($dato[9])  ? ($dato[9]) : '';
        $direccione                         = !empty($dato[10])  ? ($dato[10]) : '';
        $distritoe                          = !empty($dato[11])  ? ($dato[11]) : '';
        $anioeg                             = !empty($dato[12])  ? ($dato[12]) : '';
        $semestreeg                         = !empty($dato[13])  ? ($dato[13]) : '';
        $labura                             = !empty($dato[14])  ? ($dato[14]) : '';
        $resumene                           = !empty($dato[15])  ? ($dato[15]) : '';
        $Sexo                               = !empty($dato[16])  ? ($dato[16]) : '';
        $cves                               = !empty($dato[17])  ? ($dato[17]) : '';
        $condicionestu                      = !empty($dato[18])  ? ($dato[18]) : '';
        $cargoestu                          = !empty($dato[18])  ? ($dato[18]) : '';
        $nombreempresaestud                 = !empty($dato[19])  ? ($dato[19]) : '';
        $tiempo                             = !empty($dato[20])  ? ($dato[20]) : '';
        $tipoempresaestud                   = !empty($dato[21])  ? ($dato[21]) : '';
        $remu                               = !empty($dato[22])  ? ($dato[22]) : '';
        $porqueestud                        = !empty($dato[23])  ? ($dato[23]) : '';
        $razon                              = !empty($dato[24])  ? ($dato[24]) : '';
        

        
       
if( !empty($nombrese) ){
    $checkemail_duplicidad = ("SELECT nombrese FROM estudiante WHERE nombrese='".($nombrese)."' ");
            $ca_dupli = mysqli_query($conne, $checkemail_duplicidad);
            $cant_duplicidadsa = mysqli_num_rows($ca_dupli);
        }   

//No existe Registros Duplicados
if ( $cant_duplicidadsa == 0 ) { 

$insertardato = "INSERT INTO estudiante( 

   	tipoe,
    tipoe,
    apellidose,
    tipodoce,
    numdoce,
    passestu,
    carrerae,
    cicloe,
    emaile,
    telfe,
    direccione,
    distritoe,
    anioeg,
    semestreeg,
    labura,
    resumene,
    Sexo,
    cves,
    condicionestu,
    cargoestu,
    nombreempresaestud,
    tiempo,
    tipoempresaestud,
    remu,
    porqueestud,
    razon

) VALUES(

    '$tipoe',
    '$tipoe',
    '$apellidose',
    '$tipodoce',
    '$numdoce',
    sha1('$passestu'),
    '$carrerae',
    '$cicloe',
    '$emaile',
    '$telfe',
    '$direccione',
    '$distritoe',
    '$anioeg',
    '$semestreeg',
    '$labura',
    '$resumene',
    '$Sexo',
    '$cves',
    '$condicionestu',
    '$cargoestu',
    '$nombreempresaestud',
    '$tiempo',
    '$tipoempresaestud',
    '$remu',
    '$porqueestud',
    '$razon'

)";
mysqli_query($conne, $insertardato);
        
} 
/**Caso Contrario actualizo el o los Registros ya existentes*/
else{
    $updatedato =  ("UPDATE estudiante SET 

        tipoe='" .$tipoe. "',
		nombrese='" .$nombrese. "',
        apellidose='" .$apellidose. "', 
        tipodoce='" .$tipodoce. "',
        numdoce='" .$numdoce. "',
		passestu='" .$passestu. "',
        carrerae='" .$carrerae. "', 
        cicloe='" .$cicloe. "',
		emaile='" .$emaile. "',
        telfe='" .$telfe. "', 
        direccione='" .$direccione. "',
		distritoe='" .$distritoe. "',
        anioeg='" .$anioeg. "', 
        semestreeg='" .$semestreeg. "',
        labura='" .$labura. "',
		resumene='" .$resumene. "',
        Sexo='" .$Sexo. "', 
        cves='" .$cves. "',
        condicionestu='" .$condicionestu. "',
		cargoestu='" .$cargoestu. "',
        nombreempresaestud='" .$nombreempresaestud. "', 
        tiempo='" .$tiempo. "',
		tipoempresaestud='" .$tipoempresaestud. "',
        remu='" .$remu. "', 
        porqueestud='" .$porqueestud. "',
		razon='" .$razon. "'
        WHERE numdoce='" .$numdoce. "'

    ");
    $result_update = mysqli_query($conne, $updatedato);
    } 
  }

 $i++;
}

?>

<a href="egresado.php">Atras</a>