<div class="table-responsive">
    <table class="table" id="perfilDetalles-table">
        <thead>
            <tr>
                <th>Per Id</th>
        <th>Skl Id</th>
        <th>Nvl Id</th>
        <th>Psk Comentario</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($perfilDetalles as $perfilDetalle)
            <tr>
                <td>{{ $perfilDetalle->per_id }}</td>
            <td>{{ $perfilDetalle->skl_id }}</td>
            <td>{{ $perfilDetalle->nvl_id }}</td>
            <td>{{ $perfilDetalle->psk_comentario }}</td>
                <td>
                    {!! Form::open(['route' => ['perfilDetalles.destroy', $perfilDetalle->pde_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('perfilDetalles.show', [$perfilDetalle->pde_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('perfilDetalles.edit', [$perfilDetalle->pde_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
