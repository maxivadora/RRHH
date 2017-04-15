@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Empleados
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($empleados, ['route' => ['empleados.update', $empleados->id], 'method' => 'patch']) !!}

                        @include('empleados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection