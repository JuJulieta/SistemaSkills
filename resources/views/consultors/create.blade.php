@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nuevo Consultor
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'consultors.store']) !!}
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
                                <input class="field" name="nvl_id" value="{{ $nivel->nvl_id }}" type="radio" > {{ $nivel->nvl_nombre }}
                            @endforeach
                        </div>
                        <!-- Car Id Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('car_id', 'Cargo') !!} </br>
                            @foreach($lst_cargo as $cargo)
                                <input class="field" name="car_id" value="{{ $cargo->car_id }}" type="radio" > {{ $cargo->car_nombre }}</br>
                            @endforeach
                            </select>
                        </div>
                        <!-- Lsv Id Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('lsv_id', 'Línea de Servicio') !!} </br>
                            @foreach($lst_linea as $linea)
                                <input class="field" name="lsv_id" value="{{ $linea->lsv_id }}" type="radio" > {{ $linea->lsv_nombre }}</br>
                            @endforeach
                            </select>
                        </div>
                        <!-- Email Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>
                        <!-- Roles Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('role[]', 'Roles') !!} <br />
                            @foreach($lst_roles as $role)
                                @if($user->hasRole($role->name))
                                    <input type="checkbox" name="role[]" value="{{ $role->id }}"> {{ $role->name }}</br>
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
