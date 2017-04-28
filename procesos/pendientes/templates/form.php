<?php
date_default_timezone_set('America/Guayaquil');
include '../../conexion/conexion.php';

$clientes = $pdo->query("SELECT * FROM net_cliente");
$tecnicos = $pdo->query("SELECT * FROM net_usuario");
$servicios = $pdo->query("SELECT * FROM net_tipo");

$hoy = date("Y-m-d");
$fecha = date("d/m/Y");
?>
<style>
  input, select{
    color: black !important;
  }
</style>
<input type="hidden" value="<?= $fecha ?>" id="DateMin">
<div class="panel panel-primary" style="background: #eee !important;margin-top: 8em;">
  <div class="panel-heading"><?=$form?></div>
  <div class="panel-body">
    <input type="hidden" id="id">
    <div class="col-xs-12 bottom">
      <label for="servicio">Servicio</label>
      <select id="servicio" class="form-control" disabled>
        <option value="">Ingrese el servicio</option>
        <?php while($servicio = $servicios->fetch()){ ?>
        <option value="<?= $servicio['cod_tip'] ?>"><?= $servicio['nom_tip'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="co-xs-12 col-md-6 bottom">
      <label for="cliente">Cliente</label>    
      <select class="form-control" id="cliente" disabled>
        <option value="">Ingrese el cliente</option>
        <?php while($cliente = $clientes->fetch()){ ?>
        <option value="<?= $cliente['ced_cli'] ?>">
          <?= $cliente['nom_cli']." ".$cliente['ape_cli'] ?>
        </option>
        <?php } ?>
      </select>
    </div>
    <div class="co-xs-12 col-md-6 bottom">
      <label for="fecha-visita">Fecha de visita</label>                
      <input type="text" class="form-control fechaPicker" id="fecha-visita" 
        placeholder="Ingrese la fecha de visita">
    </div>
    <div class="col-xs-12 col-md-6 bottom">
      <label for="hora-visita" class="col-xs-12 col-md-3" style="padding: 0;">Hora de la vistia</label>
      <div class="col-xs-9" style="padding: 0;">
        <input type="time" class="form-control" id="hora-visita" placeholder="Ingrese la hora de visita">
      </div>
    </div>

    <div class="form-group">
      <div class="col-xs-12">
        <textarea class="form-control" rows="3" id="informe"></textarea>
        <span class="help-block">Ingrese un resumen de porque el pospuesta.</span>
      </div>
    </div>
    <div class="col-xs-12 center">
      <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
      <button class="btn btn-warning" id="cancelar">Cancelar</button>
    </div>
  </div>
</div>
