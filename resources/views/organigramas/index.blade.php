@extends('layouts.app')

@section('content')
    <h1>Organigrama</h1>
    <div id="chart-container"></div>
    <div id="infoPuesto"></div>
@endsection

@section('script')
    <script src="js/jquery.orgchart.js"></script>
    <script src="js/underscore.js"></script> 
    <link rel="stylesheet" href="css/jquery.orgchart.css">
    <script type="text/javascript">
    'use strict';

    $(document).ready(function(){

        $.get('/initData',function(response){

            var datasource = _.pick( _.findWhere(response, { id: 2 }), 'id', 'nombre', 'children')
            var children = function(nodo){
                return _.where(response, { depende_de: nodo.id })
            }

            var asociarHijos = function(nodo){
                var hijosCompletos = children(nodo);
                var hijosLimpiados = [];
                _.each(hijosCompletos, function(hijoCompleto){
                    hijosLimpiados.push(_.pick(hijoCompleto, 'id', 'nombre', 'children'));
                });
                nodo.children = hijosLimpiados;
                _.each(nodo.children, function(hijo){
                    asociarHijos(hijo)
                });
            }
            asociarHijos(datasource);

            // graficar
            $('#chart-container').orgchart({
                'data' : datasource,
                'depth': 3,
                'nodeTitle': 'nombre',
                'nodeId': 'id',
                'createNode': function($node, data) {
                    $node.on('click', function(){
                        $.get('/'+ data.id +'/empleados', function(response){
                            $('#infoPuesto').empty();
                            var title = "<h3>Empleados del Departamento "+ data.nombre +"</h3>"
                            $('#infoPuesto').prepend(title);
                            for (var i = 0; i < response.length; i++) {
                                var linkShow = $('<a/>', {
                                    'href': '/empleados/'+response[i].id
                                })
                                var empleado = "<li>"+ response[i].apellido+" , "+ response[i].nombre +"</li>"
                                $('#infoPuesto').append(linkShow.append(empleado))
                            }
                        })
                    })
                }
            });
        });

    })
</script>
@endsection
