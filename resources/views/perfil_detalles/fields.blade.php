<!-- Per Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_id', 'Per Id:') !!}
    {!! Form::number('per_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Skl Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skl_id', 'Skl Id:') !!}
    {!! Form::number('skl_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nvl Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nvl_id', 'Nvl Id:') !!}
    {!! Form::number('nvl_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Psk Comentario Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('psk_comentario', 'Psk Comentario:') !!}
    {!! Form::textarea('psk_comentario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('perfilDetalles.index') }}" class="btn btn-default">Cancel</a>
</div>
