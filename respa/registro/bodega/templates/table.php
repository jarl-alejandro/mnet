<?php
include "../../../conexion/conexion.php";

$query = $pdo->query("SELECT * FROM net_bodega");
$index = 0;
?>
<label class="input-group">
  <input style="width: 24em;float: right;height: 3.2em;" 
      placeholder="Ingreser lo que desea buscar" type="search" class="form-control input-sm" 
      id="searchTerm">
  <span class="input-group-btn">
    <button class="btn btn-default" type="button">
      <i class="fa fa-search"></i>
    </button>
  </span>
</label>

<?php if($query->rowCount() == 0){ 
    echo "<h2 class='text-center'>No hay bodega</h2>";
}?>

<section id="Tab_Filter">
  <article></article>
  <?php while($row = $query->fetch()){ ?>
  <article class="col-xs-3">
    <div class="panel panel-primary" style="position:relative">
      <div class="panel-heading text-center no-padding">
        <?=$row['nom_bode']?>
        <a class="dropdown-toggle" data-toggle="dropdown" 
          style="cursor: pointer;color: white;float: right;margin-right: 1em;">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-inverse" role="menu" 
            style="position: absolute;top: 2em;left: 3em;">
          <li>
            <a href="#" style="font-size: 1.4em;" class="editar" 
              data-id="<?=$row["cod_bode"]?>">Editar <i class="fa fa-pencil"></i></a>
          </li>
          <li class="divider"></li>
          <li><a href="#" style="font-size: 1.4em;" class="eliminar" 
          data-id="<?=$row["cod_bode"]?>">Eliminar <i class="fa fa-trash-o"></i></a></li>
        </ul>
      </div>

      <div class="panel-body no-padding">
        <img src="../../media/fotos/<?=$row['imag_bode']?>" class="col-xs-12 no-padding"
          height="128">
      </div>
    </div>
  </article>
  <?php } ?>
</section>
<div class="col-xs-12 center">
  <ul class="pagination" id="NavPosicion_b"></ul>
</div>
<script src="js/app.js"></script>

<script type="text/javascript" src="../../assets/scripts/searchArticle.js"></script>
<script type="text/javascript" src="../../assets/scripts/pagingArticle.js"></script>

<script type="text/javascript">
  var pager = new Pager('Tab_Filter', 8, 'equipos', 4);
  pager.init();
  pager.showPageNav('pager', 'NavPosicion_b');
  pager.showPage(1);

  (function() {
    theTable = $("#Tab_Filter");
    $("#searchTerm").keyup(function() {
      $.uiTableFilter(theTable, this.value, 8)
    })
  })()
</script>
