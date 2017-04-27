 <div class="panel panel-primary">
  <div class="panel-heading">Registar nuevo <?=$form?></div>
  <div class="panel-body">
    <input type="hidden" id="id">
    <div class="col-xs-12 col-md-5 bottom">
      <label for="nombre">Ingrese nuevo <?= $form ?></label>
      <input type="text" class="form-control" placeholder="Ingrese nuevo <?= $form ?>"
          maxlength="140" id="nombre">
    </div>
    <label for="detalle">Ingrese el detalle</label>    
    <div class="col-xs-12 col-md-6 bottom">
      <input type="text" class="form-control" placeholder="Ingrese el detalle" 
          maxlength="140" id="detalle">
    </div>
    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <button class="btn btn-danger" id="cancelar">Cancelar</button>
    </div>
  </div>
</div>
