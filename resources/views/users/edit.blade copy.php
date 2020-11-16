@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuario
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">


                   {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', 'Nombre:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>


                    <!-- Roles Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('role[]', 'Roles:') !!} <br />
                        @foreach($lst_roles as $role)
                            @if($user->hasRole($role->name))
                                <input type="checkbox" name="role[]" value="{{ $role->id }}" checked> {{ $role->name }}</br>
                            @else
                                <input type="checkbox" name="role[]" value="{{ $role->id }}"> {{ $role->name }}</br>
                            @endif
                        @endforeach
                    </div>

                    <!-- Avatar Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('avatar', 'Avatar:') !!}

                        <div class="pull-center image">
                            <img src="{{ $user->avatar }}" class="img-circle"
                                alt="User Image"/>
                        </div>   
                        <input type="file" name="uploadedFile" />
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('consultors.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection