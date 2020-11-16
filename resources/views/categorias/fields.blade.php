<!-- Cat Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cat_nombre', 'Nombre') !!}
    {!! Form::text('cat_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]) !!}
</div>

<!-- Cat Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cat_descripcion', 'Descripción') !!}
    {!! Form::textarea('cat_descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categorias.index') }}" class="btn btn-default">Cancelar</a>
</div>
