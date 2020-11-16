<!-- Con Nombres Field -->
<div class="form-group">
    <?php echo Form::label('con_nombres', 'Nombres:'); ?>

    <p><?php echo e($consultor->con_nombres); ?></p>
</div>

<!-- Con Apellidos Field -->
<div class="form-group">
    <?php echo Form::label('con_apellidos', 'Apellidos:'); ?>

    <p><?php echo e($consultor->con_apellidos); ?></p>
</div>

<!-- Con Rut Field -->
<div class="form-group">
    <?php echo Form::label('con_rut', 'Rut:'); ?>

    <p><?php echo e($consultor->con_rut); ?>-<?php echo e($consultor->con_rut_dv); ?></p>
</div>

<!-- Con Fecha Nacimiento Field -->
<div class="form-group">
    <?php echo Form::label('con_fecha_nacimiento', 'Fecha Nacimiento:'); ?>

    <p><?php echo e($consultor->con_fecha_nacimiento); ?></p>
</div>

<!-- Con Fecha Ingreso Compania Field -->
<div class="form-group">
    <?php echo Form::label('con_fecha_ingreso_compania', 'Fecha Ingreso Compañia:'); ?>

    <p><?php echo e($consultor->con_fecha_ingreso_compania); ?></p>
</div>

<!-- Con Comentarios Field -->
<div class="form-group">
    <?php echo Form::label('con_comentarios', 'Con Comentarios:'); ?>

    <p><?php echo e($consultor->con_comentarios); ?></p>
</div>

<?php /**PATH /var/www/demo/resources/views/consultors/show_fields.blade.php ENDPATH**/ ?>