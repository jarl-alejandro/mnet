<?php
session_start();
if(isset($_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"])){
  if( $_SESSION["db78ff0a8439032f661fe9f0a13e09c2c5a7c435"] == "empelado" ) {
    header("Location: sistema/parametros");
  }
}

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

  <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/default.date.css">
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">

        <link rel="stylesheet" href="assets/css/material.css" />
      <link rel="stylesheet" href="assets/css/client.css">

    </head>
    <body id="productos">
      <div id="toast"></div>
    <div class="bandaLateral" style="">
      <div  style="width:168px;">
            <a class="inicar-cliente"><img src="media/servicio.png"></a>
        </div>
        <div style="width:180px;">
            <a class="register-cliente"><img src="media/contacto.png"></a>
        </div>
        <div style="width:154px;">
            <a class="pedidos-cliente"><img src="media/portafolio.png"></a>
        </div>
 </div><!--fin banda lateral-->
 <div class="container-fluid">

<div  class="row" style="background-color: #2dabdd!important;">
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
<nav class="navbar fondo ">
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
         <?php if(!isset($_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"])){ ?>
            <li><a href="#" class="inicar-cliente">Inicar Sesión</a> </li>
            <li><a href="index_sistema.php">Sistema</a></li>
         <?php } else{ ?>
            <li><a href="#" class="pedidos-cliente">Pedios</a></li>
            <li><a href="service/logout.php">Salir</a></li>
         <?php }  ?>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div><!-- fin row del menu-->
<section>   <!-- inicio del area de trabajo-->
<div class="container-fluid"><!-- iniio del area de trabajo-->
<div class="row"><!-- cuadro principal-->
<div class="col-md-8 col-sm-8">

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
                    </div>
        <div class="item">
                        <img alt="Carousel Bootstrap Second" src="media/07/banner2.jpg">
            </div>
            
            <div class="item">
                        <img alt="Carousel Bootstrap Third" src="media/07/banner3.jpg">
            </div>

<div class="item">
                        <img alt="Carousel Bootstrap Third" src="media/07/banner4.jpg">
            </div>

<div class="item">
                        <img alt="Carousel Bootstrap Third" src="media/07/banner5.jpg">
            </div>

    </div> 
    <a class="left carousel-control" href="#carousel-622692" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
     <a class="right carousel-control" href="#carousel-622692" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

  </div><!-- fin slider-->

                <div class="col-md-4">
                    <div class="thumbnail" style=" height:250px!important;">
                        <img alt="Bootstrap Thumbnail First" src="media/07/1.jpg">
   
                        <div class="caption">
                            <h3>
                        Servicios de Internet
                            </h3>
                            <i class="general foundicon-globe"></i>
        
                            <p>
                                Instalacion de Servicio de Internet Dedicado con la mejor velocidad del mercado.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail" style=" height:250px!important;">
                         <img alt="Bootstrap Thumbnail Second" src="media/07/2.jpg">
                        <div class="caption">
                            <h3>
                                Video Vigilancia
                            </h3>
                            <p>
                                Asesoria, Venta e Instalacion de Sistemas de Camaras de Seguridad.
                            </p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail" style=" height:250px!important;">
                        <img alt="Bootstrap Thumbnail Third" src="media/07/3.jpg">
                        <div class="caption">
                            <h3>
                                Acceso Remoto
                            </h3>
                            <p>
                                Acceso remoto de sus camaras desde un PC, Portatil, Tablet, Smart Phone.
                            </p>
                            
                        </div>

                    </div>
                </div>
            
           

<!--fin div-->



</div><!-- fin slider y servicios-->
<div  class="col-md-4 cuadro "><!-- cuadro materiales-->
<?php

$query = $pdo->query("SELECT * FROM net_bodega order by nom_bode");
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
  <article class="col-md-6">

    <div class="panel panel-primary" style="position:relative; cursor:pointer">

      <div class="panel-body no-padding">
        <img src="media/fotos/<?=$row['imag_bode']?>" height="50px" class="col-xs-12 no-padding" title="<?=$row['nom_bode']?>" >
      </div>
 <h5 class='text-center'><?=$row['nom_bode']?><br> <strong>Cant:</strong><?=$row['cant_bode']?>&nbsp;U  </h5>
     
    </div>

  </article>

  <?php }   ?>


</section>

                                        

</div><!--din medi-->   
        

</div><!-- fin materiales-->

</div><!-- fin cuadro principal-->

<div class="container"
<div class="row"
 <div class="col-sm-12">
                 <div class="col-md-3">
                    <div class="thumbnail" style=" height:250px!important;">
                        <img alt="Bootstrap Thumbnail Third" src="media/07/6.jpg">
                        <div class="caption">
                            <h3>
                                Redes y Cableado
                            </h3>
                            <p>
                               Analisis, Diseño e implementacion de redes y Cableado estructurado.
                            </p>
                 </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail" style=" height:250px!important;">
                        <img alt="Bootstrap Thumbnail Third" src="media/07/3.jpg">
                        <div class="caption">
                            <h3>
                                Ensamblaje de Computadoras
                            </h3>
                            <p>
                                Ensamblaje de Computadoras de Escritorio.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail" style=" height:250px!important;">
                        <img alt="Bootstrap Thumbnail Third" src="media/07/8.jpg">
                        <div class="caption">
                            <h3>
                                Mantenimiento y Reparacion de Computadoras
                            </h3>
                            <p>
                               Mantenimiento preventivo , correctivo y Reparacion  de Computadoras.
                                
                            </p>
                        </div>

                    </div>
                </div>

                 <div class="col-md-3">
                    <div class="thumbnail" style=" height:250px!important;">
                        <img alt="Bootstrap Thumbnail Third" src="media/07/1.jpg">
                        <div class="caption">
                            <h3>
Tienda Informatica Online                            </h3>
                            <p>
Venta de Computadoras, partes y accesorios.                                
                            </p>
                        </div>

                    </div>
                </div>

 </div>

</div>
</div>

<!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; MundoNet</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

</div><!--fin container del area de trabajo-->

  <article class="login-cliente col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-3">
    <header class="login-cliente--header">
      <h4>Iniciar Sesión</h4>
    </header>
    <div class="login-cliente--body">
      <div class="form-group">
        <input class="form-control" placeholder="E-mail" id="email" type="email" autofocus>
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Password" id="password" type="password" value="">
      </div>
      <div style="display:flex;justify-content:space-around">
        <button class="btn ripple-effect btn-raised btn-danger col-xs-5" id="cancelar">Cancelar</button>
        <button class="btn ripple-effect btn-raised btn-primary col-xs-5" id="ingresar">Ingresar</button>
      </div>
    </div>
  </article>
  <?php 
  if(isset($_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"])){
    include 'template/pedidos.php';
  }
  ?>
  <article id="clienteFomrRegister" class="col-xs-10 col-xs-offset-1 col-md-7 col-md-offset-3">
    <?php include "template/formCliente.php" ?>
  </article>
</section>
<!-- area de trabajo-->



  <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.js"></script>
<!-- fin de los script-->
      <!-- Script to Activate the Carousel -->
       <script src="assets/scripts/picker.js"></script>
      <script src="assets/scripts/picker.date.js"></script>

  <script type="text/javascript" src="assets/scripts/searchArticle.js"></script>
  <script type="text/javascript" src="assets/scripts/pagingArticle.js"></script>
  <script src="assets/scripts/validaciones.js"></script>
  <script src="assets/scripts/login.js"></script>
  <script src="assets/scripts/pedidos.js"></script>
  <script src='assets/js/register-cliente.js'></script>
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
  var pager = new Pager('Tab_Filter', 6, 'equipos',6);
  pager.init();
  pager.showPageNav('pager', 'NavPosicion_b');
  pager.showPage(1);

  (function() {
    theTable = $("#Tab_Filter");
    $("#searchTerm").keyup(function() {
      $.uiTableFilter(theTable, this.value, 6)
    })
  })()
</script>
    
        </body>
</html>








