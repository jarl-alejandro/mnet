<?php
include '../../conexion/conexion.php';
$servicios = $pdo->query("SELECT * FROM net_tipo");
$categorias = $pdo->query("SELECT * FROM net_categoria");
?>

<div class="panel panel-primary">
  <div class="panel-heading">Registar nuevo <?=$form?></div>
  <div class="panel-body">
    <input type="hidden" id="id">
    <div class="col-xs-5 bottom">
      <select class="form-control" id="nombre">
        <option value="">Ingrese el servicio</option>
        <?php while ($servicio = $servicios->fetch()){?>
        <option value="<?= $servicio["cod_tip"] ?>"><?= $servicio["nom_tip"] ?></option>  
        <?php } ?>
      </select>
    </div>
    <div class="col-xs-6 bottom">
      <select class="form-control" id="categoria">
          <option value="">Ingrese la categoria</option>
          <?php while ($categoria = $categorias->fetch()){?>
          <option value="<?= $categoria["cod_cate"] ?>"><?= $categoria["nom_cate"] ?></option>  
          <?php } ?>
      </select>

    </div>
    <div class="col-xs-6">
      <button class="btn btn-outline btn-warning col-xs-offset-10 bottom" id="show-capsula">Materiales</button>
      <div class="table-responsive col-xs-12">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th width="20%">Codigo</th>
              <th width="70%">Materiales</th>
              <th width="10%">Acciones</th>
            </tr>
          </thead>
          <tbody id="capsula-detail">
            <tr>
              <td colspan="3" class="text-center">Ingrese Materiales</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-xs-6">
      <button class="btn btn-outline btn-warning col-xs-offset-9 bottom" id="show-herramienta">Herramientas</button>
      <div class="table-responsive col-xs-12">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th width="20%">Codigo</th>
              <th width="70%">Herramientas</th>
              <th width="10%">Acciones</th>
            </tr>
          </thead>
          <tbody id="herramientas-detail">
            <tr>
              <td colspan="3" class="text-center">Ingrese herramienta</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <button class="btn btn-danger" id="cancelar">Cancelar</button>
    </div>
  </div>
</div>
