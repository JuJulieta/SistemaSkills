@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Skills Consultores
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($skillsConsultores, ['route' => ['skillsConsultores.update', $skillsConsultores->csk_id], 'method' => 'patch']) !!}

                    <!-- Con Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('con_id', 'Consultor:') !!}
                        {!! Form::select('con_id', $lst_consultores, null, ['class' => 'form-control cbx_select2', 'placeholder' => '... Seleccione ...']) !!}
                    </div>
                    <!-- Skl Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('skl_id', 'Skill:') !!}
                        {!! Form::select('skl_id', $lst_skills, null, ['class' => 'form-control cbx_select2', 'placeholder' => '... Seleccione ...'] ) !!}
                    </div>

                    <!-- Nvl Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('nvl_id', 'Nivel:') !!} </br>
                        @foreach($lst_niveles as $nivel)
                            @if ($nivel->nvl_id == $skillsConsultores->nvl_id)
                                <input class="field" checked="checked" 
                                    name="nvl_id" value="{{ $nivel->nvl_id }}" type="radio"> {{ $nivel->nvl_nombre }}
                            @else
                                <input class="field" name="nvl_id" value="{{ $nivel->nvl_id }}" type="radio"> {{ $nivel->nvl_nombre }}
                            @endif        
                        @endforeach
                    </div>

                    <!-- Csk Comentario Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('csk_comentario', 'Comentario:') !!}
                        {!! Form::textarea('csk_comentario', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('skillsConsultores.index') }}" class="btn btn-default">Cancelar</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection