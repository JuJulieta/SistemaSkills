@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nueva Línea de Servicio
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'lineaServicios.store']) !!}

                        @include('linea_servicios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
