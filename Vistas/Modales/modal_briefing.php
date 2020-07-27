<!-- Modal Actualizar Briefing -->
<div class="modal fade" id="ModalAc_Briefing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Actualizar Briefing ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="?c=briefing&a=Actualizar_Briefing">
        <div class="modal-body">
          <div class="form-group ">
            <label class="control-label">ID Estado</label>
            <input class="form-control" type="text" name="id_briefing" id="acid_briefing" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Nombre del Briefing</label>
            <input class="form-control" type="text" name="nombre_briefing" id="acnombre_briefing" required="">
          </div>
          <div class="form-group ">
            <label class="control-label">Mes</label>
            <select class="form-control" name="mes_briefing" id="acmes_briefing">
              <?php
              $Meses = array(
                'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
              );

              for ($i = 1; $i <= 12; $i++) {
                if ($i == date('m'))
                  echo '<option value="' . $Meses[($i) - 1] . '"selected>' . $Meses[($i) - 1] . '</option>';
                else
                  echo '<option value="' . $Meses[($i) - 1] . '">' . $Meses[($i) - 1] . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label">Skill Area</label>
            <select class="form-control" name="skill_briefing" id="acskill_briefing">
              <option>Soporte Fijo</option>
              <option>Soporte Comercial Movil</option>
              <option>Despacho Nivel 1</option>
              <option>Corporativo</option>
              <option>Migracion</option>
            </select>
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

<!-- Modal Eliminar Briefing -->
<div class="modal fade" id="ModalEl_Briefing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Eliminar el Briefing ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="?c=briefing&a=Eliminar_Briefing">
        <div class="modal-body">
          <div class="form-group ">
            <label class="control-label">ID Estado</label>
            <input class="form-control" type="text" name="id_briefing" id="elid_briefing" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Nombre del Briefing</label>
            <input class="form-control" type="text" id="elnombre_briefing" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Mes</label>
            <input class="form-control" type="text" id="elmes_briefing" readonly>
          </div>
          <div class="form-group ">
            <label class="control-label">Skill</label>
            <input class="form-control" type="text" id="elskill_briefing" readonly>
          </div>
        </div>

        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
          <button href="#!" class="btn btn-danger btn-raised btn-sm "><i class="zmdi zmdi-delete"></i> Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>