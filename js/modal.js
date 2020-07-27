$(document).ready(function(){

	tipo=$("#tipo_usuario").text();

	if(tipo!="Administrador")
	{
		$("#informacion").hide();
		$("#musuario").hide();
		$("#btn_edit").hide();
		$("#btn_delete").hide();
		//$("#sm_reporte").hide();
		//$("#sm_auditoria").hide();



	}
});



function agregaform(datos){

	d=datos.split('||');

	$('#edcodigo').val(d[0]);
	$('#eduser').val(d[5]);
	$('#edpass').val(d[6]);
	$('#edtipo_usuario').val(d[7]);
	//$('#edidskill').val(d[1]+"-"+d[8]);
	//$('#edcod_categoria').val(d[2]+"-"+d[9]);
	$('#edrol').val(d[10]);
	
}


function rellanar_eliminar(datos){

	d=datos.split('||');

	$('#elcodigo').val(d[0]);
	$('#eluser').val(d[3]);
	$('#elpass').val(d[4]);
	$('#elcategoria').val(d[5]);
	//$('#telefonou').val(d[4]);
}

function agregarinformacion(datos)
{
	//alert(datos);
	//alert(datos);
	d=datos.split('||');
	$('#id_informacion').val(d[0]);
	$('#titulo').val(d[1]);
	$('#imagen').val(d[2]);
	$('#fecha').val(d[3]);
	$('#descripcion').val(d[4]);

}

function EliminarInformacion(datos)
{
	d=datos.split('||');
	$('#elid_informacion').val(d[0]);
	$('#eltitulo').val(d[1]);
	$('#elimagen').attr("src",d[2]);
	$('#elfecha').val(d[3]);
	$('#eldescripcion').val(d[4]);
}


function Servicio(servi)
{
	$("#serv").text(servi);
}

//modal para estados
function agregaform_estados(datos){

	d=datos.split('||');
	$('#acid_estado').val(d[0]);
	$('#acnom').val(d[1]);
	//se debe eliminar el caracter º por saltos de lineas 
	//de todas las coincidencias
	anexar_saltos=d[2].replace(new RegExp("º","gi"),"\r\n");
	$('#accomenta').val(anexar_saltos);
}


function rellanar_eliminar_estados(datos){

	d=datos.split('||');

	$('#elidestados').val(d[0]);
	$('#elnombre').val(d[1]);
	//se debe eliminar el caracter º por saltos de lineas 
	//de todas las coincidencias
	anexar_saltos=d[2].replace(new RegExp("º","gi"),"\r\n");
	$('#elcomenta').val(anexar_saltos);
}

function agregaform_briefing(datos){

	d=datos.split('||');
	$('#acid_briefing').val(d[0]);
	$('#acnombre_briefing').val(d[1]);
	$('#acmes_briefing').val(d[2]);
	$('#acskill_briefing').val(d[3]); 
}


function rellenar_eliminar_briefing(datos){

	d=datos.split('||');

	$('#elid_briefing').val(d[0]);
	$('#elnombre_briefing').val(d[1]);
	$('#elmes_briefing').val(d[2]);
	$('#elskill_briefing').val(d[3]);
}
function agregaform_skills(datos){
	d=datos.split('||');
	$('#acidskills').val(d[0]);
	$('#acnombre_skills').val(d[1]);
}
function rellenar_eliminar_skills(datos){
	d=datos.split('||');
	$('#elidskills').val(d[0]);
	$('#elnombre_skills').val(d[1]);
}
function agregaform_categoria(datos){
	d=datos.split('||');
	$('#acidcategoria').val(d[0]);
	$('#acnombre_categoria').val(d[1]);
}
function rellenar_eliminar_categoria(datos){
	d=datos.split('||');
	$('#elidcategoria').val(d[0]);
	$('#elnombre_categoria').val(d[1]);
}

function mostraiamege(datos)
{
	var imagen="";
	if(datos=="")
	{
		imagen="assets/Imagenes/reportes/no_disponible.png"
	}

	else
	{
		imagen=datos;
	}

	



	swal({
  		
 			 imageUrl: imagen
		});
}