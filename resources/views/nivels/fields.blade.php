<!-- Nvl Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nvl_nombre', 'Nombre') !!}
    {!! Form::text('nvl_nombre', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Nvl Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nvl_descripcion', 'Descripción') !!}
    {!! Form::textarea('nvl_descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Nvl Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nvl_valor', 'Porcentaje') !!}
    {!! Form::number('nvl_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('nivels.index') }}" class="btn btn-default">Cancelar</a>
</div>
