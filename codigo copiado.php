/**Caso Contrario actualizo el o los Registros ya existentes*/
else{
    $updateData =  ("UPDATE estudiante SET 

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
		razon='" .$razon. "',

        WHERE numdoce='" .$numdoce. "'

    ");
    $result_update = mysqli_query($conne, $updateData);
    } 

    /***/

    
    $direccione                         = !empty($datos[10])  ? ($datos[10]) : '';
        $distritoe                          = !empty($datos[11])  ? ($datos[11]) : '';
        $anioeg                             = !empty($datos[12])  ? ($datos[12]) : '';
        $semestreeg                         = !empty($datos[13])  ? ($datos[13]) : '';
        $labura                             = !empty($datos[14])  ? ($datos[14]) : '';
        $resumene                           = !empty($datos[15])  ? ($datos[15]) : '';
        $Sexo                               = !empty($datos[16])  ? ($datos[16]) : '';
        $cves                               = !empty($datos[17])  ? ($datos[17]) : '';
        $condicionestu                      = !empty($datos[18])  ? ($datos[18]) : '';
        $cargoestu                          = !empty($datos[18])  ? ($datos[18]) : '';
        $nombreempresaestud                 = !empty($datos[19])  ? ($datos[19]) : '';
        $tiempo                             = !empty($datos[20])  ? ($datos[20]) : '';
        $tipoempresaestud                   = !empty($datos[21])  ? ($datos[21]) : '';
        $remu                               = !empty($datos[22])  ? ($datos[22]) : '';
        $porqueestud                        = !empty($datos[23])  ? ($datos[23]) : '';
        $razon                              = !empty($datos[24])  ? ($datos[24]) : '';
        

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