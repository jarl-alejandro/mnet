<?php 
  $title = "Pagos Mensuales";
  $form = "pagos mensuales";
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
        <article id="table-container"></article>
        <article id="form-container">
          <?php include "templates/form.php" ?>
        </article>
      </article>
    </section>
  </main>

  <?php include "../../scripts.php"; ?>
  <script src="js/index.js"></script> 
</body>
</html>