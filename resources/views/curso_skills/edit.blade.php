@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Curso Skill
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cursoSkill, ['route' => ['cursoSkills.update', $cursoSkill->crs_id], 'method' => 'patch']) !!}

                        @include('curso_skills.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection