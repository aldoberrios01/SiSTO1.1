<!-- Content page -->
<div class="container-fluid">
	<div class="page-header">
		<h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Users <small><?php echo $_SESSION["usuario"]?></small></h1>
	</div>

	<p class="lead"> Resgistros de Fallas </p>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				<li class="active"><a href="#new" data-toggle="tab">Nuevo Registro</a></li>
				
			</ul>

			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="new">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-md-10 col-md-offset-1">
								<form method="POST" action="?c=reportes&a=Insertar_Reporte" enctype="multipart/form-data" > 

									<div class="form-group label-floating">
										<label class="control-label">Usuario:</label>
										 <input class="form-control" type="text" name="usuario" disabled="disabled" value='<?php echo  $_SESSION["usuario"] ?>' >
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Usuario:</label>
										 <input class="form-control" type="text" name="cod_usuario" disabled="disabled" value='<?php echo  $_SESSION["cod_usuario"] ?>' >
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Codigo QF:</label>
										 <input class="form-control" type="text" name="codigo_qf" >
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Numero Cic:</label>
										 <input class="form-control" type="text" name="cic" >
									</div>

									<div class="form-group">
										      <label class="control-label">Tipo de Falla</label>
										        <select class="form-control" name="tipo_falla" >
										          <option>Falla en Cic</option>
										          <option>Falla en Diadema</option>
										          <option>Falla en PC</option>
										          <option>Falla en Sistemas</option>
										          <option>Falla en vpn</option>
										          <option>Falla en  el  Servicio de Internet</option>
										          <option>Llamada en Pickup</option>
										          <option>Llamada no Alcazanda</option>
										          <option>Se corta la llamada</option>
										          <option>Corte de Energia Electrica</option>

										        </select>
									 </div>

									<div class="form-group label-floating">
										<label class="control-label">Observaciones:</label>
										 <textarea class="form-control" name="observaciones"></textarea>
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Fecha:</label>
										 <input class="form-control" type="date" name="fecha">
									</div>

									<div class="form-group">
										      <label class="control-label">Imagen del reporte:</label>
										      <div>
										        <input type="text"  readonly="" class="form-control" placeholder="Browse...">
										        <input type="file" name="imagen"  >
										      </div>
									</div>

									<p class="text-center">
										    <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
