<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Lista  de <small>Reporte</small></h1>
			</div>
			<p class="lead">Esta  Seccion  se Observa la lista de todos  los reportes </p>
			
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				<li class="active">
					<form method="POST" action="?c=reportes&a=exporte_reporte">
						<button  type="" class="btn btn-info btn-raised btn-sm actualizar_info"  data-toggle="modal" data-target="#ModalActualizar"><i class="zmdi zmdi-download"></i> Exporta a Excel
						</button>
					</form>
				</li>

			</ul>

			
		</div>	
	</div>
</div>	

<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-hover text-center" data-filtering="true">
			<thead class="thead-dark">
				<tr>
					<th class="text-center">Codigo</th>
					<th class="text-center">Usuario</th>
					<th class="text-center">Skill</th>
					<th class="text-center">Tipo de Rol</th>
					<th class="text-center">Qflow</th>
					<th class="text-center">Cic</th>
					<th class="text-center">Tipo de Falla</th>
					<th class="text-center">Observaciones</th>
					<th class="text-center">Fecha</th>
					<th class="text-center">Imagenes</th>
					
				</tr>
			</thead>

			<tbody>
				<?php foreach($this->modelo-> Listar_reporte_Fecha( $_SESSION["fecha_inicio"],  $_SESSION["fecha_final"]) as $r): $datos=$r->imagen_r;?>
                 

                   <tr>
                   		<td><span id="codigo"><?=$r->cod_usuario?></span></td>
                   		<td><span id="user"><?=$r->nickname?></span></td>
                   		<td><span id="user"><?=$r->nombre_skill?></span></td>
                   		<td><span id="user"><?=$r->tipo_rol?></span></td>
                   		<td><span id="qf"><?=$r->codigo_QF?></span></td>
                   		<td><span id="cic"><?=$r->cic?></span></td>
                   		<td><span id="tipo_falla"><?=$r->tipo_falla?></span></td>
                   		<td><span id="Observaciones"><?=$r->observaciones?></span></td>
                   		<td><span id="Fecha"><?=$r->fecha?></span></td>
                   		<td><a href="#!" class="btn btn-primary btn-raised btn-xs edit"  onclick="mostraiamege('<?php echo $datos ?>')" ><i class="zmdi zmdi-file"></i></a></td>


                   </tr>

				<?php endforeach;?>						
			</tbody>
		</table>
			
	</div>
</div>