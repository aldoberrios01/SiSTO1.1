
<!-- Modal Actualizar Categorias Staff -->
<div class="modal fade" id="ModalActualizarCategoriasStaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Actualizar la Categoria ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="?c=rrhh&a=Actualizar_Categoria">
        <div class="modal-body">
          <div class="form-group ">
            <label class="control-label">ID Categoria</label>
            <input class="form-control" type="text" name="idcategoria_staff" id="acidcategoria" required="" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Nombre de la Categoria</label>
            <input class="form-control" type="text" name="nombre" id="acnombre_categoria" required="">
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-info btn-raised btn-sm actualizar"><i class="zmdi zmdi-floppy"></i> Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEliminarCategoriasStaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Eliminar la Categoria ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="?c=rrhh&a=Eliminar_Categoria">
        <div class="modal-body">
          <div class="form-group ">
            <label class="control-label">ID Categoria</label>
            <input class="form-control" type="text" name="idcategoria_staff" id="elidcategoria" required="" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Nombre de la Categoria</label>
            <input class="form-control" type="text" name="nombre" id="elnombre_categoria" required="" readonly >
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger btn-raised btn-sm actualizar"><i class="zmdi zmdi-floppy"></i> Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal Actualizar Skills -->
<div class="modal fade" id="ModalActualizarSkills" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Actualizar El Skill ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="?c=rrhh&a=Actualizar_Skills">
        <div class="modal-body">
          <div class="form-group ">
            <label class="control-label">ID Skills</label>
            <input class="form-control" type="text" name="idskills" id="acidskills" required="" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Nombre del Skill</label>
            <input class="form-control" type="text" name="nombre" id="acnombre_skills" required="">
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-info btn-raised btn-sm actualizar"><i class="zmdi zmdi-floppy"></i> Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEliminarSkills" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro que Desea Eliminar El Skill ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="?c=rrhh&a=Eliminar_Skills">
        <div class="modal-body">
          <div class="form-group ">
            <label class="control-label">ID Skills</label>
            <input class="form-control" type="text" name="idskills" id="elidskills" required="" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Nombre del Skill</label>
            <input class="form-control" type="text" name="nombre" id="elnombre_skills" required="" readonly>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger btn-raised btn-sm actualizar"><i class="zmdi zmdi-floppy"></i> Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal Actualizar Estados -->
<div class="modal fade" id="ModalActualizarEstados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Actualizar El Estado ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="?c=rrhh&a=Actualizar_Estados">
        <div class="modal-body">
          <div class="form-group ">
            <label class="control-label">ID Estado</label>
            <input class="form-control" type="text" name="id_estado" id="acid_estado" required="" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Nombre</label>
            <input class="form-control" type="text" name="nom" id="acnom" required="">
          </div>
          <div class="form-group ">
            <label class="control-label">Comentarios</label>
            <textarea class="form-control" name="comenta" id="accomenta"></textarea>
            <small class="text-muted"> Caracteres entre 0-300</small>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-info btn-raised btn-sm actualizar"><i class="zmdi zmdi-floppy"></i> Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEliminarEstados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro que Desea Eliminar El Estado ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="?c=rrhh&a=Eliminar_Estados">
        <div class="modal-body">
          <div class="form-group ">
            <label class="control-label">ID Estado</label>
            <input class="form-control" type="text" name="id_estado" id="elidestados" required="" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Nombre</label>
            <input class="form-control" type="text" name="nom" id="elnombre" required="" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Comentarios</label>
            <textarea class="form-control" name="comenta" id="elcomenta" required="" readonly></textarea>
            <small class="text-muted"> Caracteres entre 0-300</small>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger btn-raised btn-sm actualizar"><i class="zmdi zmdi-floppy"></i> Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>




