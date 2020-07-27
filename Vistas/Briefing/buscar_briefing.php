<div class="container-fluid">
  <div class="col-xs-12">
    <ul class="nav nav-tabs justify-content-center" style="margin-bottom: 15px;">
      <li class="active"><a href="#search" data-toggle="tab"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i>Busqueda Avanzada</a></li>
      <li><a href="#graphics" data-toggle="tab"><i class="zmdi zmdi-blur-linear zmdi-hc-fw"></i>Graficos</a></li>
    </ul>
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="search">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 ">
              <form method="GET" action="?c=briefing&a=">
                <!-- action="?c=briefing&a=Insertar_Briefing" -->
                <div class="card rounded">
                  <div class="card-group">
                    <div class="card">
                      <div class="card-body text-center justify-content-center align-content-center">
                        <div class="col col-sm-4 pl-2">
                          <h4 class="card-title">Fecha</h4>
                          <input class="form-control-sm border border-dark" type="date" name="fecha1" id="fecha1">
                        </div>
                        <div class="col col-sm-4">
                          <h4 class="card-title">Skill Area</h4>
                          <select class="form-control-sm border-dark" name="idskill_buscar" id="idskill_buscar" required="">
                            <?php
                            foreach ($this->modelo->Listar_Skills() as $r) : ?>
                              <option selected value=<?= $r->idskills ?>> <?= $r->nombre ?> </option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="col col-sm-4">
                          <h4 class="card-title">Estado</h4>
                          <select class="form-control-sm border-dark" name="idestados_buscar" id="idestados_buscar" required="">
                            <?php
                            foreach ($this->modelo->Listar_Estados() as $r) : ?>
                              <option selected value=<?= $r->idestados ?>> <?= $r->nombre ?> </option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="row justify-content-center">
                          <h4 class="card-title">Login</h4>
                          <div class="input-group mb-1">
                            <div class=" justify-content-center text-center">
                              <div class="typeahead__container ">
                                <div class="typeahead__field ">
                                  <div class="typeahead__query ">
                                    <input class="js-typeahead border-dark" id="cod_usuario_buscar" name="cod_usuario_buscar" autocomplete="off" placeholder="Digite su busqueda" require="">
                                  </div>
                                  <button class="btn btn-success bg-dark border-dark" id="buscar1" type="button"><i class="zmdi zmdi-search zmdi-hc-fw"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card text-center">
                      <div class="card-body">
                        <div class="row">
                          <div class="col col-sm-6">
                            <h4 class="card-title">Fecha Inicio</h4>
                            <input class="form-control-sm pr-1 border border-dark" type="date" name="fecha2" id="fecha2">
                          </div>
                          <div class="col col-sm-6">
                            <h4 class="card-title">Fecha Fin</h4>
                            <input class="form-control-sm border border-dark" type="date" name="fecha3" id="fecha3">
                          </div>
                        </div>
                        <div class="row">
                          <div class=" col col-sm-12 justify-content-center">
                            <h4 class="card-title">Estado</h4>
                            <div class="input-group">
                              <select class="form-control-sm border-dark" name="idestados_buscar2" id="idestados_buscar2" required="">
                                <?php
                                foreach ($this->modelo->Listar_Estados() as $r) : ?>
                                  <option selected value=<?= $r->idestados ?>> <?= $r->nombre ?> </option>
                                <?php endforeach; ?>
                              </select>
                              <button class="btn-sm btn-success bg-dark border-dark" type="button" id="buscar2"><i class="zmdi zmdi-search zmdi-hc-fw"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </form>
          </div>
          <div class="row">
          
            <div id="resultados">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="graphics">
    </div>
  </div>
</div>
</div>