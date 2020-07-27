<table class="table table-hover table-bordered text-center" data-filtering="true">
	<thead class="thead-light">
	<tr>
		
		<th data-breakpoints="xs">Codigo</th>
		<th>Usuario</th>
		<th>QF</th>
		<th data-breakpoints="xs">Tipificador</th>
		<th data-breakpoints="xs sm">Tema</th>
		<th data-breakpoints="xs sm md">Observacion</th>
		<th data-type="html" data-breakpoints="xs sm md">Fecha</th>
	</tr>
	</thead>
	<tbody>

	<?php foreach($this->modelo-> Listar_auditria() as $r):?>
		<tr>
		 	<td><span id="codigo"><?=$r->cod_usuario?></span></td>
            <td><span id="user"><?=$r->nickname?></span></td>
            <td><span id="qf"><?=$r->qf?></span></td>
            <td><span id="numero_t"><?=$r->numero_t?></span></td>
            <td><span id="tema"><?=$r->tema?></span></td>
             <td><span id="Observacion"><?=$r->observacion?></span></td>
              <td><span id="Fecha"><?=$r->fecha?></span></td>

		</tr>
	<?php endforeach;?>
	</tbody>
</table>