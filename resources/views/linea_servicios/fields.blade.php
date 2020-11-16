<!-- Lsv Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lsv_nombre', 'Nombre') !!}
    {!! Form::text('lsv_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('lineaServicios.index') }}" class="btn btn-default">Cancelar</a>
</div>
