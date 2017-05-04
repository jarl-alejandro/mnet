<?php 
include '../../conexion/conexion.php';
$clientes = $pdo->query("SELECT * FROM net_cliente");
$planes = $pdo->query("SELECT * FROM net_plan");
?>
<div class="panel panel-primary">
  <div class="panel-heading">Registar nuevo <?=$form?></div>
  <div class="panel-body">
    <input type="hidden" id="id">
    <div class="col-xs-12 col-md-5 bottom">
      <label for="nombre">Clientes</label>
      <select id="nombre" class="form-control">
        <option value="">Selecione el cliente</option>
        <?php while ($row = $clientes->fetch()) { ?>
        <option value="<?= $row['ced_cli'] ?>"><?= $row['nom_cli'] ?></option>
        <?php } ?>
      </select>
    </div>
    <label for="detalle">Plan de Intener</label>    
    <div class="col-xs-12 col-md-6 bottom">
      <select id="detalle" class="form-control">
        <option value="">Selecione el plan de internet</option>
        <?php while ($row = $planes->fetch()) { ?>
        <option value="<?= $row['cod_pla'] ?>"><?= $row['nom_pla'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <button class="btn btn-danger" id="cancelar">Cancelar</button>
    </div>
  </div>
</div>
