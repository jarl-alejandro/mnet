<?php
session_start();
include "conexion/conexion.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>MundoNet | Home</title>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <meta property="og:url" content="index.php" />
   <meta property="og:type" content="website" />
   <meta property="og:description" content="Servicios de Internet banda ancha ,Soporte Tecnico de computadores, suministros." />
   <meta property="og:title" content="MundoNet" />	 
    <meta name="description" content="Servicios de Internet banda ancha ,Soporte Tecnico de computadores, suministros." />	
    <meta name="keywords" content="internet, servicios informaticos, soporte tecnico, fibra optica, proveedores de internet, servicios de internet, internet banda ancha, Velocidad Internet, Wifi" />	
     <meta name="author" content="MundoNet" />	




	 <link href="assets/css/bootstrap.css" rel="stylesheet" />

  		 <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/full-slider.css" rel="stylesheet">


		<link rel="stylesheet" href="assets/css/material.css" />


<style>




.navbar-brand {
  padding: 0px;
}

.navbar-brand>img {
    height: 100%;
    width: auto;
}





/*************************
EXAMPLES 2-7 BELOW 
**************************/

/* EXAMPLE 2 (larger logo) - simply adjust top bottom padding to make logo larger */

.example2 .navbar-brand>img {
  padding: 7px 15px;
}


/* CSS Transform Align Navbar Brand Text ... This could also be achieved with table / table-cells */
.navbar-alignit .navbar-header {
	  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  height: 50px;
}
.navbar-alignit .navbar-brand {
	top: 50%;
	display: block;
	position: relative;
	height: auto;
	transform: translate(0,-50%);
	margin-right: 15px;
  margin-left: 15px;
}





.navbar-nav>li>.dropdown-menu {
	z-index: 9999;
}

body {
  font-family: "Lato";
}
.navbar-default {
    background-color: #fff;
    border-color: #1976d2;
    border-radius:0;
}

/* Carousel Styles */
.carousel-indicators .active {
    background-color: #2980b9;
}

.carousel-inner img {
    width: 100%;
    max-height: 460px
}

.carousel-control {
    width: 0;
}

.carousel-control.left,
.carousel-control.right {
	opacity: 1;
	filter: alpha(opacity=100);
	background-image: none;
	background-repeat: no-repeat;
	text-shadow: none;
}

.carousel-control.left span {
	padding: 0px;
}

.carousel-control.right span {
	padding: 0px;
}

.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right, 
.carousel-control .icon-prev, 
.carousel-control .icon-next {
	position: absolute;
	top: 45%;
	z-index: 5;
	display: inline-block;
  border-radius:2em;

}

.carousel-control .glyphicon-chevron-left,
.carousel-control .icon-prev {
	left: 0;
}

.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next {
	right: 0;
}

.carousel-control.left span,
.carousel-control.right span {
	background-color: #000;
}


.carousel-control.left span:hover,
.carousel-control.right span:hover {
	opacity: .7;
	filter: alpha(opacity=70);
}

/* Carousel Header Styles */
.header-text {
    position: absolute;
    top: 20%;
    left: 1.8%;
    right: auto;
    width: 96.66666666666666%;
    color: #fff;
}

.header-text h2 {
    font-size: 40px;
}

.header-text h2 span {
    background-color: #2980b9;
	padding: 10px;
}

.header-text h3 span {
background: rgba(183,222,237,1);
    padding: 5px;
    color: #000;
    display:flex;
opacity:32;
border-radius:2em;
}

.btn-min-block {
    min-width: 170px;
    line-height: 26px;
}

.btn-theme {
    color: #fff;
    background-color: #2dabdd;
    border: 2px solid #fff;
    margin-right: 15px;

}

.btn-theme:hover {
    color: #000;
    background-color: #fff;
    border-color: #fff;
}

.bandaLateral {
        background: url('media/fondoBanda02.png') no-repeat scroll 0 0 rgba(0, 0, 0, 0); cursor: pointer; display: block;
        height: 152px;
        left: -504px;
        position: fixed;
        top: 240px;
        width: 532px;
        z-index: 2000;
    }
 /*   .bandaLateral div {        
        float: left;
        height: 149px;
        margin: 1px 0;
        text-align: center;
        width: 29%;
        opacity: 0.94;
    }*/
    .bandaLateral div:hover {
        /*background-color: #BBBBBB;*/
        opacity: 1;
    }	
</style>


	</head>
	<body>
	<div class="bandaLateral" style="">
      <div  style="width:168px;">
            <a href="atencion-a-empresas.html"><img src="media/servicio.png"></a>
        </div>
        <div style="width:180px;">
            <a href="solicite-aqui.html"><img src="media/contacto.png"></a>
        </div>
        <div style="width:154px;">
            <a href="oficinas-a-nivel-nacional.html"><img src="media/portafolio.png"></a>
        </div>
 </div>

<div class="container">
<div  class="row" style="
	background-color: #f4f4f4!important;">
		<header id="header1" style="background:#2dabdd;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 pull-right ">
                    <strong >Email: </strong>mundonet@hotmail.com
                    &nbsp;&nbsp;
                    <strong>Contactos: </strong>+90-897-678-44
                </div>

            </div>
        </div>


    </header>


