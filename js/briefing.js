$(document).ready(function() {
    var ids=new Array();
    var idestados=document.getElementById('idestados').value;
   $('#cod_usuario').typeahead({
        order: "asc",
        hint:true,
        searchOnFocus: true,
        minLength:1,
        searchOnFocus: true,
        blurOnTab: false,
        dynamic: true,
        delay: 500,
        template: function(query,item){
            var color = "#777";
            return '<i class="zmdi zmdi-account zmdi-hc-fw"></i>' +
            '<span >{{nickname}} <small style="color: ' + color + ';"></small></span>'+
            '<span >({{cod_usuario}})</span>'
        }, //agregar el multi select para usar el tag
        multiselect:{
            matchOn:["cod_usuario"],
            cancelOnBackspace: true, //se habilita para poder eliminar los anteriores
            callback: { //este callback es cuando da la tecla backspace o cancel o delete
               onCancel(node, item, event){
                    //console.log(item.cod_usuario);
                    //buscar en el array el item eliminado y quitarlo del array
                    var posicion=ids.indexOf(item.cod_usuario);
                    if(posicion!==-1){
                        ids.splice(posicion,1);
                    }
                   // console.log(ids);
                }
            },
        },
        templateValue: "{{nickname}}",
        emptyTemplate:"No hay resultados",
        source: {
            users:{ //nombre para referir a la data que se va retornar
                display: ["nickname","cod_usuario"], //nombres a mostrar para buscar
/*                 data: [{  //codigo por defecto para mostrar
                    "cod_usuario":290,
                    "nickname":"juliov.lopez"
                }], */
                ajax:function(query){
                    return {
                        type: 'GET',
                        url: './Modelos/briefing.php',
                        path: "data.users", //se usa path para referir a que datos esta retornando
                        data:{q:"{{query}}"}, //q: variable que se pasa por get y query es el valor tecleado
                        /* callback:{ //ejemplo para retornar si todo esta ok de la base de datos
                            done: function(data){
                                console.log(data);
                                return data;
                            }
                        } */
                    }
                }
            }
        },
        callback: {
            onClick: function (node, a, item, event) {
                console.log(item.cod_usuario);
                // You can do a simple window.location of the item.href
               // alert(JSON.stringify(item)); //muestra mensaje en alert de todo el matchkey
               ids.push(item.cod_usuario); //agregar al array cuando lo seleccionen
            }
        },
        debug: true
    });
    //metodo para obtener el idestados cuando se seleccione otro estado
    $('select#idestados').on('change',function(){
        idestados=$(this).val();
    });
    
    $('#btnenviar').click(function(){
        var fecha=document.getElementById('fechas').value;    
        var hides;
        for(i=0;i<ids.length;i++){
            if(i==0)
                hides=ids[i];
            else
                hides=hides+"/"+ids[i];
            console.log(hides);
        }
        document.getElementById('ids').value=hides; //obtener los id enviados
    });
  $('#table_briefing').dataTable({
        "processing": true,
        "serverSide": true,
        ajax:{
            url: '/api/data',
            dataFilter: function(data){
                var json = jQuery.parseJSON( data );
                json.recordsTotal = json.total;
                json.recordsFiltered = json.total;
                json.data = json.list;
     
                return JSON.stringify( json ); //
        }
    }
  });
});


/*
Primera version funcional

  $("#logins").on("keyup", function() { 
        var value = $(this).val().toLowerCase(); 
        $.ajax({
            type: 'GET',
            data:{value:value},
            url: './Modelos/briefing.php',
            success:function(response){
               var objs=JSON.parse(response);
               objs.forEach(obj=>{
                   console.log(obj.nickname);
                   $("#resultados").html(obj.nickname);
                });
            }
        });
    }); 

*/