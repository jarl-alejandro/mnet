 <div class="panel panel-primary">
  <div class="panel-heading">Registar nuevo <?=$form?></div>
  <div class="panel-body">
    <input type="hidden" id="id">
    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese nueva <?=$form?>"
          maxlength="140" id="nombre">
    </div>
    <div class="col-xs-6 bottom">
      <input type="text" class="form-control" placeholder="Ingrese cada detalle" 
          maxlength="140" id="detalle">
    </div>
    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <button class="btn btn-danger" id="cancelar">Cancelar</button>
    </div>
  </div>
</div>
