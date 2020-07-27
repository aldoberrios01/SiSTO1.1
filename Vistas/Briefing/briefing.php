<div class="container-fluid">
  <div class="page-header">
    <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Resgistros de Briefing</h1>
  </div>
  <p class="lead">Registra y Enlista Briefings </p>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <ul class="nav nav-tabs" style="margin-bottom: 15px;">
        <li class="active"><a href="#new" data-toggle="tab">Asistencia Briefing</a></li>
        <li><a href="#list" data-toggle="tab">Listar Briefing</a></li>
        <li><a href="?c=briefing&a=Vista_Briefing_Avanzado">Busqueda Avanzada</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="new">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <form method="POST" action="?c=briefing&a=Insertar_Briefing">
                  <!-- action="?c=briefing&a=Insertar_Briefing" -->
                  <div class="card rounded">
                    <div class="card-body">
                      <div class=" justify-content-center text-center">
                        <div class="btn-group-vertical border-right pr-lg-5" role="group" aria-label="Vertical button group">
                          <label>Fecha Briefing</label>
                          <input class="form-control" type="date" name="fechas" id="fechas" required="">
                        </div>
                        <div class="btn-group-vertical border-left pr-lg-5 pl-lg-5" role="group" aria-label="Vertical button group">
                          <label>Estado</label>
                          <select class="form-control" name="idestados" id="idestados" required="">
                            <?php
                            foreach ($this->modelo->Listar_Estados() as $r) : ?>
                              <option selected value=<?= $r->idestados ?>> <?= $r->nombre ?> </option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class=" justify-content-center text-center">
                      <div class="typeahead__container">
                        <div class="typeahead__field">
                          <div class="typeahead__query">
                            <input class="js-typeahead" id="cod_usuario" name="cod_usuario" autocomplete="off" placeholder="Digite su busqueda" require="">
                            <input type="hidden" name="ids" id="ids">
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="text-center">
                      <button href="#!" id="btnenviar" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                    </p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="list">
          <div class="table-responsive">
            <table id="table_briefing" class="table table-hover text-center" data-filtering="true">
              <thead class="thead-dark">
                <tr>
                  <th class="text-center">ID</th>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Login</th>
                  <th class="text-center">Skill Area</th>
                  <th class="text-center">Estado</th>
                  <th class="text-center">Fecha</th>
                  <th class="text-center">Actualizar</th>
                  <th class="text-center">Borrar</th>
                </tr>
              </thead>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>