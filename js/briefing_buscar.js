$(document).ready(function(){
      $('#cod_usuario_buscar').typeahead({
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
        },        
        templateValue: "{{nickname}}",
        emptyTemplate:"No hay resultados",
        source: {
            users:{ //nombre para referir a la data que se va retornar
                display: ["nickname","cod_usuario"], //nombres a mostrar para buscar
                ajax:function(query){
                    return {
                        type: 'GET',
                        url: './Modelos/briefing.php',
                        path: "data.users", //se usa path para referir a que datos esta retornando
                        data:{q:"{{query}}"}
                    }
                }
            }
        },
        debug: true
    });

    $('#buscar1').click(function(){
        console.log("prueba");
        alert("prueba");
    });
    $('#buscar2').click(function(){
        alert("prueba2");
    });
})