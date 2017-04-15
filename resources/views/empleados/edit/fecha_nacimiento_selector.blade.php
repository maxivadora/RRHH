<!-- Fecha Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}
    {!! Form::date('fecha_nacimiento', $empleados->fecha_nacimiento->format('Y-m-d'), ['class' => 'form-control']) !!}
</div>