<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar Nuevo Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEvento" id="formEvento" action="nuevoEvento.php" class="form-horizontal" method="POST">

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

  <div class="col-md-12" id="grupoRadio">
  
  <input type="radio" name="color" id="orange" value="#FF5722" checked>
  <label for="orange" class="circu" style="background-color: #FF5722;"> </label>

  <input type="radio" name="color" id="amber" value="#FFC107">  
  <label for="amber" class="circu" style="background-color: #FFC107;"> </label>

  <input type="radio" name="color" id="lime" value="#8BC34A">  
  <label for="lime" class="circu" style="background-color: #8BC34A;"> </label>

  <input type="radio" name="color" id="teal" value="#009688">  
  <label for="teal" class="circu" style="background-color: #009688;"> </label>

  <input type="radio" name="color" id="blue" value="#2196F3">  
  <label for="blue" class="circu" style="background-color: #2196F3;"> </label>

  <input type="radio" name="color" id="indigo" value="#9c27b0">  
  <label for="indigo" class="circu" style="background-color: #9c27b0;"> </label>

</div>
		
	   <div class="modal-footer">
      	<button type="submit" class="btn btn-success">Guardar Evento</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
    	</div>
	</form>
      
    </div>
  </div>
</div>