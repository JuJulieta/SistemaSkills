@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Consultor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($consultor, ['route' => ['consultors.update', $consultor->con_id], 'method' => 'patch']) !!}
                  
                        <!-- Con Nombres Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('con_nombres', 'Nombres') !!}
                            {!! Form::text('con_nombres', null, ['class' => 'form-control','maxlength' => 400,'maxlength' => 400]) !!}
                        </div>

                        <!-- Con Apellidos Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('con_apellidos', 'Apellidos') !!}
                            {!! Form::text('con_apellidos', null, ['class' => 'form-control','maxlength' => 400,'maxlength' => 400]) !!}
                        </div>
                        <!-- Nvl Id Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('nvl_id', 'Nivel') !!} </br>
                            @foreach($lst_niveles as $nivel)
                                <input class="field" name="nvl_id" value="{{ $nivel->nvl_id }}" type="radio" {{($consultor->nvl_id === $nivel->nvl_id) ? 'checked':''}}> {{ $nivel->nvl_nombre }}
                            @endforeach
                        </div>
                        <!-- Car Id Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('car_id', 'Cargo') !!} </br>
                            @foreach($lst_cargo as $cargo)
                                <input class="field" name="car_id" value="{{ $cargo->car_id }}" type="radio" {{($consultor->car_id === $cargo->car_id) ? 'checked':''}}> {{ $cargo->car_nombre }}</br>
                            @endforeach
                            </select>
                        </div>
                        <!-- Lsv Id Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('lsv_id', 'Línea de Servicio') !!} </br>
                            @foreach($lst_linea as $linea)
                                <input class="field" name="lsv_id" value="{{ $linea->lsv_id }}" type="radio" {{($consultor->lsv_id === $linea->lsv_id) ? 'checked':''}}> {{ $linea->lsv_nombre }}</br>
                            @endforeach
                            </select>
                        </div>
                        <!-- Email Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly'=>true]) !!}
                        </div>
                        <!-- Roles Field -->
                
                        <div class="form-group col-sm-6">
                            @foreach($lst_user as $user)
                                @if($consultor->email === $user->email)
                                {!! Form::label('role[]', 'Roles') !!}
                                        <!-- Submit Field -->
                                        <div class="btn-group">
                                            <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-primary btn-xs' ><i class="glyphicon glyphicon-edit"></i></a>
                                        </div><br />
                                        @foreach($lst_roles as $role)                                                                    
                                                    @if($user->hasRole($role->name))
                                                        <input type="checkbox" name="role[]" value="{{ $role->id }}" checked disabled> {{ $role->name }}</br>
                                                    @else
                                                        <input type="checkbox" name="role[]" value="{{ $role->id }}" disabled> {{ $role->name }}</br>
                                                    @endif                              
                                        @endforeach
                                @endif
                                
                            @endforeach
                        </div>
               
                        @include('consultors.fields')
                   {!! Form::close() !!}

               </div>
           </div>
       </div>
   </div>
@endsection