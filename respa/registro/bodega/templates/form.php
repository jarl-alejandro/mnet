<?php
include '../../conexion/conexion.php';
$categorias = $pdo->query("SELECT * FROM net_categoria");

?>
 <div class="panel panel-primary">
  <div class="panel-heading">Registar nuevo <?=$form?></div>
  <div class="panel-body">
    <input type="hidden" id="id">
    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese nueva bodega"
          maxlength="140" id="nombre">
    </div>
    <div class="col-xs-6 bottom">
      <input type="text" class="form-control" placeholder="Ingrese el costo" 
          maxlength="5" id="costo" onkeypress="decimal()">
    </div>

    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese la cantidad"
          maxlength="4" id="cantidad" onkeypress="numeros()">
    </div>
    <div class="col-xs-6 bottom">
      <input type="text" class="form-control" placeholder="Ingrese la cantidad maxima" 
          maxlength="4" id="cant-max" onkeypress="numeros()">
    </div>
    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese la catidad minima" 
          maxlength="4" id="cant-min" onkeypress="numeros()">
    </div>
     <div class="col-xs-6 bottom">
      <select class="form-control" id="categoria">
        <option value="">Selecione la categoria</option>
        <?php while ($categoria = $categorias->fetch()){ ?>
        <option value="<?= $categoria['cod_cate'] ?>"><?= $categoria['nom_cate'] ?></option>
        <?php } ?>
      </select>
    </div>
   
    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese precio de venta 1" 
          maxlength="5" id="precio-venta-1" onkeypress="decimal()">
    </div>
    <div class="col-xs-6 bottom">
      <input type="text" class="form-control" placeholder="Ingrese el precio de venta 2" 
          maxlength="5" id="precio-venta-2" onkeypress="decimal()">
    </div>

    <div class="col-xs-5 bottom">
      <input type="text" class="form-control" placeholder="Ingrese precio de venta 3" 
          maxlength="5" id="precio-venta-3" onkeypress="decimal()">
    </div>
   
    <div class="col-xs-6 bottom">
      <input type="file" id="imagen" accept="image/png" style="display:none">
      <label for="imagen" class="btn btn-embossed btn-primary">Subir imagen</label>
      <input type="hidden" id="imagen_name">
    </div>

    <div class="col-xs-5 col-xs-offset-4 bottom">
      <img src="" class="imagen__visualizador" style="height:6em;width:9em !important;"/>
    </div>
    

    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <button class="btn btn-danger" id="cancelar">Cancelar</button>
    </div>
  </div>
</div>
