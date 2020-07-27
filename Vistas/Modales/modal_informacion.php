<!-- Modal Actualizar Informacion -->

<div class="modal fade" id="ModalActualizarInformacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Actualizar La Informacion ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="?c=informacion&a=Actuliazar_informacion" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group label-floating">
            <label class="control-label">Id_informacion</label>
            <input class="form-control" type="text" name="id_informacion" id="id_informacion" readonly>
          </div>



          <div class="form-group label-floating">
            <label class="control-label">Titulo</label>
            <input class="form-control" type="text" name="titulo" id="titulo">
          </div>
          <div class="form-group">
            <label class="control-label">Fecha</label>
            <input class="form-control" type="date" name="fecha" id="fecha">
          </div>
          <div class="form-group label-floating">
            <label class="control-label">Descripcion:</label>
            <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
          </div>




          <div class="form-group">
            <label class="control-label">Imagen:</label>
            <div>
              <input type="text" readonly="" class="form-control" placeholder="Browse..." name="imagen1">
              <input type="file" name="imagen">
            </div>
          </div>



        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-info btn-raised btn-sm actualizar_info"><i class="zmdi zmdi-floppy"></i> Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Eliminar  Informacion -->

<div class="modal fade" id="ModalEliminarInformacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">¿ Esta Seguro Eliminar la Informacion ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="?c=informacion&a=Eliminar_informacion" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group label-floating">
            <label class="control-label">Id_informacion</label>
            <input class="form-control" type="text" name="id_informacion" id="elid_informacion" readonly>
          </div>



          <div class="form-group label-floating">
            <label class="control-label">Titulo</label>
            <input class="form-control" type="text" name="titulo" id="eltitulo" readonly>
          </div>
          <div class="form-group">
            <label class="control-label">Fecha</label>
            <input class="form-control" type="date" name="fecha" id="elfecha" readonly>
          </div>





          <div class="form-group">
            <label class="control-label">Imagen:</label>
            <div>
              <img class="card-img-top " src="<?= $r->Imangen ?>" alt="Card image cap" id="elimagen">
            </div>
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