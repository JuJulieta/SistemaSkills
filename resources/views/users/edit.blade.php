@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Roles de Usuario
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
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly'=>true]) !!}
                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly'=>true]) !!}
                    </div>

                    <!-- Roles Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('role[]', 'Roles   ') !!} <br />
                        @foreach($lst_roles as $role)
                            @if($user->hasRole($role->name))
                                <input type="checkbox" id="role" name="role[]" value="{{ $role->id }}" checked> {{ $role->name }}</br>
                            @else
                                <input type="checkbox" id="role" name="role[]" value="{{ $role->id }}"> {{ $role->name }}</br>
                            @endif
                        @endforeach
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        <input  type="submit" value="Guardar" class="btn btn-primary" onclick="verificar();"></input>
                        <a href="{{ route('consultors.edit', [$user->id]) }}" id="volver"class="btn btn-default" >Volver</a>                        
                    </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
   <script type="text/javascript">
    function verificar(){
    var suma = 0;
    var los_cboxes = document.getElementsByName('role[]'); 
    console.log(los_cboxes);
    for (var i = 0, j = los_cboxes.length; i < j; i++) {
        
        if(los_cboxes[i].checked == true){
        suma++;
        }
    }
    
    if(suma == 0){
    alert('Debe Seleccionar al menos un Rol.');
    return false;
    }else{      
        return true;
    }
    
    }
   </script>
@endsection