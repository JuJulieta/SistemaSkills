<!-- Scat Nombre Field -->
<div class="form-group">
    {!! Form::label('scat_nombre', 'Nombre ') !!}
    <p>{{ $subCategoria->scat_nombre }}</p>
</div>
<!-- Cat Nombre Field -->
<div class="form-group">
    {!! Form::label('cat_id', 'Categoría ') !!}
    <p>
        @foreach($lst_categorias as $categoria)
            @if ($categoria->cat_id == $subCategoria->cat_id)
                {{ $categoria->cat_nombre }}
            @endif
        @endforeach
    </p>
</div>
<!-- Scat Descripcion Field -->
<div class="form-group">
    {!! Form::label('scat_descripcion', 'Descripción ') !!}
    <p>{{ $subCategoria->scat_descripcion }}</p>
</div>



