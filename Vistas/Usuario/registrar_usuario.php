<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Resgistros de  <small>Usuario</small></h1>
			</div>
			<p class="lead">Registros y Lista de Usuarios </p>
</div>

<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
					  	<li><a href="#list" data-toggle="tab">Lista</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form method="POST" action="?c=usuario&a=Guardar">
									    	<div class="form-group label-floating">
											  <label class="control-label">Codigo</label>
											  <input class="form-control" type="text" name="cod_usuario"  required="" maxlength="70">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" type="text" name="nombre" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Apellido</label>
											  <input class="form-control" type="text" name="apellido" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Dominio</label>
											  <input class="form-control" type="text" name="nickname"  required="" maxlength="70">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Constraseña</label>
											  <input class="form-control" type="password" name="password" required="" maxlength="70" >
											</div>
											<div class="form-group">
										      <label class="control-label">Tipo de Usuario</label>
										        <select class="form-control" name="categoria" >
										          <option>Administrador</option>
										          <option>Normal</option>
										        </select>
										    </div>

										    

										    <div class="form-group">
										      <label class="control-label">Skill</label>
										        <select class="form-control" name="idskill" >
										          <option value= " " disabled="" selected=""> Selecione El Skill </option>
                                     			   <?php foreach($this->modelo->Listar_Skill() as $r):?>
                                     					<option value= <?=$r->idskills?>  > <?=$r->idskills. "-".$r->nombre_skill?> </option>
                                     					<?php endforeach;?>
										        </select>
										    </div>

										    <div class="form-group">
										      <label class="control-label">Categoria</label>
										        <select class="form-control" name="cod_categoria" >
										          <option value= " " disabled="" selected=""> Selecione la Categoria </option>
                                     			   <?php foreach($this->modelo->List_Category() as $r):?>
                                     					<option value= <?=$r->idcategoria_staff?>  > <?=$r->idcategoria_staff. "-".$r->categoria?> </option>
                                     					<?php endforeach;?>
										        </select>
										    </div>

										    <div class="form-group">
										      <label class="control-label">Tipo de Rol</label>
										        <select class="form-control" name="rol" >
										          <option>Presencial</option>
										          <option>Work at Home</option>
										        </select>
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center" data-filtering="true">
									<thead class="thead-dark">
										<tr>
											<th class="text-center">Codigo</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido</th>
											<th class="text-center">Usuario</th>
											<th class="text-center">Password</th>
											<th class="text-center">Tipo_Usuario</th>
											<th class="text-center">Skill</th>
											<th class="text-center">Cargo</th>
											<th class="text-center">Tipo de Rol</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Borrar</th>
										</tr>
									</thead>
									<tbody>
                            		<?php foreach($this->modelo->Listar() as $r):?>
                            		<?php $datos= $r->cod_usuario."||".$r->idskills."||".$r->idcategoria_staff."||".$r->nombre."||".$r->apellido."||".$r->nickname ."||".$r->password ."||".$r->tipo_usuario."||".$r->nombre_skill."||".$r->categoria."||".$r->tipo_rol;

                            			$codigo= $r->cod_usuario;
                            		?>	
                                <tr>  
                                    <td><span id="codigo"><?=$r->cod_usuario?></span></td>
                                    <td><span id="nombre"><?=$r->nombre?></span></td>
                                    <td><span id="apellido"><?=$r->apellido?></span></td>
                                    <td><span id="usuario"><?=$r->nickname?></span></td>
                                    <td><span id="password"><?=$r->password?></span></td>
                                    <td><span id="tipo_usuario"><?=$r->tipo_usuario?></span></td>
                                    <td><span id="skill"><?=$r->nombre_skill?></span></td>
                                    <td><span id="cargo"><?=$r->categoria?></span></td>
                                    <td><span id="tipo"><?=$r->tipo_rol?></span></td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalActualizar" onclick="agregaform('<?php echo $datos ?>')" ><i class="zmdi zmdi-refresh"></i></a></td>
									<td><a href="#!" class="btn btn-danger btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalEliminar" onclick="rellanar_eliminar('<?php echo $datos ?>')" ><i class="zmdi zmdi-delete"></i></a></td>
									
                                

                                </tr>
                            <?php endforeach;?>
    
                        </tbody>
								</table>
								
							</div>
					  	</div>
					</div>
				</div>
			</div>
</div>