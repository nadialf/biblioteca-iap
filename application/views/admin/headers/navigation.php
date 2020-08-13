<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>"> <i class="glyphicon glyphicon-chevron-left"></i>Biblioteca IAP</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown" title="Perfil">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-message">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url().'auth/logout' ?>"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?php echo base_url().'admin/dashboard'; ?>"><i class="glyphicon glyphicon-list-alt fa-fw"></i> Inicio</a>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-book fa-fw"></i> Libros<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url().'admin/books/'; ?>">Libros</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/authors/'; ?>">Autores</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/editorials/'; ?>">Editoriales</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/genres/'; ?>">Temas</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/others/'; ?>">Otros</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/readers/'; ?>"><i class="fa fa-users fa-fw"></i> Lectores</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/loans/'; ?>"><i class="glyphicon glyphicon-heart fa-fw"></i> Préstamos</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/reports/'; ?>"><i class="fa fa-bar-chart-o fa-fw"></i> Reportes</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> P&aacute;gina principal<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url().'admin/forms/'; ?>">Fondo</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/buttons/'; ?>">Textos</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/notifications/'; ?>">Colores</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/typography/'; ?>">Exposiciones</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/icons/'; ?>"> Mapa</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/grid/'; ?>">Grid</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>