<div class="table-responsive">
    <table class="table" id="cursoSkills-table">
        <thead>
            <tr>
                <th>Cur Id</th>
        <th>Skl Id</th>
        <th>Nvl Id</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cursoSkills as $cursoSkill)
            <tr>
                <td>{{ $cursoSkill->cur_id }}</td>
            <td>{{ $cursoSkill->skl_id }}</td>
            <td>{{ $cursoSkill->nvl_id }}</td>
                <td>
                    {!! Form::open(['route' => ['cursoSkills.destroy', $cursoSkill->crs_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cursoSkills.show', [$cursoSkill->crs_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cursoSkills.edit', [$cursoSkill->crs_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
