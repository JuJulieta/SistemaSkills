<!-- Scat Nombre Field -->
<div class="form-group">
    <?php echo Form::label('scat_nombre', 'Nombre:'); ?>

    <p><?php echo e($subCategoria->scat_nombre); ?></p>
</div>

<!-- Scat Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('scat_descripcion', 'Descripcion:'); ?>

    <p><?php echo e($subCategoria->scat_descripcion); ?></p>
</div>

<!-- Cat Id Field -->
<div class="form-group">
    <?php echo Form::label('cat_id', 'Categoria Id:'); ?>

    <p><?php echo e($subCategoria->cat_id); ?></p>
</div>

<?php /**PATH /var/www/demo/resources/views/sub_categorias/show_fields.blade.php ENDPATH**/ ?>