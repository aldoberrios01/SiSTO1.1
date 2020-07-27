<div class="container-fluid">
  <div class="page-header">
    <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administraci&oacute;n de Recursos Humanos</h1>
  </div>
  <p class="lead">Registra y Enlistar Informaci&oacute;n </p>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <ul class="nav nav-tabs" style="margin-bottom: 15px;">
        <li class="active"><a href="#new_estado" data-toggle="tab">Nuevo Estado</a></li>
        <li><a href="#new_skill" data-toggle="tab">Nuevo Skills</a></li>
        <li><a href="#new_category" data-toggle="tab">Nueva Categoria </a></li>
        <li><a href="#list_estados" data-toggle="tab">Listar Estados</a></li>
        <li><a href="#list_skills" data-toggle="tab">Listar Skills</a></li>
        <li><a href="#list_categoria" data-toggle="tab">Listar Categorias</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="new_estado">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <form method="POST" action="?c=rrhh&a=Insertar_Estados">
                  <div class="form-group label-floating">
                    <label class="control-label">Nombre del Estado</label>
                    <input class="form-control" type="text" name="nom" required="" maxlength="70">
                  </div>
                  <div class="page-wrapper box-content">
                    <label class="control-label">Comentarios del Estado</label>
                    <textarea class="form-control" name="comenta" id="comenta"></textarea>
                    <small class="text-muted"> Caracteres entre 0-300</small>
                  </div>
                  <p class="text-center">
                    <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar Estado</button>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade in" id="new_skill">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <form method="POST" action="?c=rrhh&a=Insertar_Skills">
                  <div class="form-group label-floating">
                    <label class="control-label">Nombre del Skills</label>
                    <input class="form-control" type="text" name="nombre" required="">
                  </div>
                  <p class="text-center">
                    <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar Skills</button>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade in" id="new_category">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <form method="POST" action="?c=rrhh&a=Insertar_Categoria">
                  <div class="form-group label-floating">
                    <label class="control-label">Nombre de la Categoria</label>
                    <input class="form-control" type="text" name="nombre" required="">
                  </div>
                  <p class="text-center">
                    <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar Categoria</button>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="list_estados">
          <div class="table-responsive">
            <table class="table table-hover text-center" data-filtering="true">
              <thead class="thead-dark">
                <tr>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Tipo de Estados</th>
                  <th class="text-center">Actualizar</th>
                  <th class="text-center">Borrar</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($this->modelo_Estados->Listar_Estados() as $r) : ?>
                  <?php $datos = $r->idestados . "||" . $r->nombre . "||" . str_replace("\r\n", "º", $r->comentario);
                  ?>
                  <tr>
                    <td><span id="id_estado"><?= $r->idestados ?></span></td>
                    <td><span id="nom"><?= $r->nombre ?></span></td>
                    <td><span id="comenta"><?= nl2br($r->comentario) ?></span></td>
                    <td><a href="#!" class="btn btn-success btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalActualizarEstados" onclick="agregaform_estados('<?php echo $datos ?>')"><i class="zmdi zmdi-refresh"></i></a></td>
                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalEliminarEstados" onclick="rellanar_eliminar_estados('<?php echo $datos ?>')"><i class="zmdi zmdi-delete"></i></a></td>

                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="list_skills">
          <div class="table-responsive">
            <table class="table table-hover text-center" data-filtering="true">
              <thead class="thead-dark">
                <tr>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Nombre Skill</th>
                  <th class="text-center">Actualizar</th>
                  <th class="text-center">Borrar</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($this->modelo_Skills->List_Skills() as $r) : ?>
                  <?php $datos = $r->idskills . "||" . $r->nombre_skill;
                  ?>
                  <tr>
                    <td><span><?= $r->idskills ?></span></td>
                    <td><span><?= $r->nombre_skill ?></span></td>
                    <td><a href="#!" class="btn btn-success btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalActualizarSkills" onclick="agregaform_skills('<?php echo $datos ?>')"><i class="zmdi zmdi-refresh"></i></a></td>
                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalEliminarSkills" onclick="rellenar_eliminar_skills('<?php echo $datos ?>')"><i class="zmdi zmdi-delete"></i></a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="list_categoria">
          <div class="table-responsive">
            <table class="table table-hover text-center" data-filtering="true">
              <thead class="thead-dark">
                <tr>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Actualizar</th>
                  <th class="text-center">Borrar</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($this->modelo_Categoria->List_Category() as $r) : ?>
                  <?php $datos = $r->idcategoria_staff . "||" . $r->categoria;
                  ?>
                  <tr>
                    <td><span><?= $r->idcategoria_staff ?></span></td>
                    <td><span><?= $r->categoria ?></span></td>
                    <td><a href="#!" class="btn btn-success btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalActualizarCategoriasStaff" onclick="agregaform_categoria('<?php echo $datos ?>')"><i class="zmdi zmdi-refresh"></i></a></td>
                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalEliminarCategoriasStaff" onclick="rellenar_eliminar_categoria('<?php echo $datos ?>')"><i class="zmdi zmdi-delete"></i></a></td>

                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>