<?php
require "../../conexion/conexion.php";
$bodegas = $pdo->query("SELECT * FROM vista_bodega WHERE nom_cate='Herramientas'");
?>
<div class="panel panel-primary panel-herramienta col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-4">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Listado de herramientas</h3>
  </div>
  <div class="panel-body">
    <table class="col-xs-12 table-striped table-hover table-advance ">
      <tbody>
      <?php
        if($bodegas->rowCount() == 0){
          echo "<tr><td colspan='2' class='text-center'>No hay herramientas</td></tr>";
        }
        foreach ($bodegas as $row):
      ?>
      <tr>
        <td class="text-center capsulaPanel">
          <label class="checkbox" for="<?=$row["cod_bode"];?>_herram" style="cursor:pointer">
            <input type="checkbox" data-toggle="checkbox" class="HerramientaList" id="<?=$row["cod_bode"];?>_herram"
              data-id="<?=$row["cod_bode"];?>" data-name="<?=$row["nom_bode"];?>">
            <?= $row["nom_bode"] ?>
          </label>
        </td>
      </tr>
      <?php endforeach; ?>      
      </tbody>
    </table>
  </div>
  <div class="panel-footer center">
    <button class="btn btn-embossed btn-danger" id="closeHerramienta" style="margin-right:1em;">Cerrar</button>
    <button class="btn btn-embossed btn-primary" id="aceptHerramienta">Aceptar</button>
  </div>
</div>