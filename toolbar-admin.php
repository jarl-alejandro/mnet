
<nav class="navbar-default navbar-static-side" role="navigation">
  <!-- sidebar-collapse -->
  <div class="sidebar-collapse">
      <!-- side-menu -->
      <ul class="nav" id="side-menu">
          <li>
              <!-- user image section-->
              <div class="user-section">
                  <div class="user-section-inner">
                      <img src="../../assets/img/user.jpg" alt="">
                  </div>
                  <div class="user-info">
                      <div><?= $nombre ?></div>
                      <div class="user-text-online">
                          <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                      </div>
                  </div>
              </div>
              <!--end user image section-->
          </li>
          <li class="sidebar-search">
              <!-- search section-->
              <!--<div class="input-group custom-search-form">
                  <input type="text" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                          <i class="fa fa-search"></i>
                      </button>
                  </span>
              </div>-->
              <!--end search section-->
          </li>
          <li class="active">
              <a href="../../"><i class="fa fa-dashboard fa-fw"></i>&nbsp;Inicio</a>
          </li>
           <li class="active">
              <a href="../../sistema/personal"><i class="fa fa-dashboard fa-fw"></i>&nbsp;Personal</a>
          </li>
          <li>
              <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp;Sistema<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li><a href="../../sistema/parametros">Parametros</a></li>
                  <li><a href="../../sistema/tipos-servicios">Tipos de Servicios</a></li>
                  <li><a href="../../sistema/categorias">Categorias</a></li>
                  <li><a href="../../sistema/usuarios">Usuarios</a></li>
              </ul>
          </li>
          <li>
              <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp;Planes de Internet<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li><a href="../../planes/internet">Internet</a></li>
                  <li><a href="../../planes/pagos">Pagos Mensuales</a></li>
              </ul>
          </li>
          <li>
              <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp;Registro<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li>
                      <a href="../../registro/clientes">Clientes</a>
                  </li>
                  <li>
                      <a href="../../registro/proveedores">Proveedores</a>
                  </li>
                  <li>
                      <a href="../../registro/capsulas-servicios">Capsulas de Servicios</a>
                  </li>
                  <li>
                      <a href="../../registro/bodega">Bodega</a>
                  </li>
                  <li>
                      <a href="../../registro/plan-internet">Plan de Internet</a>
                  </li>
                  <li>
                      <a href="../../registro/kardex">Kardex</a>
                  </li>
                 
              </ul>
              <!-- second-level-items -->
          </li>
          <li>
              <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp;Procesos<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li>
                      <a href="../../procesos/pedidos">1.- Pedidos</a>
                  </li>
                  <li>
                      <a href="../../procesos/asignar-tecnico">2.- Visita Tecnica</a>
                  </li>
                  <li>
                      <a href="../../procesos/mis-pedidos">3.- Mis Pedidos</a>
                  </li>
                  <li>
                      <a href="../../procesos/asignar-trabajador">5.- Asignar equipo</a>
                  </li>
                  <li>
                      <a href="../../procesos/mis-trabajos">6.- Mis Tareas</a>
                  </li>
                  <li>
                      <a href="../../procesos/pendientes">7.- Pendientes</a>
                  </li>
                  <li>
                      <a href="../../procesos/informes">8.- Informes</a>
                  </li>
                  <li>
                      <a href="../../procesos/pedidos-finalizados">7.- Pedidos Finalizados</a>
                  </li>
                  <li>
                      <a href="morris.html">Cartera</a>
                  </li>
                  <li>
                      <a href="morris.html">Egresos</a>
                  </li>
                  <li>
                      <a href="morris.html">Cierre Diario</a>
                  </li>
                  <li>
                      <a href="morris.html">Tareas</a>
                  </li>
                                            

                  
              </ul>
              <!-- second-level-items -->
          </li>
          <li>
              <a href="forms.html"><i class="fa fa-edit fa-fw"></i>&nbsp;Reportes</a>
          </li>
          <li>
              <a href="#"><i class="fa fa-wrench fa-fw"></i>&nbsp;Estadistica<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li>
                      <a href="../../estadistica/trabajos-terminados">Trabajos terminados</a>
                  </li>
                  <li>
                      <a href="../../estadistica/mejores-empleados">Mejor empleado</a>
                  </li>
                  <li>
                      <a href="../../estadistica/mejores-clientes">Mejores clientes</a>
                  </li>
                  <li>
                      <a href="../../estadistica/rotacion-inventarios">Rotacion de inventarios</a>
                  </li>
              </ul>
              <!-- second-level-items -->
          </li>        
      </ul>
      <!-- end side-menu -->
  </div>
  <!-- end sidebar-collapse -->
</nav>