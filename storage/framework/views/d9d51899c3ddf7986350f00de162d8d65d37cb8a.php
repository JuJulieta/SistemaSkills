<!-- Nln Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nln_nombre', 'Nln Nombre:'); ?>

    <p><?php echo e($nivel->nln_nombre); ?></p>
</div>

<!-- Nvl Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('nvl_descripcion', 'Nvl Descripcion:'); ?>

    <p><?php echo e($nivel->nvl_descripcion); ?></p>
</div>

<!-- Nvl Nivel Field -->
<div class="form-group">
    <?php echo Form::label('nvl_nivel', 'Nvl Nivel:'); ?>

    <p><?php echo e($nivel->nvl_nivel); ?></p>
</div>

<?php /**PATH /var/www/demo/resources/views/nivels/show_fields.blade.php ENDPATH**/ ?>