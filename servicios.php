<!DOCTYPE HTML>
<?php
include "conexion/conexion.php";

?>
<html>
	<head>
		<title>One Column - Halcyonic by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		 <link href="assets/css/bootstrap.css" rel="stylesheet" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

	</head>
	<body>
		<header id="header1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 pull-right ">
                    <strong >Email: </strong>dolcecofe@hotmail.com
                    &nbsp;&nbsp;
                    <strong>Contactos: </strong>+90-897-678-44
                </div>

            </div>
        </div>


    </header>

		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">
						<div class="row">
							<div class="12u">

								<!-- Logo -->
									<h1><a href="#" id="logo"><img src="images/logo.png"></a></h1>

								<!-- Nav -->
									<nav id="nav">
										<a href="index.php">Inicio</a>
										<a href="empresa.html">Empresa</a>
										<a href="servicios.php">Portafolio</a>
										<a href="index_sistema.php">Sistema</a>
										
									</nav>

							</div>
						</div>
					</header>
				</div>

			<!-- Content -->
				<div id="content-wrapper">
					<div id="content">
						<div class="container">
							<div class="row">
								<div class="12u">

									<!-- Main Content -->
<div class="row">
  
<?php

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
        <img src="media/fotos/<?=$row['imag_bode']?>" class="col-xs-12 no-padding"
          height="128">
      </div>
    </div>

  </article>
  <?php }   ?>


</section>
  <div class="col-xs-12 center">
  <ul class="pagination" id="NavPosicion_b"></ul>
</div>





								</div>
							</div>
						</div>
					</div>
				</div>





		<!-- Footer -->
			
			<!-- Copyright -->
				<div id="copyright">
					&copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a>
				</div>

		</div>

		<!-- Scripts -->
         <script src="assets/scripts/jquery-3.2.0.min.js"></script>
       <script type="text/javascript" src="assets/scripts/searchArticle.js"></script>
     <script type="text/javascript" src="assets/scripts/pagingArticle.js"></script>

		<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

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

	</body>
</html>