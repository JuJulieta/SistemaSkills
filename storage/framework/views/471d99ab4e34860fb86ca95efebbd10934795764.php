<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo e($user->name); ?></p>
</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <p><?php echo e($user->email); ?></p>
</div>

<!-- Avatar Field -->
<div class="form-group">
    <?php echo Form::label('avatar', 'Avatar:'); ?>

    <p><?php echo e($user->avatar); ?></p>
</div>

<?php echo Form::label('avatar', 'Roles:'); ?>

<?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($role->name); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<br /><?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/users/show_fields.blade.php ENDPATH**/ ?>