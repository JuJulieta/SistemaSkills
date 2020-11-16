@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nuevo Skill
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'skills.store']) !!}

                        <!-- Scat Id Field  SELECT CATEGORIA-->

                        <div class="form-group col-sm-6">
                            {!! Form::label('cat_nombre', 'Categoría') !!}

                            <select name="cat_id" id="cat_id" class="form-control" style="width: 100%" onchange="seleccionarSubcategoria(this.options[this.selectedIndex].value);">
                                <option value="0">--Seleccionar Categoría--</option>
                                
                                @foreach($lst_categorias as $categoria)
                                <option value="{{ $categoria['cat_id']}}">{{ $categoria['cat_nombre'] }}</option>
                                @endforeach
                            </select>

                        </div>
                        <!-- Scat Id Field  SELECT SUBCATEGORIA-->
                        <div class="form-group col-sm-6">
                            {!! Form::label('cat_nombre', 'SubCategoría') !!}
                            <select name="scat_id" id="scat_id" class="form-control" style="width: 100%"  onchange="autocompletadoSkills(this.options[this.selectedIndex].value);">
                                <option value="0">--Seleccionar SubCategoría--</option>
                            </select>
                        </div>

                        <!-- Skl Nombre Field -->

                                 <div class="form-group col-sm-6 ui-widget">
                                    {!! Form::label('skl_nombre', 'Nombre') !!}
                                    {!! Form::text('skl_nombre', null, ['class' => 'form-control', 'id'=>'tags_skills' ,'maxlength' => 300,'maxlength' => 300, 'requiered'=>'requiered']) !!}
                                </div>

                        <!-- Skl Descripcion Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('skl_descripcion', 'Descripción') !!}
                            {!! Form::textarea('skl_descripcion', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('skills.index') }}" class="btn btn-default">Cancelar</a>
                        </div>
                   
                        <script type="text/javascript">
                            var arraCategorias = [];
                            var arraSubCategorias = [];
                            var arraSkills = [];
                            var arraSubSkills= [];
                            var arraNiveles = [];

                            //Cargamos la configuracion de skills
                            @foreach($skills as $skill)
                            arraSkills.push({
                                id: {{ $skill->skl_id }},
                                nombre: "{{ $skill->skl_nombre }}", 
                                scat_id: {{ $skill->scat_id }}
                            });
                            @endforeach                        
                            
                            //Cargamos la configuracion de sub-categorias
                            @foreach($lst_subCategorias as $sub_categoria)
                                arraSubCategorias.push({
                                    id: {{ $sub_categoria['scat_id'] }}, 
                                    nombre: "{{ $sub_categoria['scat_nombre'] }}", 
                                    cat_id : {{ $sub_categoria['cat_id'] }},
                                    skills: [],
                                    total_skills: 0
                                });
                            @endforeach

                            //Cargamos la configuracion de categorias
                            @foreach($lst_categorias as $categoria)
                                arraCategorias.push({
                                    id: {{ $categoria['cat_id'] }}, 
                                    nombre: "{{ $categoria['cat_nombre'] }}", 
                                    sub_categoria: [],
                                    total_skills: 0, 
                                    enable: false
                                });    
                            @endforeach


                            //Unimos cada sub-categoria a las categorias
                            arraSubCategorias.forEach(function(data){
                                const categoria = arraCategorias.find(search => search.id === data.cat_id);
                                categoria.sub_categoria.push(data);
                                //categoria.total_skills = categoria.total_skills + data.total_skills;
                            });

                            //Unimos skills a cada sub-categoria y el nivel de la skill
                            arraSkills.forEach(function(data){
                                const sub_categoria = arraSubCategorias.find(search => search.id === data.scat_id);
                                sub_categoria.skills.push(data);
                            //sub_categoria.total_skills = sub_categoria.total_skills + 1;
                            });                      

                            // console.log(arraCategorias);

                            function seleccionarSubcategoria(id_categoria){

                                const categoria = arraCategorias.find(search => search.id === parseInt(id_categoria));
                                    
                                document.getElementById("scat_id").innerHTML="";

                                //sub_categoria.innerHTML="";

                                var option = document.createElement("option");

                                option.setAttribute("id", 0);
                                option.setAttribute("value", 0);
                                option.appendChild(document.createTextNode('--Seleccionar Sub Categoría--'));
                                document.getElementById("scat_id").appendChild(option);

                                for(var i=0; i < categoria.sub_categoria.length; i++){
                                    const sub = categoria.sub_categoria[i];
                                    
                                    var option = document.createElement("option");

                                    option.setAttribute("id", sub.id);
                                    option.setAttribute("value", sub.id);
                                    option.appendChild(document.createTextNode(sub.nombre));
                                    document.getElementById("scat_id").appendChild(option)
                                    
                                }
                              
                                //sub_categoria.appendChild(option);

                            }
                            //form-control
                            var existe = document.getElementById("tags_skills").source;
                            console.log(existe);

                            function autocompletadoSkills(id_subcategoria){
                                arraSubSkills=[];
                                const subcategoria= arraSubCategorias.find(search => search.id === parseInt(id_subcategoria));
                                console.log(subcategoria.id);
                                          
                                for (let i = 0; i < subcategoria.skills.length; i++) {
                                    const skl = subcategoria.skills[i]["nombre"];
                                    arraSubSkills.push(
                                        skl
                                    );                                      
                                }           

                                $( "#tags_skills" ).autocomplete({
                                source: arraSubSkills
                                });
                            }


                        </script>
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection




