<!-- Car Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_nombre', 'Nombre') !!}
    {!! Form::text('car_nombre', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Car Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('car_descripcion', 'Descripción') !!}
    {!! Form::textarea('car_descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cargos.index') }}" class="btn btn-default">Cancelar</a>
</div>