<nav class="navbar navbar-default ">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://disputebills.com"><img src="images/logom.png" style="padding-top:0px;">    </a>
      </div>
      <div id="navbar2" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Empresa <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Mision</a></li>
              <li><a href="#">Vision</a></li>
              <li><a href="#">Objetivos</a></li>
             </ul>
          </li>
         <li><a href="#">Portafolio</a></li>
         <li><a href="#">Contactos</a></li>
             
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>



</div><!---fin row-->






<aside>

<div class="row">
		<div class="col-md-8">
			<div class="carousel slide" id="carousel-622692">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-622692">
					</li>
					<li data-slide-to="1" data-target="#carousel-622692">
					</li>
					<li data-slide-to="2" data-target="#carousel-622692">
					</li>
					<li data-slide-to="3" data-target="#carousel-622692">
					</li>
                    <li data-slide-to="4" data-target="#carousel-622692">
					</li>
	
	
    			</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="media/07/banner1.jpg">
						<div class="carousel-caption">
							<h4>
Bienvenidos							</h4>
							<p><span>
								MundoNet es una Empresa dedicada a brindar soluciones informáticas en la Ciudad de la Concordia , con costos relativamente accesibles. Internet Para Hogares, Pequeñas y Medianas empresas, Instalación Sin línea telefónica, Cámaras de Seguridad, Redes Y Cableado Estructurado, Tienda informática, Ensamblaje, Mantenimiento y Reparación de Computadoras, todo en un solo nombre “MundoNet”.</span>
							</p>
						</div>
					</div>
		<div class="item">
						<img alt="Carousel Bootstrap Second" src="media/07/banner2.jpg">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
			</div>
			
            <div class="item">
						<img alt="Carousel Bootstrap Third" src="media/07/banner3.jpg">
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
			</div>

<div class="item">
						<img alt="Carousel Bootstrap Third" src="media/07/banner4.jpg">
						<div class="carousel-caption">
							
												
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
			</div>

<div class="item">
						<img alt="Carousel Bootstrap Third" src="media/07/banner5.jpg">
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
			</div>

	</div> 
    <a class="left carousel-control" href="#carousel-622692" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
     <a class="right carousel-control" href="#carousel-622692" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

			</div>

</div>
<div class="col-md-4">
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
  <div class="col-xs-12">
    <ul class="pagination paginador" id="NavPosicion_b"></ul>
  </div>


<?php if($query->rowCount() == 0){ 
    echo "<h2 class='text-center'>No hay bodega</h2>";
}?>

						

<section id="Tab_Filter" style="height: 100px!important;">
  <article></article>
  <?php while($row = $query->fetch()){ ?>
  <article class="col-xs-11 col-md-4">

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
        <img src="media/fotos/<?=$row['imag_bode']?>" height="50px" class="col-xs-12 no-padding"
          height="128">
      </div>
    </div>

  </article>

  <?php }   ?>



</section>

										

</div><!--din medi-->	
		


</div>	

</aside>

<aside>
	<div class="row bg-info">
				<div class="col-md-3">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail First" src="media/07/1.jpg">
   
						<div class="caption">
							<h3>
						Servicios de Internet
							</h3>
							<i class="general foundicon-globe"></i>
        
							<p>
								Instalacion de Servicio de Internet Dedicado.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-3">
  				   <div class="thumbnail">
						<img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg">
						<div class="caption">
							<h3>
								Video Vigilancia
							</h3>
							<p>
								Asesoria, Venta e Instalacion de Sistemas de Camaras de Seguridad.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">
						<div class="caption">
							<h3>
								Acceso Remoto
							</h3>
							<p>
								Acceso remoto de sus camaras desde un PC, Portatil, Tablet, Smart Phone.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>

					</div>
				</div>
			
			<div class="col-md-3">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">
						<div class="caption">
							<h3>
								Redes Y Cableado
							</h3>
							<p>
								Acceso remoto de sus camaras desde un PC, Portatil, Tablet, Smart Phone.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
					   </div>

				</div>
			</div>


</div><!--fin div-->
		
</aside>
 <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; MundoNet</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
</div> <!--fin container-->






    <!-- Scripts -->
      
  <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets\js/bootstrap.js"></script>
<!-- fin de los script-->
      <!-- Script to Activate the Carousel -->
   <script type="text/javascript" src="assets/scripts/searchArticle.js"></script>
     <script type="text/javascript" src="assets/scripts/pagingArticle.js"></script>

    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

  <script language="javascript"> 
                    $(document).ready(function() {
                        $(".bandaLateral").click(function() {
                            if($('.bandaLateral').css('left') != '0px'){
                                $('.bandaLateral').animate({'left': '0'}, 800);
                            }else{
                                $('.bandaLateral').animate({'left': '-504px'}, 800);
                            }
                        });
                        var x = Math.floor((Math.random() * 2) + 1);
                        $('#wica_area_content').addClass('bg'+x);

                    });
                </script> 


<script type="text/javascript">
  var pager = new Pager('Tab_Filter', 3, 'equipos', 3);
  pager.init();
  pager.showPageNav('pager', 'NavPosicion_b');
  pager.showPage(1);

  (function() {
    theTable = $("#Tab_Filter");
    $("#searchTerm").keyup(function() {
      $.uiTableFilter(theTable, this.value, 3)
    })
  })()
</script>
    
    	</body>
</html>