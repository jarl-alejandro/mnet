<?php 
  $title = "Rotacion de Inventario";
  $form = "Rotacion de Inventario";
  include "../../head.php";
  include "../../conexion/conexion.php";
  $query = $pdo->query("SELECT * FROM net_bodega");
  $query1 = $pdo->query("SELECT * FROM net_bodega");
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
        <div id="container"></div>
      </article>
    </section>
  </main>

  <?php include "../../scripts.php"; ?>
  <script src="../js/highcharts.js"></script> 
  <script src="../js/highcharts-3d.js"></script> 
  <script src="../js/exporting.js"></script>
<script>
var chart = Highcharts.chart('container', {
    chart: {
        renderTo: 'container',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    title: {
        text: 'Rotacion de Inventario'
    },

    subtitle: {
        text: ''
    },

    xAxis: {
      categories: [
      <?php while ($row = $query->fetch()) { ?>
        '<?= $row["nom_bode"] ?>',
      <?php } ?>
      ]
    },

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [
        <?php while ($row = $query1->fetch()) { ?>
          <?= $row["cant_bode"] ?>,
        <?php } ?>
        ],
        showInLegend: false
    }]

});
</script>
</body>
</html>