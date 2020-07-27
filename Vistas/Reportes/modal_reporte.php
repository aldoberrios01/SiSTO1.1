<div class="modal fade" id="ModalBuscarfecha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese el  Rango  de  fecha a Buscar </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <form method="POST" action="?c=reportes&a=Listar_fecha">
        <div class="modal-body">
                 <div class="form-group">
                        <label class="control-label">Fecha de Inicio:</label>
                        <input class="form-control" type="date" name="fecha_incio" id="fecha_incio">
        </div>

        <div class="modal-body">
                 <div class="form-group">
                    <label class="control-label">Fecha de Final:</label>
                    <input class="form-control" type="date" name="fecha_final" id="fecha_final">
                  </div>
           </div>
        <div class="modal-footer ">
          <button type="button" class="btn  btn-danger btn-raised btn-sm" data-dismiss="modal"><i class="zmdi zmdi-close-circle"></i>Close</button>
          <button  type="submit" class="btn btn-info btn-raised btn-sm actualizar"><i class="zmdi zmdi-search"></i> Buscar</button>
        </div>
      </form>
    </div>
  </div>
</div>