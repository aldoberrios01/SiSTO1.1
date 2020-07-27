<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Users <small>Admin</small></h1>
			</div>
			<p class="lead">Este Formulario Se registrar la Informacion  de los Proceso  que Actualmente se esta implementando </p>
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
									    <form method="POST" action="?c=informacion&a=Insertar_Informacion" enctype="multipart/form-data" >
									    	<div class="form-group label-floating">
											  <label class="control-label">Titulo</label>
											  <input class="form-control" type="text" name="titulo" >
											</div>
											<div class="form-group">
											  <label class="control-label">Fecha</label>
											  <input class="form-control" type="date" name="fecha">
											</div>
											<div class="page-wrapper box-content">
											  <label class="control-label">Descripcion:</label>
											  <textarea class="" name="descripcion" id="descripcion"></textarea>
											</div>
											
											<div class="form-group">
										      <label class="control-label">Imagen:</label>
										      <div>
										        <input type="text"  readonly="" class="form-control" placeholder="Browse...">
										        <input type="file" name="imagen"  >
										      </div>
										  	</div>

										  	<div class="form-group">
										      <label class="control-label">Tipo de  Servicio</label>
										        <select class="form-control" name="cod_servicio" >
										          <option value= " " disabled="" selected=""> Selecione El  Servicio </option>
                                     			   <?php foreach($this->modelo->Listar_Servicio() as $r):?>
                                     					<option value= <?=$r->cod_servicio?>  > <?=$r->cod_servicio. "-".$r->tipo_servico?> </option>
                                     					<?php endforeach;?>
										        </select>
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