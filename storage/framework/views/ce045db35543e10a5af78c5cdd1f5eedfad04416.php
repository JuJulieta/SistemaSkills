<!-- Cat Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cat_nombre', 'Nombre:'); ?>

    <?php echo Form::text('cat_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]); ?>

</div>

<!-- Cat Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('cat_descripcion', 'Descripcion:'); ?>

    <?php echo Form::textarea('cat_descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/demo/resources/views/categorias/fields.blade.php ENDPATH**/ ?>