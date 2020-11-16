
<!-- Con Comentarios Field -->
<div class="form-group col-sm-12 ">
    {!! Form::label('con_comentarios', 'Comentarios') !!}
    {!! Form::textarea('con_comentarios', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('consultors.index') }}" class="btn btn-default">Cancelar</a>
</div>


