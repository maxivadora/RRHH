@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Puestos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'puestos.store']) !!}

                        @include('puestos.fields')
                        @include('puestos.create.depende_de_selector')


                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('puestos.index') !!}" class="btn btn-default">Cancel</a>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
