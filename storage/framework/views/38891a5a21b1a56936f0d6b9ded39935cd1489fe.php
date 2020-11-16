<!-- Cat Nombre Field -->
<div class="form-group">
    <?php echo Form::label('cat_nombre', 'Nombre:'); ?>

    <p><?php echo e($categoria->cat_nombre); ?></p>
</div>

<!-- Cat Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('cat_descripcion', 'Descripcion:'); ?>

    <p><?php echo e($categoria->cat_descripcion); ?></p>
</div>

<?php /**PATH /var/www/demo/resources/views/categorias/show_fields.blade.php ENDPATH**/ ?>