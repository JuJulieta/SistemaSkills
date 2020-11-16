

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Consultor
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($consultor, ['route' => ['consultors.update', $consultor->con_id], 'method' => 'patch']); ?>

                  
                        <!-- Con Nombres Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('con_nombres', 'Nombres'); ?>

                            <?php echo Form::text('con_nombres', null, ['class' => 'form-control','maxlength' => 400,'maxlength' => 400]); ?>

                        </div>

                        <!-- Con Apellidos Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('con_apellidos', 'Apellidos'); ?>

                            <?php echo Form::text('con_apellidos', null, ['class' => 'form-control','maxlength' => 400,'maxlength' => 400]); ?>

                        </div>
                        <!-- Nvl Id Field -->
                        <div class="form-group col-sm-12">
                            <?php echo Form::label('nvl_id', 'Nivel'); ?> </br>
                            <?php $__currentLoopData = $lst_niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input class="field" name="nvl_id" value="<?php echo e($nivel->nvl_id); ?>" type="radio" <?php echo e(($consultor->nvl_id === $nivel->nvl_id) ? 'checked':''); ?>> <?php echo e($nivel->nvl_nombre); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- Car Id Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('car_id', 'Cargo'); ?> </br>
                            <?php $__currentLoopData = $lst_cargo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input class="field" name="car_id" value="<?php echo e($cargo->car_id); ?>" type="radio" <?php echo e(($consultor->car_id === $cargo->car_id) ? 'checked':''); ?>> <?php echo e($cargo->car_nombre); ?></br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!-- Lsv Id Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('lsv_id', 'Línea de Servicio'); ?> </br>
                            <?php $__currentLoopData = $lst_linea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input class="field" name="lsv_id" value="<?php echo e($linea->lsv_id); ?>" type="radio" <?php echo e(($consultor->lsv_id === $linea->lsv_id) ? 'checked':''); ?>> <?php echo e($linea->lsv_nombre); ?></br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!-- Email Field -->
                        <div class="form-group col-sm-12">
                            <?php echo Form::label('email', 'Email'); ?>

                            <?php echo Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly'=>true]); ?>

                        </div>
                        <!-- Roles Field -->
                
                        <div class="form-group col-sm-6">
                            <?php $__currentLoopData = $lst_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($consultor->email === $user->email): ?>
                                <?php echo Form::label('role[]', 'Roles'); ?>

                                        <!-- Submit Field -->
                                        <div class="btn-group">
                                            <a href="<?php echo e(route('users.edit', [$user->id])); ?>" class='btn btn-primary btn-xs' ><i class="glyphicon glyphicon-edit"></i></a>
                                        </div><br />
                                        <?php $__currentLoopData = $lst_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                                    
                                                    <?php if($user->hasRole($role->name)): ?>
                                                        <input type="checkbox" name="role[]" value="<?php echo e($role->id); ?>" checked disabled> <?php echo e($role->name); ?></br>
                                                    <?php else: ?>
                                                        <input type="checkbox" name="role[]" value="<?php echo e($role->id); ?>" disabled> <?php echo e($role->name); ?></br>
                                                    <?php endif; ?>                              
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
               
                        <?php echo $__env->make('consultors.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   <?php echo Form::close(); ?>


               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/consultors/edit.blade.php ENDPATH**/ ?>