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


          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/banner_2.png" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>

        <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                
                <form class="row g-3 p-5" action="" method="">
                    
                    <div class="col-md-12">
                      <label for="inputState" class="form-label font-weight-bold text-dark">SITUACIÓN ACADÉMICA</label>
                    </div>

                    <!-----
                    <div class="col-md-6">
                      <input class="form-check-input border-primary" type="radio" id="estu" onclick="estudiante();" value="Estudiante" name="tipoe">
                      <label class="form-check-label" for="estu">
                        Estudiante
                      </label>
                    </div>
                    --->


                    <div class="col-md-6" >
                      <input type="border-primary" id="egre" onclick="noes();" value="Egresado" name="tipoe">
                        <label class="form-check-label font-weight-bold text-dark" for="egre">
                          Egresado
                        </label>
                    </div>

                    <div class="col-md-6" >
                      <input class="form-check-input border-primary" type="radio" id="egres" onclick="noes();" value="Titulado" name="tipoe">
                      <label class="form-check-label font-weight-bold text-dark" for="egres">
                        Titulado
                      </label>
                    </div>

                    <div class="col-md-6" >
                      <input class="form-check-input border-primary" type="radio" id="egresa" onclick="noes();" value="Bachiller" name="tipoe">
                      <label class="form-check-label font-weight-bold text-dark" for="egresa">
                        Bachiller
                      </label>
                    </div>
                    
                    <div class="col-md-6" >
                      <input class="form-check-input border-primary" type="radio" id="egresad" onclick="noes();" value="Bachiller Y Titulado" name="tipoe">
                      <label class="form-check-label font-weight-bold text-dark" for="egresad">
                        Bachiller Y Titulado
                      </label>
                    </div>
    
                    
                    <div class="col-12 p-4">
                      <button type="button" class="btn btn-primary" id="btnsgt" onclick="mostrarestudiante();">siguiente</button>
                    </div>

                    <div id="mostrarestudiante" class="col-md-12">

                      <div class="row p-6">

                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label font-weight-bold text-dark">Nombres</label>
                          <input type="text" name="nombrese" class="form-control border-primary" id="inputEmail4" placeholder="Ingrese Nombre ..." required>
                        </div>

                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label font-weight-bold text-dark">Apellidos</label>
                          <input type="text" name="apellidose" class="form-control border-primary" id="inputPassword4" placeholder="Ingrese Apellido ..." required>
                        </div>

                      </div>

                        <br>
                      
                      <div class="row p-6">

                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label font-weight-bold text-dark">DNI</label>
                              <input type="text" name="numdoce" class="form-control border-primary" id="inputEmail4" placeholder="Nº documento" required>
                            </div>
                            
                        
                            <input type="hidden" name="passestu" class="form-control border-primary" id="inputEmail4" placeholder="">

        
                            <div class="form-group col-md-6">
                                <label for="inputState" class="form-label font-weight-bold text-dark">Programa</label>
                                <select id="inputState" class="form-control border-primary" name="carrerae" required>
                                  <option value="">Escoja la carrera</option>
                                  <option value="ADMINISTRACION DE EMPRESAS">Administración de Empresas</option>
                                  <option value="CONTABILIDAD">Contabilidad</option>
                                  <option value="DESARROLLO DE SISTEMAS">Desarrollo de Sistemas de Informacion</option>
                                  <option value="OTROS">Otros</option>
                                </select>
                            </div>

                      </div>
                      
                        <br>

                      <div class="col-14">
                        <label for="inputAddress2" class="form-label font-weight-bold text-dark">Correo electrónico</label>
                        <input type="email" name="emaile" class="form-control border-primary" id="inputAddress2" placeholder="Ingrese Correo ..." required>
                      </div>

                      <br>

                      <div class="row p-6">
                        <div class="col-md-4">
                          <label for="inputCity" class="form-label font-weight-bold text-dark">Teléfono</label>
                          <input type="text" name="telfe" class="form-control border-primary" id="inputCity" placeholder="Ingrese Numero ..." required>
                        </div>
                        
                        <div class="col-md-4">
                          <label for="inputCity" class="form-label font-weight-bold text-dark">Dirección</label>
                          <input type="text" name="direccione" class="form-control border-primary" id="inputCity" placeholder="Ingrese Direccion ...r" required>
                        </div>
                        
                        <div class="col-md-4">
                            <label for="inputCity" class="form-label font-weight-bold text-dark">Distrito</label>
                            <input type="text" name="distritoe" class="form-control border-primary" id="inputCity" placeholder="Ingrese Distrito ..." required>
                        </div>
                      </div>

                      <br>

                      <div class="row p-6" id="egresado">

                        <div class="col-md-6">
                          <label for="inputCity" class="form-label  font-weight-bold text-dark">Año</label>
                          <input type="text" name="anioeg" class="form-control border-primary" id="inputCity" placeholder="Ingrese año de egreso ...">
                        </div>

                        <div class="col-md-6">
                          <label for="inputState" class="form-label font-weight-bold text-dark">Semestre</label>
                          <select id="inputState" class="form-control border-primary" name="semestreeg">
                            <option Value="I">I</option>
                            <option Value="II">II</option>
                          </select>
                        </div>

                      </div>

                      <br>

                      <div class="row">

                          <div class="col-md-12">
                            <label for="inputState" class="form-label font-weight-bold text-dark"><h1>Estado Laboral</h1></label>
                          </div>

                          

                          <div class="container">

                            <div class="row">

                              <div class="col-md-6" >
                                  <input class="form-check-input border-primary" type="radio" id="gridChecksi" onclick="mostrarsi();" value="Si" name="labura" >
                                  <label class="form-check-label font-weight-bold text-dark" for="gridChecksi">
                                    Si
                                  </label>
                              </div>
              
                              <div class="col-md-6" >
                                  <input class="form-check-input border-primary" type="radio" id="gridCheckno" onclick="mostrarno();" value="No" name="labura" >
                                  <label class="form-check-label font-weight-bold text-dark" for="gridCheckno">
                                    No
                                  </label>
                              </div>

                            </div>

                          </div>

                      </div>


                      <div class="col-12 p-4">
                          <button type="button" class="btn btn-primary" id="btnsgtsino" onclick="verificar();">siguiente</button>
                      </div>
                      
                        <br>

                      <div class="row" id="respuestasi">

                          <div class="container">

                            <div class="row">

                              <div class="col-md-6">
                                  <label for="inputState" class="form-label font-weight-bold text-dark">Situación laboral</label>
                                  <select id="inputState" class="form-control border-primary" name="condicionestu">
                                    <option value="">Situación Laboral</option>
                                    <option value="Dependiente">Dependiente</option>
                                    <option value="Independiente">Independiente</option>
                                  </select>
                              </div>

                              <div class="col-md-6">
                                  <label for="inputCity" class="form-label font-weight-bold text-dark">Cargo o Puesto</label>
                                  <input type="text" name="cargoestu" class="form-control border-primary" id="inputCity" placeholder="Ingrese su cargo ...">
                              </div>
                            
                            </div>

                          </div>
                          
                          <br>

                          <div class="container">

                            <div class="row">


                              <div class="col-md-6">
                                  <label for="inputCity" class="form-label font-weight-bold text-dark">Nombre de la Empresa</label>
                                  <input type="text" name="nombreempresaestud" class="form-control border-primary" id="inputCity" placeholder="Ingrese empresa ...">
                              </div>
                              
                              <div class="col-md-6">
                                  <label for="inputCity" class="form-label font-weight-bold text-dark">Tiempo</label>
                                  <input type="text" name="tiempo" class="form-control border-primary" id="inputCity" placeholder="Ingrese el tiempo ...">
                              </div>

                            </div>

                          </div>

                          <br>

                          <div class="container">

                            <div class="row">


                              <div class="col-md-6">
                                  <label for="inputState" class="form-label  font-weight-bold text-dark">Tipo Empresa</label>
                                  <select id="inputState" class="form-control border-primary" name="tipoempresaestud">
                                    <option value="">Tipo Empresa</option>
                                    <option value="Privada">Privada</option>
                                    <option value="Publica">Pública</option>
                                    <option value="Propia">Propia</option>
                                  </select>
                              </div>
                              
                              <div class="col-md-6">
                                <label for="inputState" class="form-label font-weight-bold text-dark">Remuneración</label>
                                <select id="inputState" class="form-control border-primary" name="remu">
                                  <option value="">Remuneración</option>
                                  <option value="S/1025 - S/1500">S/1025 - S/1500</option>
                                  <option value="S/1501 - S/2500">S/1501 - S/2500 </option>
                                  <option value="S/2500 a mas">S/2500 a màs</option>
                                </select>
                              </div>
                              
                            </div>

                          </div>  


                      </div>

                      <br>

                      <div class="row" id="respuestano">


                          <div class="col-md-6">
                              <label for="inputState" class="form-label font-weight-bold text-dark">Motivo</label>
                              <select id="inputState" class="form-control border-primary" name="porqueestud">
                                <option value="">Escoja Motivo</option>
                                <option value="Se dedica a estudiar">Se dedica a estudiar</option>
                                <option value="No encuentro trabajo">No encuentro trabajo</option>
                                <option value="Problemas familiares">Problemas familiares</option>
                                <option value="Falta de experiencia">Falta de experiencia</option>
                                <option value="Otro">Otro</option>
                              </select>
                          </div>
          
                          <div class="col-md-6">
                              <label for="inputAddress" class="form-label font-weight-bold text-dark">Justificar</label>
                              <input type="text" name="razon" class="form-control border-primary" id="inputAddress" placeholder="...">
                          </div>

                      </div>


                    </div>



                    <div class="col-12 p-4">
                      <button type="submit" class="btn btn-primary" id="guardar" name="">Registrarse</button>
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

