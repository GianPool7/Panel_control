<?php

    header('Content-type: text/html; charset=utf-8');
        
    include('includes/header.php');
    require ('conexion.php');

    if ($conne->set_charset('utf8') === false) {
    die('Error: ' .  $conne->error);
    }

?>

  <div class="content-body">
    <div class="container-fluid">

      <link rel="stylesheet" href="css/cuestionario.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/fondocuestionario.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
      </div>

      <div class="container text-center">
          <div class="row align-items-start">
            <div class="col">
              
              <form class="row g-3 p-5" action="resgitrar.php" method="post">
                  
                  <label for="inputState" class="form-label">Condición</label>

                  <div class="col-md-6">
                    <input class="form-check-input border-primary" type="radio" id="estu" onclick="estudiante();" value="Estudiante" name="tipoe">
                    <label class="form-check-label" for="estu">
                      Estudiante
                    </label>
                  </div>

                  <div class="col-md-6">
                    <input class="form-check-input border-primary" type="radio" id="egre" onclick="noes();" value="Egresado" name="tipoe">
                    <label class="form-check-label" for="egre">
                      Egresado
                    </label>
                  </div>

                  <div class="col-md-6">
                    <input class="form-check-input border-primary" type="radio" id="egres" onclick="noes();" value="Titulado" name="tipoe">
                    <label class="form-check-label" for="egres">
                      Titulado
                    </label>
                  </div>

                  <div class="col-md-6">
                    <input class="form-check-input border-primary" type="radio" id="egresa" onclick="noes();" value="Bachiller" name="tipoe">
                    <label class="form-check-label" for="egresa">
                      Bachiller
                    </label>
                  </div>
                  
                  <div class="col-md-12">
                    <input class="form-check-input border-primary" type="radio" id="egresad" onclick="noes();" value="Bachiller Y Titulado" name="tipoe">
                    <label class="form-check-label" for="egresad">
                      Bachiller Y Titulado
                    </label>
                  </div>
  
                  
                  <div class="col-12 p-4">
                    <button type="button" class="btn btn-primary" id="btnsgt" onclick="mostrarestudiante();">siguiente</button>
                  </div>

                  <div id="mostrarestudiante">

                    <div class="row p-4">

                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nombres</label>
                        <input type="text" name="nombrese" class="form-control border-primary" id="inputEmail4" placeholder="Ingrese Nombre ..." required>
                      </div>

                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Apellidos</label>
                        <input type="text" name="apellidose" class="form-control border-primary" id="inputPassword4" placeholder="Ingrese Apellido ..." required>
                      </div>

                    </div>
                    
                      <div class="row p-4">

                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">DNI</label>
                            <input type="text" name="numdoce" class="form-control border-primary" id="inputEmail4" placeholder="Nº documento" required>
                          </div>
                          
                      
                            <input type="hidden" name="passestu" class="form-control border-primary" id="inputEmail4" placeholder="">

      
                        <div class="form-group col-md-6">
                            <label for="inputState" class="form-label">Programa</label>
                            <select id="inputState" class="form-control border-primary" name="carrerae" required>
                              <option value="">Escoja la carrera</option>
                              <option value="ADMINISTRACION DE EMPRESAS">Administración de Empresas</option>
                              <option value="CONTABILIDAD">Contabilidad</option>
                              <option value="DESARROLLO DE SISTEMAS">Desarrollo de Sistemas de Informacion</option>
                              <option value="OTROS">Otros</option>
                            </select>
                        </div>

                      </div>
                    




                    <div class="col-12" id="ciclo">
                        
                      <label for="inputState" class="form-label">Ciclo</label>
                        <select id="inputState" class="form-select border-primary" name="cicloe">
                          <option value="">Escoja el ciclo</option>
                          <option value="I">I</option>
                          <option value="II">II</option>
                          <option value="III">III</option>
                          <option value="IV">IV</option>
                          <option value="V">V</option>
                          <option value="VI">VI</option>
                        </select>
                        
                    </div>
                    
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Correo electrónico</label>
                      <input type="email" name="emaile" class="form-control border-primary" id="inputAddress2" placeholder="Ingrese Correo ..." required>
                    </div>
                    <div class="row p-4">
                      <div class="col-md-4">
                        <label for="inputCity" class="form-label">Teléfono</label>
                        <input type="text" name="telfe" class="form-control border-primary" id="inputCity" placeholder="Ingrese Numero ..." required>
                      </div>
                      
                      <div class="col-md-4">
                        <label for="inputCity" class="form-label">Dirección</label>
                        <input type="text" name="direccione" class="form-control border-primary" id="inputCity" placeholder="Ingrese Direccion ...r" required>
                      </div>
                      
                      <div class="col-md-4">
                          <label for="inputCity" class="form-label">Distrito</label>
                          <input type="text" name="distritoe" class="form-control border-primary" id="inputCity" placeholder="Ingrese Distrito ..." required>
                      </div>
                    </div>

                    <div class="row p-4" id="egresado">

                      <div class="col-md-6">
                        <label for="inputCity" class="form-label">Año</label>
                        <input type="text" name="anioeg" class="form-control border-primary" id="inputCity" placeholder="Ingrese año de egreso ...">
                      </div>

                      <div class="col-md-6">
                        <label for="inputState" class="form-label">Semestre</label>
                        <select id="inputState" class="form-select border-primary" name="semestreeg">
                          <option Value="I">I</option>
                          <option Value="II">II</option>
                        </select>
                      </div>

                    </div>



                    <div class="row p-4">

                        <h3>Estado Laboral</h3>

                        <div class="col-md-6">
                            <input class="form-check-input border-primary" type="radio" id="gridChecksi" onclick="mostrarsi();" value="Si" name="labura" >
                            <label class="form-check-label" for="gridChecksi">
                              Si
                            </label>
                        </div>
        
                        <div class="col-md-6">
                            <input class="form-check-input border-primary" type="radio" id="gridCheckno" onclick="mostrarno();" value="No" name="labura" >
                            <label class="form-check-label" for="gridCheckno">
                              No
                            </label>
                        </div>

                    </div>


                    <div class="col-12 p-4">
                        <button type="button" class="btn btn-primary" id="btnsgtsino" onclick="verificar();">siguiente</button>
                      </div>

                    <div class="row" id="respuestasi">


                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Condición laboral</label>
                            <select id="inputState" class="form-select border-primary" name="condicionestu">
                              <option value="">Condicion Laboral</option>
                              <option value="Formal">Formal</option>
                              <option value="Informal">Informal</option>
                            </select>
                        </div>
        
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Cargo o Puesto</label>
                            <input type="text" name="cargoestu" class="form-control border-primary" id="inputCity" placeholder="Ingrese su cargo ...">
                        </div>
        
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Nombre de la Empresa</label>
                            <input type="text" name="nombreempresaestud" class="form-control border-primary" id="inputCity" placeholder="Ingrese empresa ...">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Tiempo</label>
                            <input type="text" name="tiempo" class="form-control border-primary" id="inputCity" placeholder="Ingrese el tiempo ...">
                        </div>
        
                        <div class="col-md-6">
                            <label for="inputState" class="form-label ">Tipo Empresa</label>
                            <select id="inputState" class="form-select border-primary" name="tipoempresaestud">
                              <option value="">Tipo Empresa</option>
                              <option value="Privada">Privada</option>
                              <option value="Publica">Pública</option>
                              <option value="Propia">Propia</option>
                            </select>
                        </div>
                        
                          <div class="col-md-6">
                            <label for="inputState" class="form-label">Remuneración</label>
                            <select id="inputState" class="form-select border-primary" name="remu">
                              <option value="">Remuneracion</option>
                              <option value="S/1025 - S/1500">S/1025 - S/1500</option>
                              <option value="S/1501 - S/2500">S/1501 - S/2500 </option>
                              <option value="S/2500 a mas">S/2500 a màs</option>
                            </select>
                        </div>


                    </div>

                    <div class="row" id="respuestano">


                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Motivo</label>
                            <select id="inputState" class="form-select border-primary" name="porqueestud">
                              <option value="">Escoja Motivo</option>
                              <option value="Se dedica a estudiar">Se dedica a estudiar</option>
                              <option value="No encuentro trabajo">No encuentro trabajo</option>
                              <option value="Problemas familiares">Problemas familiares</option>
                              <option value="Falta de experiencia">Falta de experiencia</option>
                              <option value="Otro">Otro</option>
                            </select>
                        </div>
        
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Justificar</label>
                            <input type="text" name="razon" class="form-control border-primary" id="inputAddress" placeholder="...">
                        </div>

                    </div>


                  </div>




                  <div class="col-12 p-4">
                    <button type="submit" class="btn btn-primary" id="guardar" name="registrarestud">Registrarse</button>
                  </div>

              </form>

            </div>
          </div>
      </div>

    </div>
  </div>

<?php

include('includes/footer.php');


?>

