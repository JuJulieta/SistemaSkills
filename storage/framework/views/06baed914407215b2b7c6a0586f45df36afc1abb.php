

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Búsqueda Skills Consultores
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                <?php echo Form::model("Buscar", ['route' => ['skillsConsultores.buscar'], 'method' => 'post', 'id'=>'form']); ?>

                    <!-- Skl Id Field -->
                    <div class="form-group col-sm-6">
                    <input class="field" name="opcion" id="id_skill" type="radio" checked> Skills
                        <?php echo Form::select('skl_id[]', $lst_skills, null, ['class' => 'form-control cbx_select2 skl_id','multiple' =>'multiple', 'id'=>'skl_id']); ?>     
                    </div>

                    <!-- Con Id Field -->
                    <div class="form-group col-sm-6">
                    <input class="field" name="opcion" id="id_con" type="radio"> Consultor
                        <?php echo Form::select('con_id', $lst_consultores, null, ['class' => 'form-control cbx_select2', 'placeholder' => '--- Seleccione Consultor---','id'=>'con_id', 'disabled'=>true]); ?>

                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        <?php echo Form::submit('Buscar', ['class' => 'btn btn-primary']); ?>

                    </div>

                <?php echo Form::close(); ?>

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
                            <?php if($lst_resultado): ?>
                            <?php $__currentLoopData = $lst_resultado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resultado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><?php echo e($resultado['con_nombres']); ?> <?php echo e($resultado['con_apellidos']); ?> </td>     
                                    <td><?php echo e($resultado['skl_nombre_1']); ?> <?php echo e($resultado['nvl_skill_1']); ?></td>
                                    <td><?php echo e($resultado['skl_nombre_2']); ?> <?php echo e($resultado['nvl_skill_2']); ?></td>
                                    <td><?php echo e($resultado['skl_nombre_3']); ?> <?php echo e($resultado['nvl_skill_3']); ?></td>
                                    <td>
                                        <div class='btn-group'>
                                            <a href="<?php echo e(route('misskills.index')); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                            <?php if($consultor): ?>
                            <?php $__currentLoopData = $consultor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resultado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td ><?php echo e($resultado); ?> </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        <div class='btn-group'>
                                            <a href="<?php echo e(route('misskills.index')); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
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

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/skills_consultores/create.blade.php ENDPATH**/ ?>