<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Punto de venta stehspro</title>
	<link rel="stylesheet" href="view/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="view/vendor/iconos/css/font-awesome.min.css">
	<link rel="stylesheet" href="view/vendor/admin/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="view/vendor/iconos/css/iconos.min.css">
	<link rel="stylesheet" href="view/vendor/admin/css/estilos.css">
	
	
</head>
<body>
<?php
    session_start();
    
    if(!isset($_SESSION["usuario"])){
        header("location:login.php");
    }
?>
    <div id="wrapper" class="toggled">
	    <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar">

				<h4>StehsPro</h4>
				<div class="avatar"> 
				    <p>Administrador</p>

				</div>
				<ul class="sidebar-menu">
                    
                    <li><a href="./?view=ventas"><i class="zmdi zmdi-money"></i>Ventas</a></li>
                    <li class="treeview">
                    <li><a href="./?view=clientes"><i class="zmdi zmdi-account"></i>Clientes </a>
                    <li><a href="./?view=Proveedores"><i class="zmdi zmdi-truck"></i>Proveedores </a>
                    <li><a href="./?view=articulos"><i class="zmdi zmdi-storage"></i>Articulos</a></li>
                    <li><a href="./?view=marcas"><i class="zmdi zmdi-map"></i>Marcas</a></li>
                    <li><a href="./?view=reporte"><i class="zmdi zmdi-map"></i>Reporte</a></li>
                   <!--  <li><a href="./?view=tutores"><i class="zmdi zmdi-female"></i>Tutores</a></li>
                    <li><a href="./?view=alumnos"><i class="zmdi zmdi-face"></i> Alumnos</a></li>
                    <li><a href="./?view=grupos"><i class="zmdi zmdi-case"></i> Grupos</a></li>
                    <li><a href="./?view=asesores"><i class="zmdi zmdi-case"></i> Asesores</a></li>
                    <li><a href="./?view=materias"><i class="zmdi zmdi-book"></i> Asignaturas</a></li>
                    <li><a href="./?view=personals"><i class="zmdi zmdi-accounts"></i>Personal</a></li>
                    <li><a href="./?view=eventos"><i class="zmdi zmdi-laptop"></i>Eventos</a></li> -->
				</ul>
            </div>
		</div>
		<!-- Contenido -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-dark bg-navbar">
                <a href="#menu-toggle" class="btn btn-sm btn-menu" id="menu-toggle"><i class="zmdi zmdi-menu"></i></a>
                <a href="logout.php" class="btn btn-primary"><i class="fa fa-power-off"></i></a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="logout.php">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
			</nav>
			<div class="page-content">
            <?php
                if(isset($_GET["view"]) && $_GET["view"]!="")
                {
                    $url = "view/".$_GET["view"].".php";
                    if(file_exists($url))
                    {
                        include $url;
                    }
                    else
                    {
                        echo "<div class='container' style='margin-top:100px;'>
                            <h1 class='text-center'> pagina no encontrada </h1>
                            </div>";
                    }
                }
                else
                {
                    include "view/ventas.php";
                    
                }
                ?> 
                </div>
            </div>
        </div>
	<script src="view/vendor/jquery/jquery.min.js"></script>
	<script src="view/vendor/popper/popper.min.js"></script>
	<script src="view/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="view/vendor/admin/js/jquery.dataTables.min.js"></script>
	<script src="view/vendor/admin/js/dataTables.bootstrap4.min.js"></script>
    <script src="view/vendor/admin/js/listar.js"></script>
    <script src="view/vendor/assets/js/scripts.js"></script>
    <!-- <script src="view/vendor/admin/js/jquery-1.11.1.min.js"></script> -->


</body>
</html>
