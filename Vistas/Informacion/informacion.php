 <div class="container-fluid">
     <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-9 center-block">

        <h1 class="my-4"> <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Informacion de  <small ><?php echo $_SESSION["servicio"]?> </small></h1>

        

        <!-- Blog Post -->

          <?php foreach($this->modelo->Listar_Tipo($_SESSION["servicio"]) as $r):?>
            <?php 
                
                $datos= $r->Codigo."||".$r->titulo ."||". $r->Imangen ."||". $r->fecha; 
                
            ?>
            
              <div class="card mb-4">
                <div class="card-body">
                  <?php
                 
                      if($_SESSION["tipo_usuario"]=="Administrador"):?>

                        <a href="#!" id="btn_edit" class="btn btn-success btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalActualizarInformacion" onclick="agregarinformacion('<?php echo $datos ?>')" ><i class="zmdi zmdi-refresh"></i></a>
                        <a href="#!"id="btn_delete" class="btn btn-danger btn-raised btn-xs edit" data-toggle="modal" data-target="#ModalEliminarInformacion"  onclick="EliminarInformacion('<?php echo $datos ?>')"><i class="zmdi zmdi-delete"></i></a>
                   <?php endif ?>
                  
                  <h2 class="card-title bg-primary"id="ititulo"><center><?=$r->titulo?></center></h2>
                  <div class="card-text" id="idescripcion"><?=nl2br($r->descripcion)?>   </div>


                  <img class="card-img-top " src="<?=$r->Imangen?>" alt="Card image cap" id="iimagen">
            
                </div>
                <div class="card-footer text-muted">
                  <samp id="ifecha"><?=$r->fecha?></samp>

                  
                </div>
            </div>
          <?php endforeach;?>

       

        <!-- Pagination -->
        

      </div>
     </div>
 </div>
 