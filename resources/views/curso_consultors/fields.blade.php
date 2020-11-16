<!-- Cur Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cur_id', 'Cur Id:') !!}
    {!! Form::number('cur_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Con Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('con_id', 'Con Id:') !!}
    {!! Form::number('con_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cursoConsultors.index') }}" class="btn btn-default">Cancel</a>
</div>
