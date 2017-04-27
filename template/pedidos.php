<?php 
  // $id = $_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"];
?>

<section class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 mis-pedidos">
  <button class="btn btn-circle ripple-effect btn-raised btn-info" class="show-new-ped">
    <i class="fa fa-pencil" aria-hidden="true"></i>
  </button>
  <div id="table-misPedidos"></div>
  <article id="form-container">
    <?php include "template/form.php" ?>
  </article>
  <div style="display:flex;justify-content:center col-xs-12">
    <button class="btn ripple-effect btn-raised btn-danger col-xs-5 col-xs-offset-3" id="cerrar-ped">Cerrar</button>
  </div>
</section>
