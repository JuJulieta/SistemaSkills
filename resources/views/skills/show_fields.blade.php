<!-- Skl Nombre Field -->
<div class="form-group">
    {!! Form::label('skl_nombre', 'Nombre') !!}
    <p>{{ $skills->skl_nombre }}</p>
</div>

<!-- Skl Descripcion Field -->
<div class="form-group">
    {!! Form::label('skl_descripcion', 'Descripción') !!}
    <p>{{ $skills->skl_descripcion }}</p>
</div>

<!-- Scat Id Field -->
<div class="form-group">
    {!! Form::label('scat_id', 'Subcategoría') !!}
    <p>
    @foreach($lst_subCategorias as $subCategoria)
        @if ($subCategoria->scat_id == $skills->scat_id)
            {{ $subCategoria->scat_nombre }}
        @endif
    @endforeach
    </p>
</div>

