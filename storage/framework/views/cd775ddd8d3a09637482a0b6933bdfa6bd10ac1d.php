<!-- Scat Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('scat_nombre', 'Scat Nombre:'); ?>

    <?php echo Form::text('scat_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]); ?>

</div>

<!-- Scat Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('scat_descripcion', 'Scat Descripcion:'); ?>

    <?php echo Form::textarea('scat_descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Cat Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cat_id', 'Cat Id:'); ?>

    <?php echo Form::number('cat_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('subCategorias.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/demo/resources/views/sub_categorias/fields.blade.php ENDPATH**/ ?>