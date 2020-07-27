<!-- Content page -->
<div class="container-fluid">
	<div class="page-header">
		<h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Users <small>Admin</small></h1>
	</div>

	<p class="lead">Registros de Auditorias QF </p>
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
								<form method="POST" action="?c=auditoria&a=Insertar_Auditoria" enctype="multipart/form-data" > 

									<div class="form-group">
                          				<label class="control-label">Usuarios</label>
                           				 <select class="form-control" name="cod_usuario" >
                              				<option value= " " disabled="" selected=""> Selecione El  Usuario </option>
                                             <?php foreach($this->modelo->Listar_usuario() as $r):?>
                                              <option value= <?=$r->cod_usuario?>  > <?=$r->nickname. "-".$r->cod_usuario?> </option>
                                              <?php endforeach;?>
                            			</select>
                					</div>

								
									<div class="form-group label-floating">
										<label class="control-label">Codigo QF:</label>
										 <input class="form-control" type="text" name="codigo_qf" >
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Tema del Caso:</label>
										 <input class="form-control" type="text" name="tema" >
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Numero Linea / ID cliente:</label>
										 <input class="form-control" type="text" name="numero_T" > 
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Observacion:</label>
										 <textarea class="form-control" name="observacion"></textarea>
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Fecha:</label>
										 <input class="form-control" type="date" name="fecha">
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