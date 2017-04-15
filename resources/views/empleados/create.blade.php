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
                    {!! Form::open(['route' => 'empleados.store']) !!}

                        @include('empleados.fields')
                        @include('empleados.create.fecha_nacimiento_selector')
                        @include('empleados.create.puestos_selector')

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('empleados.index') !!}" class="btn btn-default">Cancel</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
