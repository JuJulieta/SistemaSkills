<!-- Cur Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cur_id', 'Cur Id:') !!}
    {!! Form::number('cur_id', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cursoSkills.index') }}" class="btn btn-default">Cancel</a>
</div>
