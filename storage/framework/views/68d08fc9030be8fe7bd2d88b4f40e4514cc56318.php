<!-- Skl Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('skl_nombre', 'Skl Nombre:'); ?>

    <?php echo Form::text('skl_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]); ?>

</div>

<!-- Skl Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('skl_descripcion', 'Skl Descripcion:'); ?>

    <?php echo Form::textarea('skl_descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Scat Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('scat_id', 'Scat Id:'); ?>

    <?php echo Form::number('scat_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('skills.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/skills_orbisdata/resources/views/skills/fields.blade.php ENDPATH**/ ?>