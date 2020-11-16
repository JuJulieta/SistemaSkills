@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Curso Consultor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cursoConsultor, ['route' => ['cursoConsultors.update', $cursoConsultor->cuc_id], 'method' => 'patch']) !!}

                        @include('curso_consultors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection