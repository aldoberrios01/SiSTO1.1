
	<div class="container-fluid">
			<div class="page-header">
				<br><br>
			  <h1 class="text-titles"><center>SISTO <small>Sistema de Informacion de Soporte Tecnico O.</small></center></h1>
			</div>
	</div>
	<div class="full-box text-center" style="padding: 30px 10px;">
			
			
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase"  >
					
					 <span id="linea_fija"> Linea Fija</span>
				</div>
				<a href="?c=informacion&a=Listar_Linea_Fija" name="linea" type="submit" class="linea">
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-phone"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("Linea Fija")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase"  >
					
					 <span id="linea_fija"> Linea IP</span>
				</div>
				<a href="?c=informacion&a=Listar_Linea_Ip" name="linea" type="submit" class="linea">
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-phone"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("Linea IP")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Tv Analogo
				</div>
				<a href="?c=informacion&a=Listar_Tv_Basico" >
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-tv"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("TV Basico")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					TV Digital
				</div>
				<a href="?c=informacion&a=Listar_Tv_Digital" >
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-tv-play"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("TV Digital")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					TV DTH
				</div>
				<a href="?c=informacion&a=Listar_Tv_Dth" >
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-tv-alt-play"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("DTH")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ADSL
				</div>
				<a href="?c=informacion&a=Listar_Adsl" >
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-laptop"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("Internet Adsl")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Internet HFC
				</div>

				<a href="?c=informacion&a=Listar_Internet_Hfc" >
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-router"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("Internet HFC")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Gpon
				</div>
				<a href="?c=informacion&a=Listar_Gpon" >
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-wifi"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("Gpon")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Trasmision de Datos
				</div>
				<a href="?c=informacion&a=Listar_Trasmision_Datos" >
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-portable-wifi"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("Transmisión de Datos")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Escenarios Generales
				</div>
				<a href="?c=informacion&a=Listar_General" >
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-folder"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php $p=$this->modelo->Cantidad_por_Tipo("General")?><?=$p->total?></p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Platillas
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi  zmdi-file"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0</p>
					<small>Registros</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Reportes
				</div>
				<a href="?c=reportes&a=Registrar_reporte" >
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-alert-triangle"></i>
				</div>
				</a>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0</p>
					<small>Registros</small>
				</div>
			</article>

			
	</div>
	
