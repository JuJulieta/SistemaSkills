<!-- Con Nombres Field -->
<div class="form-group">
    {!! Form::label('con_nombres', 'Nombres') !!}
    <p>{{ $consultor->con_nombres }}</p>
</div>

<!-- Con Apellidos Field -->
<div class="form-group">
    {!! Form::label('con_apellidos', 'Apellidos') !!}
    <p>{{ $consultor->con_apellidos }}</p>
</div>

<!-- Con Comentarios Field -->
<div class="form-group">
    {!! Form::label('con_comentarios', 'Comentarios') !!}
    <p>{{ $consultor->con_comentarios }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    <p>{{ $consultor->email }}</p>
</div>

<!-- Lsv Id Field -->
<div class="form-group">
    {!! Form::label('lsv_id', 'Linea de Servicio') !!}
    <p>
        @foreach($lst_linea as $linea)
            @if($linea->lsv_id === $consultor->lsv_id)
                {{ $linea->lsv_nombre }}
            @endif
        @endforeach
    </p>
</div>

<!-- Nvl Id Field -->
<div class="form-group">
    {!! Form::label('nvl_id', 'Nivel') !!}
    <p>
        @foreach($lst_niveles as $nivel)
            @if($nivel->nvl_id === $consultor->nvl_id)
                {{ $nivel->nvl_nombre }}
            @endif
        @endforeach
    </p>
</div>

<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Cargo') !!}
    <p>
        @foreach($lst_cargo as $cargo)
            @if($cargo->car_id === $consultor->car_id)
                {{ $cargo->car_nombre }}
            @endif
        @endforeach
    </p>
</div>

