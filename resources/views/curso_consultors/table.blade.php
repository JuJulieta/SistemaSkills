<div class="table-responsive">
    <table class="table" id="cursoConsultors-table">
        <thead>
            <tr>
                <th>Cur Id</th>
        <th>Con Id</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cursoConsultors as $cursoConsultor)
            <tr>
                <td>{{ $cursoConsultor->cur_id }}</td>
            <td>{{ $cursoConsultor->con_id }}</td>
                <td>
                    {!! Form::open(['route' => ['cursoConsultors.destroy', $cursoConsultor->cuc_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cursoConsultors.show', [$cursoConsultor->cuc_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cursoConsultors.edit', [$cursoConsultor->cuc_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
