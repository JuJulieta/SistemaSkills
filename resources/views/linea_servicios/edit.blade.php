@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        Línea de Servicio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($lineaServicio, ['route' => ['lineaServicios.update', $lineaServicio->lsv_id], 'method' => 'patch']) !!}

                        @include('linea_servicios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection