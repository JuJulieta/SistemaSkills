@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mi Perfil
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($user, ['route' => ['profile.update', $user->id], 'method' => 'patch']) !!}
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly' => true]) !!}
                    </div>

                    <!-- Avatar Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('avatar', 'Avatar') !!}
                        {!! Form::text('avatar', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                    <!-- Avatar Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('avatar', 'Roles') !!}
                        @foreach($user->roles as $role)
                            <li>{{ $role->name }}</li>
                        @endforeach
                    </div>                    


                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Actualizar Perfil', ['class' => 'btn btn-primary']) !!}
                    </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection