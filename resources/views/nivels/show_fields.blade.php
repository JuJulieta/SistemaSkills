<!-- Nvl Nombre Field -->
<div class="form-group">
    {!! Form::label('nvl_nombre', 'Nombre') !!}
    <p>{{ $nivel->nvl_nombre }}</p>
</div>

<!-- Nvl Descripcion Field -->
<div class="form-group">
    {!! Form::label('nvl_descripcion', 'Descripción') !!}
    <p>{{ $nivel->nvl_descripcion }}</p>
</div>

<!-- Nvl Valor Field -->
<div class="form-group">
    {!! Form::label('nvl_valor', 'Porcentaje') !!}
    <p>{{ $nivel->nvl_valor }} %</p>
</div>

