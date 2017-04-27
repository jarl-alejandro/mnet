 <div class="panel panel-primary">
  <div class="panel-heading">Registar los parametros</div>
  <div class="panel-body">
    <div class="col-xs-12 bottom">
      <label for="iva">Ingresa el IVA</label>
      <input type="text" class="form-control" placeholder="Ingrese el IVA" onkeypress="numeros()"
        maxlength="4" id="iva">
    </div>
    <div class="col-xs-12 col-md-6 bottom">
      <label for="factura">Ingresa cada cuanto se genera las factura</label>    
      <input type="text" class="form-control" placeholder="Ingrese cada cuanto se genera la factura"
            onkeypress="numeros()" maxlength="4" id="factura">
    </div>
    <div class="col-xs-12 col-md-6 bottom">
      <label for="caduca">Ingrese cada cuanto se caduca</label>    
    
      <input type="text" class="form-control" placeholder="Ingrese cada cuanto se caduca" 
          onkeypress="numeros()" maxlength="4" id="caduca">
    </div>
    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <!--<button class="btn btn-danger" id="cancelar">Cancelar</button>-->
    </div>
  </div>
</div>
