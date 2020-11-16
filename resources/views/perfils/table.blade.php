<div class="table-responsive">
    <table class="table" id="perfils-table">
        <thead>
            <tr>
                <th>Per Nombre</th>
        <th>Per Descripcion</th>
        <th>Car Id</th>
        <th>Lsv Id</th>
        <th>Nvl Id</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($perfils as $perfil)
            <tr>
                <td>{{ $perfil->per_nombre }}</td>
            <td>{{ $perfil->per_descripcion }}</td>
            <td>{{ $perfil->car_id }}</td>
            <td>{{ $perfil->lsv_id }}</td>
            <td>{{ $perfil->nvl_id }}</td>
                <td>
                    {!! Form::open(['route' => ['perfils.destroy', $perfil->per_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('perfils.show', [$perfil->per_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('perfils.edit', [$perfil->per_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
