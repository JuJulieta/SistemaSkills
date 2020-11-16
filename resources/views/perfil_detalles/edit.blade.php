@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Perfil Detalle
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($perfilDetalle, ['route' => ['perfilDetalles.update', $perfilDetalle->pde_id], 'method' => 'patch']) !!}

                        @include('perfil_detalles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection