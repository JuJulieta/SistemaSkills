@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            SubCategoría
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subCategoria, ['route' => ['subCategorias.update', $subCategoria->scat_id], 'method' => 'patch']) !!}

                        @include('sub_categorias.fields')
                        <!-- Cat Id Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('cat_nombre', 'Categoría') !!}

                            <select name="cat_id"class="form-control" style="width: 100%" id="cat_id">
                                <option value="0">--Seleccionar Categoría--</option>        
                                @foreach($lst_categorias as $categoria)
                                <option name="cat_id"value="{{ $categoria['cat_id']}}" {{($subCategoria->cat_id === $categoria->cat_id) ? 'selected':'' }}>{{ $categoria['cat_nombre'] }}</option>
                                @endforeach
                            </select>

                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('subCategorias.index') }}" class="btn btn-default">Cancelar</a>
                        </div> 



                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection