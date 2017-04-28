<?php 
  $title = "Mis tareas";
  $form = "mis tareas";
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
        <div class="col-xs-offset-11" style="margin-bottom:1em;">
          <!-- <button class="btn btn-outline btn-primary" id="show-form">
            <i class="fa fa-plus"></i>
          </button> -->
        </div>
        <article id="table-container"></article>
        <article id="form-container">
          <?php include "templates/form.php" ?>
        </article>
      </article>
    </section>
    <?php 
      include "templates/materiales.php";
    ?>
  </main>

  <div class="panel panel-primary panelTerminar col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-4">
    <div class="panel-heading">
      <h3 class="panel-title text-center">Terminar Tarea</h3>
    </div>
    <div class="panel-body">
      <article class="around-flex">
        <label>
          <input type="radio" name="calificar" value="Bueno"> Bueno
        </label>
        <label>
          <input type="radio" name="calificar" value="MuyBueno"> Muy Bueno
        </label>
        <label>
          <input type="radio" name="calificar" value="Excelente"> Excelente
        </label>
      </article>
      <div class="form-group">
        <div class="col-xs-12">
          <textarea class="form-control" rows="3" id="informe"></textarea>
          <span class="help-block">Ingrese un resumen del trabajo que hicistes.</span>
        </div>
      </div>
      <div class="col-xs-12 center-flex-boton">
        <button class="btn btn-danger" id="cancelarPanelTarea">Cancelar</button>
        <button class="btn btn-primary" id="guardarTarea">Guardar</button>
      </div>
    </div>
  </div>


  <?php include "../../scripts.php"; ?>
  <script src="js/detalle.js"></script>
  <script src="js/index.js"></script> 
</body>
</html>