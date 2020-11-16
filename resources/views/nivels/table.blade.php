<div class="table-responsive">
    <table class="table" id="nivels-table">
        <thead>
            <tr>
                <th> Nombre</th>
        <th> Descripcion</th>
        <th> Porcentaje</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($nivels as $nivel)
            <tr>
                <td>{{ $nivel->nvl_nombre }}</td>
            <td>{{ $nivel->nvl_descripcion }}</td>
            <td>{{ $nivel->nvl_valor }} %</td>
                <td>
                    {!! Form::open(['route' => ['nivels.destroy', $nivel->nvl_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('nivels.show', [$nivel->nvl_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('nivels.edit', [$nivel->nvl_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
