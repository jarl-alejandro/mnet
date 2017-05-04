<?php 
  $title = "Cambiar contraseña";
  $form = "Cambiar contraseña";
  include "../../head.php";
?>
<body>
  <main id="wrapper">
    <?php include "../../menu.php"; ?>
    <?php include "../../toolbar.php"; ?>
    <section id="page-wrapper">
      <article class="row">
        <div class="col-xs-12">
          <h1 class="page-header"><?=$title?></h1>
        </div>
        <article class="col-xs-12 col-md-7 col-md-offset-2 bottom" 
          style="background: #eee;box-shadow: 0px 1px 1.5px rgba(0,0,0,0.5);">
          <div>
           <label for="detalle" class="text-center" style="font-weight: bold;text-transform: ∪">Ingrese tu nueva contraseña</label>
            <input type="password" class="form-control" placeholder="Ingrese tu contraseña" 
                maxlength="140" id="password">
          </div>
          <div class="col-xs-12 center" style="padding: 1em 0">
            <button class="btn btn-primary" style="margin-right:1em;" id="guardar">Guardar</button>
          </div>
        </article>
      </article>
    </section>
  </main>

  <?php include "../../scripts.php"; ?>
  <script src="js/index.js"></script> 
</body>
</html>