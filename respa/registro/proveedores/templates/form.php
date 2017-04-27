 <div class="panel panel-primary">
  <div class="panel-heading">Registar nuevo <?=$form?></div>
  <div class="panel-body">
    <input type="hidden" id="id">
    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese nombre del proveedor"
          maxlength="13" id="nombre" onkeypress="textos()">
    </div>
    <div class="col-xs-6 bottom">
      <input type="text" class="form-control" placeholder="Ingrese el nombre del contacto" 
          maxlength="100" id="nombre-contacto" onkeypress="textos()">
    </div>
    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese el e-mail del proveddor"
          maxlength="100" id="email">
    </div>
    <div class="col-xs-6 bottom">
      <input type="text" class="form-control" placeholder="Ingrese el e-mail del contacto" 
          maxlength="140" id="email-contacto">
    </div>
    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese numero de telefono del proveedor"
          maxlength="10" id="telefono" onkeypress="numeros()">
    </div>
    <div class="col-xs-6 bottom">
      <input type="text" class="form-control" placeholder="Ingrese numero de telefono del contacto"
          maxlength="10" id="telefono-contacto" onkeypress="numeros()">
    </div>
    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese numero celular del proveedor"
          maxlength="10" id="celular" onkeypress="numeros()">
    </div>
    <div class="col-xs-6 bottom">
      <input type="text" class="form-control" placeholder="Ingrese numero celular del contacto"
          maxlength="10" id="celular-contacto" onkeypress="numeros()">
    </div>
    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese la direccion del proveedor" 
          maxlength="100" id="direccion" onkeypress="textos()">
    </div>
    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <button class="btn btn-danger" id="cancelar">Cancelar</button>
    </div>
  </div>
</div>
