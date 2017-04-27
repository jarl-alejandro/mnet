<?php
require "../../conexion/conexion.php";
$tecnicos = $pdo->query("SELECT * FROM net_usuario");
?>
<div class="panel panel-primary panel-capsula col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-4">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Listado de empleados</h3>
  </div>
  <div class="panel-body">
    <table class="col-xs-12 table-striped table-hover table-advance ">
      <tbody>
      <?php
        if($tecnicos->rowCount() == 0){
          echo "<tr><td colspan='2' class='text-center'>No hay empleados</td></tr>";
        }
        foreach ($tecnicos as $row):
      ?>
      <tr>
        <td class="text-center capsulaPanel">
          <label class="checkbox" for="<?=$row["ced_usu"];?>_capsu" style="cursor:pointer">
            <input type="checkbox" data-toggle="checkbox" class="capsulaList" 
              id="<?=$row["ced_usu"];?>_capsu" data-id="<?=$row["ced_usu"];?>" 
              data-name="<?= $row['nom_usu']." ".$row['ape_usu'] ?>">
            <?= $row['nom_usu']." ".$row['ape_usu'] ?>
          </label>
        </td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="panel-footer center">
    <button class="btn btn-embossed btn-danger" id="closeCapsula" style="margin-right:1em;">Cerrar</button>
    <button class="btn btn-embossed btn-primary" id="aceptCapsula">Aceptar</button>
  </div>
</div>