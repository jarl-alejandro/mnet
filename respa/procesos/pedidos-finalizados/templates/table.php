<?php session_start();
include "../../../conexion/conexion.php";
$id = $_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"];
$query = $pdo->query("SELECT * FROM vista_pedidos WHERE esta_ped=3");
 // AND esta_ped=1
$index = 0;
?>
<div class="row">
  <div class="col-lg-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
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
                  <button class="btn btn-primary editar" data-id="<?=$row["cod_ped"]?>">
                    <i class="fa fa-pencil"></i>
                  </button>
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


<script src="../../assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="js/detalle.js"></script>
<script src="js/app.js"></script>
<script>
  $(document).ready(function () {
    $('#dataTables-example').dataTable();
  });
</script>
