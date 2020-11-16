<!-- Cur Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cur_nombre', 'Nombre') !!}
    {!! Form::text('cur_nombre', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Cur Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cur_descripcion', 'Descripción') !!}
    {!! Form::text('cur_descripcion', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cursos.index') }}" class="btn btn-default">Cancelar</a>
</div>
