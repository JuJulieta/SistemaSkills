<div class="table-responsive">
    <table class="table" id="cargos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cargos as $cargo)
            <tr>
                <td>{{ $cargo->car_nombre }}</td>
                <td>{{ $cargo->car_descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['cargos.destroy', $cargo->car_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cargos.show', [$cargo->car_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cargos.edit', [$cargo->car_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
