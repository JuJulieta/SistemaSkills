<!-- Con Id Field -->
<div class="form-group">
    {!! Form::label('con_id', 'Consultor:') !!}
    <p>
        @foreach($lst_consultores as $consultor)
            @if ($consultor->con_id == $skillsConsultores->con_id)
                {{ $consultor->con_nombres }} {{ $consultor->con_apellidos }}
            @endif
        @endforeach
    </p>
</div>

<!-- Skl Id Field -->
<div class="form-group">
    {!! Form::label('skl_id', 'Skill:') !!}
    <p>
        @foreach($lst_skills as $skill)
            @if ($skill->skl_id == $skillsConsultores->skl_id)
                {{ $skill->skl_nombre }}
            @endif
        @endforeach    
    </p>
</div>

<!-- Nvl Id Field -->
<div class="form-group">
    {!! Form::label('nvl_id', 'Nivel:') !!}
    <p>
        @foreach($lst_niveles as $nivel)
            @if ($nivel->nvl_id == $skillsConsultores->nvl_id)
                {{ $nivel->nvl_nombre }}
            @endif
        @endforeach    
    </p>
</div>

<!-- Csk Comentario Field -->
<div class="form-group">
    {!! Form::label('csk_comentario', 'Comentario:') !!}
    <p>{{ $skillsConsultores->csk_comentario }}</p>
</div>

