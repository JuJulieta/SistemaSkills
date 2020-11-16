<?php echo Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']); ?>

<!-- Roles Field -->
<div class="form-group col-sm-6">
<?php echo Form::label('role[]', 'Roles'); ?> <br />
    <?php if($consultor->email === $user->email): ?>   
    
        <?php $__currentLoopData = $lst_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                                    
                    <?php if($user->hasRole($role->name)): ?>
                        <input type="checkbox" name="role[]" value="<?php echo e($role->id); ?>" checked> <?php echo e($role->name); ?></br>
                    <?php else: ?>
                        <input type="checkbox" name="role[]" value="<?php echo e($role->id); ?>"> <?php echo e($role->name); ?></br>
                    <?php endif; ?>                              
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php echo Form::close(); ?><?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/users/roles.blade.php ENDPATH**/ ?>