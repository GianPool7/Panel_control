<div class="modal" id="modalUpdateEvento"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar mi Eventox</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEventoUpdate" id="formEventoUpdate" action="UpdateEvento.php" class="form-horizontal" method="POST">
    <input type="hidden" class="form-control" name="idevento" id="idEvento">
    <div class="form-group">
      <label for="evento" class="col-sm-12 control-label">Nombre del Evento</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre del Evento" required/>
      </div>
    </div>

    <div class="form-group">
			<label for="evento" class="col-sm-12 control-label">Descripción del Evento</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="dese" id="evento" placeholder="Descripción del evento" required/>
			</div>
		</div>

    <div class="container">
      <div class="row">

        <div class="col">
          <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="fechainicio" id="fecha_inicio" placeholder="Fecha Inicio">
          </div>
        </div>

        <div class="col">
          <label for="fecha_fin" class="col-sm-12 control-label">Fecha Final</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="fechafin" id="fecha_fin" placeholder="Fecha Final">
          </div>
        </div>

        <div class="col">
          <label for="hora" class="col-sm-12 control-label">Hora</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="hora" id="hora" placeholder="10:30">
          </div>
        </div>

      </div>

      <br>


    </div>

    <br>

    <div class="col-md-12 activado">
 
      <input type="radio" name="color" id="orangeUpd" value="#FF5722" checked>
      <label for="orangeUpd" class="circu" style="background-color: #FF5722;"> </label>

      <input type="radio" name="color" id="amberUpd" value="#FFC107">  
      <label for="amberUpd" class="circu" style="background-color: #FFC107;"> </label>

      <input type="radio" name="color" id="limeUpd" value="#8BC34A">  
      <label for="limeUpd" class="circu" style="background-color: #8BC34A;"> </label>

      <input type="radio" name="color" id="tealUpd" value="#009688">  
      <label for="tealUpd" class="circu" style="background-color: #009688;"> </label>

      <input type="radio" name="color" id="blueUpd" value="#2196F3">  
      <label for="blueUpd" class="circu" style="background-color: #2196F3;"> </label>

      <input type="radio" name="color" id="indigoUpd" value="#9c27b0">  
      <label for="indigoUpd" class="circu" style="background-color: #9c27b0;"> </label>

    </div>

    
     <div class="modal-footer">
        <button type="submit" class="btn btn-success">Guardar Cambios de mi Evento</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
  </form>
      
    </div>
  </div>
</div>