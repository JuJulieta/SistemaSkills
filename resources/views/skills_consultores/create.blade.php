@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Búsqueda Skills Consultores
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model("Buscar", ['route' => ['skillsConsultores.buscar'], 'method' => 'post', 'id'=>'form']) !!}
                    <!-- Skl Id Field -->
                    <div class="form-group col-sm-6">
                    <input class="field" name="opcion" id="id_skill" type="radio" checked> Skills
                        {!! Form::select('skl_id[]', $lst_skills, null, ['class' => 'form-control cbx_select2 skl_id','multiple' =>'multiple', 'id'=>'skl_id']) !!}     
                    </div>

                    <!-- Con Id Field -->
                    <div class="form-group col-sm-6">
                    <input class="field" name="opcion" id="id_con" type="radio"> Consultor
                        {!! Form::select('con_id', $lst_consultores, null, ['class' => 'form-control cbx_select2', 'placeholder' => '--- Seleccione Consultor---','id'=>'con_id', 'disabled'=>true]) !!}
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
                    </div>

                {!! Form::close() !!}
                </div>
                <br/>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="consultors-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>     
                                <th id="skl_1" style="color:grey; font-weight:normal">Skill</th>
                                <th id="skl_2" style="color:grey; font-weight:normal">Skill</th>
                                <th id="skl_3" style="color:grey; font-weight:normal">Skill</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_skills">
                            @if($lst_resultado)
                            @foreach($lst_resultado as $resultado)
                                <tr>

                                    <td>{{ $resultado['con_nombres'] }} {{ $resultado['con_apellidos'] }} </td>     
                                    <td>{{ $resultado['skl_nombre_1'] }} {{ $resultado['nvl_skill_1'] }}</td>
                                    <td>{{ $resultado['skl_nombre_2'] }} {{ $resultado['nvl_skill_2'] }}</td>
                                    <td>{{ $resultado['skl_nombre_3'] }} {{ $resultado['nvl_skill_3'] }}</td>
                                    <td>
                                        <div class='btn-group'>
                                            <a href="{{ route('misskills.index') }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @endif

                            @if($consultor)
                            @foreach($consultor as $resultado)
                                <tr>
                                    <td >{{ $resultado }} </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        <div class='btn-group'>
                                            <a href="{{ route('misskills.index') }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        jQuery(document).ready(function(){
            var con = document.getElementById('con_id');
            var skl = document.getElementById('skl_id');
            $('#form input').on('change',function(){
                $opcion = $('input[name=opcion]:checked','#form').attr("id");

                //Bloqueo y desbloqueo de Select con opcion de RB
                if($opcion === 'id_con'){
                    con.removeAttribute('disabled','');
                    con.setAttribute('enabled', '');
                    $( "#skl_id" ).val('').trigger('change');
                    skl.setAttribute('disabled','');
                    skl.removeAttribute('enables','');

                }else if($opcion === 'id_skill'){
                    skl.removeAttribute('disabled','');
                    skl.setAttribute('enabled', '');
                    $( "#con_id" ).val('').trigger('change');
                    con.setAttribute('disabled','');
                    con.removeAttribute('enables','');
                    console.log($lst_resultado);
                }		        
            });
        });

    </script>

    
@endsection
