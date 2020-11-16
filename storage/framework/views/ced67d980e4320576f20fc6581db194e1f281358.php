

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Nuevo Consultor
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <?php echo Form::open(['route' => 'consultors.store']); ?>

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
                                <input class="field" name="nvl_id" value="<?php echo e($nivel->nvl_id); ?>" type="radio" > <?php echo e($nivel->nvl_nombre); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- Car Id Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('car_id', 'Cargo'); ?> </br>
                            <?php $__currentLoopData = $lst_cargo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input class="field" name="car_id" value="<?php echo e($cargo->car_id); ?>" type="radio" > <?php echo e($cargo->car_nombre); ?></br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!-- Lsv Id Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('lsv_id', 'Línea de Servicio'); ?> </br>
                            <?php $__currentLoopData = $lst_linea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input class="field" name="lsv_id" value="<?php echo e($linea->lsv_id); ?>" type="radio" > <?php echo e($linea->lsv_nombre); ?></br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!-- Email Field -->
                        <div class="form-group col-sm-12">
                            <?php echo Form::label('email', 'Email'); ?>

                            <?php echo Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]); ?>

                        </div>
                        <!-- Roles Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('role[]', 'Roles'); ?> <br />
                            <?php $__currentLoopData = $lst_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->hasRole($role->name)): ?>
                                    <input type="checkbox" name="role[]" value="<?php echo e($role->id); ?>"> <?php echo e($role->name); ?></br>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/consultors/create.blade.php ENDPATH**/ ?>