<!-- Modal Actualizar Usuario -->
<div class="modal fade" id="ModalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Actualizar El Usaurio ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <form method="POST" action="?c=usuario&a=Actualizar">
        <div class="modal-body">
                <div class="form-group ">
                        <label class="control-label">Codigo</label>
                        <input class="form-control" type="text" name="cod_usuario" id="edcodigo"  required="" maxlength="70" readonly>
                </div>
                <div class="form-group ">
                  <label class="control-label">Dominio</label>
                  <input class="form-control" type="text" name="nickname" id="eduser" required="" maxlength="70">
                </div>
                <div class="form-group ">
                        <label class="control-label">Constraseña</label>
                        <input class="form-control" type="password" name="password" id="edpass" required="" maxlength="70" >
                </div>
                  
                <div class="form-group">
                          <label class="control-label">Tipo de Usuario</label>
                            <select class="form-control" name="tipo_usuario" id="edtipo_usuario">
                              <option>Administrador</option>
                              <option>Normal</option>
                            </select>
                </div>

                <div class="form-group">
                  <label class="control-label">Skill</label>
                  <select class="form-control" name="idskill" id="edidskill" >
                      <option value= " " disabled="" selected=""> Selecione El Skill </option>
                        <?php foreach($this->modelo->Listar_Skill() as $r):?>
                            <option value= <?=$r->idskills?>  > <?=$r->idskills. "-".$r->nombre_skill?> </option>
                        <?php endforeach;?>
                  </select>
                </div>

                 <div class="form-group">
                          <label class="control-label">Categoria</label>
                            <select class="form-control" name="cod_categoria" id="edcategoria" >
                              <option value= " " disabled="" selected=""> Selecione la Categoria </option>
                                             <?php foreach($this->modelo->List_Category() as $r):?>
                                              <option value= <?=$r->idcategoria_staff?>  > <?=$r->idcategoria_staff. "-".$r->categoria?> </option>
                                              <?php endforeach;?>
                            </select>
                </div>

                <div class="form-group">
                          <label class="control-label">Tipo de Rol</label>
                            <select class="form-control" name="rol" id="edrol">
                              <option>Presencial</option>
                              <option>Work at Home</option>
                            </select>
                </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
          <button  type="submit" class="btn btn-info btn-raised btn-sm actualizar"><i class="zmdi zmdi-floppy"></i> Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Actualizar Eliminar Usuario -->
<div class="modal fade" id="ModalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Eliminar La Informacion ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <form method="POST" action="?c=usuario&a=Eliminar">
        <div class="modal-body">
                <div class="form-group ">
                        <label class="control-label">Codigo</label>
                        <input class="form-control" type="text" name="cod_usuario" id="elcodigo"  required="" maxlength="70" readonly>
                </div>
                <div class="form-group ">
                  <label class="control-label">Dominio</label>
                  <input class="form-control" type="text" name="nickname" id="eluser" required="" maxlength="70" readonly>
                </div>
                <div class="form-group ">
                        <label class="control-label">Constraseña</label>
                        <input class="form-control" type="password" name="password" id="elpass" required="" maxlength="70" readonly >
                </div>
                  
                <div class="form-group">
                          <label class="control-label">Tipo de Usuario</label>
                            <select class="form-control" name="categoria" id="elcategoria">
                              <option>Administrador</option>
                              <option>Normal</option>
                            </select>
                </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
        <button href="#!"  class="btn btn-danger btn-raised btn-sm "><i class="zmdi zmdi-delete"></i> Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>