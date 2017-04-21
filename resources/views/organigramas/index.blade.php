@extends('layouts.app')

@section('content')
    <h1>Organigrama</h1>
    <div id="chart-container"></div>
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
                'nodeId': 'id'
            });
        });

    })
</script>
@endsection
