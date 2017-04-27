<?php
session_start();
include "../conexion/conexion.php";
$id = $_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"];

$query = $pdo->query("SELECT * FROM vista_ped_cliente WHERE ced_cli='$id'");
$index = 0;
?>
<div class="row">
  <div class="col-xs-12">
    <!-- Advanced Tables -->
    <div class="panel panel-primary">
      <div class="panel-heading">Listado</div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th width="10%">#</th>
                <th width="70%">PEDIDOS</th>
                <th width="20%">ACCIONES</th>
              </tr>
            </thead>
            <tbody>
            <?php
            if($query->rowCount() == 0){
              echo "<tr><td colspan='3'>No hay pedidos</td></tr>";
            }
            else{
              while($row = $query->fetch()){
                $index++;
            ?>
          <tr class="">
            <td><?= $index ?></td>
            <td><?= $row["cliente"]." - ".$row["nom_tip"] ?></td>
            <td class="space-around">
              
              <?php if($row["esta_ped"] == 0) { ?>
               Espere a que se le asigne un tecnico
              <?php } else if($row["esta_ped"] == 1) { ?>
                <button class="btn btn-primary editar" data-id="<?=$row["cod_ped"]?>">
                  <i class="fa fa-pencil"></i>
                </button>
              <?php } else if($row["esta_ped"] == 2) { ?>
                <button class="btn btn-success ripple-effect btn-raised confirmar__pedido" data-id="<?=$row["cod_ped"]?>">
                  <i class="fa fa-check"></i>
                </button>
                <?php } else if($row["esta_ped"] == 3) { ?>
                  Espere que el administrador le asigne un trabajador
                <?php }  ?>
            </td>
          </tr>
            <?php }
            }?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
    <!--End Advanced Tables -->
  </div>
</div>

<script src="assets/scripts/sweetalert2.min.js"></script>
<script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="assets/scripts/app_pedidos.js"></script>
<script>
  $(document).ready(function () {
    $('#dataTables-example').dataTable();
  });
</script>
