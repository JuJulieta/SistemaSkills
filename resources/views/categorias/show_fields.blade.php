<!-- Cat Nombre Field -->
<div class="form-group">
    {!! Form::label('cat_nombre', 'Nombre') !!}
    <p>{{ $categoria->cat_nombre }}</p>
</div>

<!-- Cat Descripcion Field -->
<div class="form-group">
    {!! Form::label('cat_descripcion', 'Descripción') !!}
    <p>{{ $categoria->cat_descripcion }}</p>
</div>
<!-- SubCat Asociadas Field -->
<div class="form-group ">
    {!! Form::label('SubCategorías') !!} 
    @foreach($lst_subCategorias as $subCategorias)

        <p>{{ $subCategorias->scat_nombre }}</p>

    @endforeach

</div>
