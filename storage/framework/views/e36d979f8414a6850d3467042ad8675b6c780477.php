<!-- Nvl Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nvl_nombre', 'Nombre'); ?>

    <p><?php echo e($nivel->nvl_nombre); ?></p>
</div>

<!-- Nvl Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('nvl_descripcion', 'Descripción'); ?>

    <p><?php echo e($nivel->nvl_descripcion); ?></p>
</div>

<!-- Nvl Valor Field -->
<div class="form-group">
    <?php echo Form::label('nvl_valor', 'Porcentaje'); ?>

    <p><?php echo e($nivel->nvl_valor); ?> %</p>
</div>

<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/nivels/show_fields.blade.php ENDPATH**/ ?>