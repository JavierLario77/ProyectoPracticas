<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="info">
          <p><?php echo $_SESSION['nombre']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú de Administración</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dashboard.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Articulos</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-articulos.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Publicaciones</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-post.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
            <li><a href="crear-post.php"><i class="fa fa-plus-circle"></i>Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle"></i>
            <span>Comentarios</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-comentarios.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
            <li><a href="crear-comentarios.php"><i class="fa fa-plus-circle"></i>Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-card"></i>
            <span>Registrados</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-registrados.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
            <li><a href="crear-registro.php"><i class="fa fa-plus-circle"></i>Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Administradores</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-admin.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
            <li><a href="crear-admin.php"><i class="fa fa-plus-circle"></i>Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments"></i>
            <span>Noticias</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-noticias.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
            <li><a href="crear-noticias.php"><i class="fa fa-plus-circle"></i>Agregar</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>