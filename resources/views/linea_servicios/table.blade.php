<div class="table-responsive">
    <table class="table" id="lineaServicios-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lineaServicios as $lineaServicio)
            <tr>
                <td>{{ $lineaServicio->lsv_nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['lineaServicios.destroy', $lineaServicio->lsv_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lineaServicios.show', [$lineaServicio->lsv_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('lineaServicios.edit', [$lineaServicio->lsv_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
