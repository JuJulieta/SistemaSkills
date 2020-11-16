<!-- Scat Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scat_nombre', 'Nombre') !!}
    {!! Form::text('scat_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]) !!}
</div>

<!-- Scat Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('scat_descripcion', 'Descripción') !!}
    {!! Form::textarea('scat_descripcion', null, ['class' => 'form-control']) !!}
</div>

