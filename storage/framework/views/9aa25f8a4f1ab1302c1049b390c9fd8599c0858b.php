<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Usuario
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">


                   <?php echo Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']); ?>

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

                        <?php echo Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]); ?>

                    </div>

                    <!-- Roles Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('role[]', 'Roles:'); ?> <br />
                        <?php $__currentLoopData = $lst_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($user->hasRole($role->name)): ?>
                                <input type="checkbox" name="role[]" value="<?php echo e($role->id); ?>" checked> <?php echo e($role->name); ?></br>
                            <?php else: ?>
                                <input type="checkbox" name="role[]" value="<?php echo e($role->id); ?>"> <?php echo e($role->name); ?></br>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- Avatar Field -->
                    <div class="form-group col-sm-12">
                        <?php echo Form::label('avatar', 'Avatar:'); ?>


                        <div class="pull-center image">
                            <img src="<?php echo e($user->avatar); ?>" class="img-circle"
                                alt="User Image"/>
                        </div>   
                        <input type="file" name="uploadedFile" />
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

                        <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default">Cancel</a>
                    </div>
                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/skills_orbisdata/resources/views/users/edit.blade.php ENDPATH**/ ?>