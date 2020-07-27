<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <link rel="stylesheet" href="./css/main.css">

	<!--Style from autocomplete-->
	<script src="./js/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/jquery.typeahead.min.css">
	
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				<div id="usuario"><?php if($_SESSION["usuario"]!=null){echo  $_SESSION["usuario"];} else{session_destroy();  
        header("location:index.php");} ?></div> <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/logo.png" alt="UserIcon">
					<figcaption class="text-center text-titles"><div id="tipo_usuario"><?php echo $_SESSION["tipo_usuario"]; ?></div></figcaption>
					
				</figure>

				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="?c=usuario&a=Panel">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu" id="informacion">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administracion <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="?c=informacion&a=Regsitrar_Datos"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i> Agregar Informacion </a>
						</li>
						<!-- Estados de RRHH -->

						<li>
							<a href="?c=rrhh&a=Vista_Inicial"><i class="zmdi zmdi-accounts-list-alt zmdi-hc-fw"></i> RRHH</a>
						</li>
						<!-- Fin -->
						<!-- Briefing -->

						<li>
							<a href="?c=briefing&a=Vista_Briefing"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>Briefing</a>
						</li>
						<!-- Fin -->
						
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu" id="musuario">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="?c=usuario"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Agregar Usuario</a>
						</li>
												
					</ul>
				</li>
				
				
				
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Reportes de Fallas <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<?php

						if($_SESSION["tipo_usuario"]=="Administrador"):?>
						<li>
							<a href="" data-toggle="modal" data-target="#ModalBuscarfecha" id="sm_reporte"><i class="zmdi zmdi-balance zmdi-hc-fw" ></i>  Data Reporte</a>
						</li>

						<li>
							<a href="?c=auditoria&a=Registrar_Auditoria" id="sm_auditoria"><i class="zmdi zmdi-balance zmdi-collection-text"></i>  Data Auditoria QF</a>
						</li>
						 <?php endif ?>

						<li>
							<a href="?c=auditoria&a=Listar_Adutoria"><i class="zmdi zmdi-accounts-list-alt"></i>  Lista de  Auditoria QF</a>
						</li>
		
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				
				
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		
	

	
	