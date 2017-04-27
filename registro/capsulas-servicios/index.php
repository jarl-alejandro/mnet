<?php 
  $title = "Capsulas de servicios";
  $form = "capsula de servicios";
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
        <div class="col-xs-offset-9 col-md-offset-11" style="margin-bottom:1em;">
          <button class="btn btn-outline btn-primary" id="show-form">
            <i class="fa fa-plus"></i>
          </button>
        </div>
        <article id="table-container"></article>
        <article id="form-container">
          <?php include "templates/form.php" ?>
        </article>
      </article>
    </section>
    <?php 
      include "templates/capsulas.php";
      include "templates/herramientas.php";
    ?>
  </main>

  <?php include "../../scripts.php"; ?>
  <script src="js/detail.js"></script>
  <script src="js/index.js"></script>
</body>
</html>