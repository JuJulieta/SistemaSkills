<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Skills Consultores
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($skillsConsultores, ['route' => ['skillsConsultores.update', $skillsConsultores->csk_id], 'method' => 'patch']); ?>


                    <!-- Con Id Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('con_id', 'Consultor:'); ?>

                        <?php echo Form::select('con_id', $lst_consultores, null, ['class' => 'form-control cbx_select2', 'placeholder' => '... Seleccione ...']); ?>

                    </div>
                    <!-- Skl Id Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('skl_id', 'Skill:'); ?>

                        <?php echo Form::select('skl_id', $lst_skills, null, ['class' => 'form-control cbx_select2', 'placeholder' => '... Seleccione ...'] ); ?>

                    </div>

                    <!-- Nvl Id Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('nvl_id', 'Nivel:'); ?> </br>
                        <?php $__currentLoopData = $lst_niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($nivel->nvl_id == $skillsConsultores->nvl_id): ?>
                                <input class="field" checked="checked" 
                                    name="nvl_id" value="<?php echo e($nivel->nvl_id); ?>" type="radio"> <?php echo e($nivel->nvl_nombre); ?>

                            <?php else: ?>
                                <input class="field" name="nvl_id" value="<?php echo e($nivel->nvl_id); ?>" type="radio"> <?php echo e($nivel->nvl_nombre); ?>

                            <?php endif; ?>        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- Csk Comentario Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        <?php echo Form::label('csk_comentario', 'Comentario:'); ?>

                        <?php echo Form::textarea('csk_comentario', null, ['class' => 'form-control']); ?>

                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

                        <a href="<?php echo e(route('skillsConsultores.index')); ?>" class="btn btn-default">Cancelar</a>
                    </div>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/skills_orbisdata/resources/views/skills_consultores/edit.blade.php ENDPATH**/ ?>