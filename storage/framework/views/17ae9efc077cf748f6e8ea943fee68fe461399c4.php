<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Mi Perfil
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($user, ['route' => ['profile.update', $user->id], 'method' => 'patch']); ?>

                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('name', 'Nombre:'); ?>

                        <?php echo Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]); ?>

                    </div>

                    <!-- Rut Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('rut', 'Rut:'); ?>

                        <?php echo Form::text('rut', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]); ?>

                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('email', 'Email:'); ?>

                        <?php echo Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly' => true]); ?>

                    </div>

                    <!-- Avatar Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('avatar', 'Avatar:'); ?>

                        <?php echo Form::text('avatar', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]); ?>

                    </div>
                    <!-- Avatar Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('avatar', 'Roles:'); ?>

                        <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($role->name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>                    


                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        <?php echo Form::submit('Actualizar Perfil', ['class' => 'btn btn-primary']); ?>

                    </div>
                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/skills_orbisdata/resources/views/profile/profile.blade.php ENDPATH**/ ?>