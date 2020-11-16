<div class="table-responsive">
    <table class="table" id="skills-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Subcategoría</th>
                <th>Categoría</th>
                <th>Acción</th>

            </tr>
        </thead>
        <tbody>
        @foreach($skills as $skills)
            <tr>
                <td>{{ $skills->skl_nombre }}</td>
                <td>{{ $skills->skl_descripcion }}</td>
                <td>
                    @foreach($lst_subCategorias as $subCategoria)
                        @if ($subCategoria->scat_id == $skills->scat_id)
                            {{ $subCategoria->scat_nombre }}
                        @endif
                    @endforeach
                </td>
                <td>       
                    @foreach($lst_subCategorias as $subCategoria)
                        @if ($subCategoria->scat_id == $skills->scat_id)
                            @foreach($lst_categorias as $categoria)
                                @if ($categoria->cat_id == $subCategoria->cat_id)
                                    {{$categoria->cat_nombre }}
                                @endif
                            @endforeach
                        @endif
                    @endforeach          

                </td>

                <td>
                    {!! Form::open(['route' => ['skills.destroy', $skills->skl_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('skills.show', [$skills->skl_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('skills.edit', [$skills->skl_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
