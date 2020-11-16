<div class="table-responsive">
    <table class="table" id="consultors-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Línea de Servicio</th>
                <th>Nivel</th>
                <th>Cargo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($consultors as $consultor)
            <tr>
                <td>{{ $consultor->con_nombres }}  {{ $consultor->con_apellidos }}</td>
                <td>
                    @foreach($lst_linea as $linea)
                        @if($linea->lsv_id === $consultor->lsv_id)
                            {{$linea->lsv_nombre}}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($lst_niveles as $nivel)
                        @if($nivel->nvl_id === $consultor->nvl_id)
                            {{$nivel->nvl_nombre}}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($lst_cargo as $cargo)
                        @if($cargo->car_id === $consultor->car_id)
                            {{$cargo->car_nombre}}
                        @endif
                    @endforeach
                </td>
                <td>
                    {!! Form::open(['route' => ['consultors.destroy', $consultor->con_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('consultors.show', [$consultor->con_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('consultors.edit', [$consultor->con_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
