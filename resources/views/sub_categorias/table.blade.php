<div class="table-responsive">
    <table class="table" id="subCategorias-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subCategorias as $subCategoria)
            <tr>
                <td>{{ $subCategoria->scat_nombre }}</td>
                <td> @foreach($lst_categorias as $categoria)
                        @if ($categoria->cat_id == $subCategoria->cat_id)
                            {{ $categoria->cat_nombre }}
                        @endif
                     @endforeach
                </td>

                <td>
                    {!! Form::open(['route' => ['subCategorias.destroy', $subCategoria->scat_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subCategorias.show', [$subCategoria->scat_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('subCategorias.edit', [$subCategoria->scat_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
