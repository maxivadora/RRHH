<table class="table table-responsive" id="empleados-table">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha Nacimiento</th>
        <th>Legajo</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Puesto de Trabajo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($empleados as $empleados)
        <tr>
            <td>{!! $empleados->nombre !!}</td>
            <td>{!! $empleados->apellido !!}</td>
            <td>{!! $empleados->fecha_nacimiento !!}</td>
            <td>{!! $empleados->legajo !!}</td>
            <td>{!! $empleados->telefono !!}</td>
            <td>{!! $empleados->direccion !!}</td>
            <td>{!! $empleados->puesto->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['empleados.destroy', $empleados->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empleados.show', [$empleados->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empleados.edit', [$empleados->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>