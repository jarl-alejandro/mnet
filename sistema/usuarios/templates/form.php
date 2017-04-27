 <div class="panel panel-primary">
  <div class="panel-heading">Registar nuevo <?=$form?></div>
  <div class="panel-body">
    <input type="hidden" id="id">
    <div class="col-xs-12 col-md-5 bottom">
      <label for="cedula">Ingrese numero de cedula</label>
      <input type="text" class="form-control" placeholder="Ingrese numero de cedula"
          maxlength="13" id="cedula" onkeypress="numeros()">
    </div>
    <div class="col-xs-12 col-md-6 bottom">
      <label for="nombre">Ingrese numero de cedula</label>    
      <input type="text" class="form-control" placeholder="Ingrese el nombre del usuario" 
          maxlength="100" id="nombre" onkeypress="textos()">
    </div>
    <div class="col-xs-12 col-md-5 bottom">
      <label for="apellido">Ingrese el apellido del usuario</label>    
      <input type="text" class="form-control" placeholder="Ingrese el apellido del usuario"
          maxlength="100" id="apellido" onkeypress="textos()">
    </div>
    <div class="col-xs-12 col-md-6 bottom">
     <label for="email">Ingrese el e-mail del usuario</label>
      <input type="text" class="form-control" placeholder="Ingrese el e-mail del usuario" 
          maxlength="140" id="email">
    </div>
    <div class="col-xs-12 col-md-5 bottom">
     <label for="telefono">Ingrese el numero de telefono del usuario</label>
      <input type="text" class="form-control" placeholder="Ingrese numero de telefono"
          maxlength="10" id="telefono" onkeypress="numeros()">
    </div>
    <div class="col-xs-12 col-md-6 bottom">
     <label for="celular">Ingrese el numero celular del usuario</label>
      <input type="text" class="form-control" placeholder="Ingrese numero celular"
          maxlength="10" id="celular" onkeypress="numeros()">
    </div>
    <div class="col-xs-12 col-md-5 bottom">
     <label for="direccion">Ingrese el direccion del usuario</label>
      <input type="text" class="form-control" placeholder="Ingrese la direccion" 
          maxlength="100" id="direccion" onkeypress="textos()">
    </div>
    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <button class="btn btn-danger" id="cancelar">Cancelar</button>
    </div>
  </div>
</div>
