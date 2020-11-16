<!-- Skl Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skl_nombre', 'Nombre') !!}
    {!! Form::text('skl_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]) !!}
</div>

<!-- Skl Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('skl_descripcion', 'Descripción') !!}
    {!! Form::textarea('skl_descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Scat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scat_id', 'Subcategoría') !!}
    {!! Form::number('scat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('skills.index') }}" class="btn btn-default">Cancel</a>
</div>
