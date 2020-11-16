<!-- Per Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_nombre', 'Per Nombre:') !!}
    {!! Form::text('per_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]) !!}
</div>

<!-- Per Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('per_descripcion', 'Per Descripcion:') !!}
    {!! Form::textarea('per_descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Car Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_id', 'Car Id:') !!}
    {!! Form::number('car_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Lsv Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lsv_id', 'Lsv Id:') !!}
    {!! Form::number('lsv_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nvl Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nvl_id', 'Nvl Id:') !!}
    {!! Form::number('nvl_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('perfils.index') }}" class="btn btn-default">Cancel</a>
</div>
