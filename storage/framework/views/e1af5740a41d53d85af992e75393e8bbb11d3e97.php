<!-- Nvl Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nvl_nombre', 'Nvl Nombre:'); ?>

    <?php echo Form::text('nvl_nombre', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]); ?>

</div>

<!-- Nvl Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('nvl_descripcion', 'Nvl Descripcion:'); ?>

    <?php echo Form::textarea('nvl_descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('nivels.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/demo/resources/views/nivels/fields.blade.php ENDPATH**/ ?>