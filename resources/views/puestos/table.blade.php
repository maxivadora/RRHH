<table class="table table-responsive" id="puestos-table">
    <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Depende de</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($puestos as $puestos)
        <tr>
            <td>{!! $puestos->nombre !!}</td>
            <td>{!! $puestos->descripcion !!}</td>
            @if ($puestos->dependeDe == null)
                <td><p> No depende de ninguna </p></td>
            @else
                <td>{!! $puestos->dependeDe->nombre !!}</td>
            @endif
            <td>
                {!! Form::open(['route' => ['puestos.destroy', $puestos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('puestos.show', [$puestos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('puestos.edit', [$puestos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>