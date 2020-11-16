<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

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

<!-- Avatar Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('avatar', 'Avatar:'); ?>

    <?php echo Form::text('avatar', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/skills_orbisdata/resources/views/users/fields.blade.php ENDPATH**/ ?>