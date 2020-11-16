<!-- Con Nombres Field -->
<div class="form-group">
    <?php echo Form::label('con_nombres', 'Nombres'); ?>

    <p><?php echo e($consultor->con_nombres); ?></p>
</div>

<!-- Con Apellidos Field -->
<div class="form-group">
    <?php echo Form::label('con_apellidos', 'Apellidos'); ?>

    <p><?php echo e($consultor->con_apellidos); ?></p>
</div>

<!-- Con Comentarios Field -->
<div class="form-group">
    <?php echo Form::label('con_comentarios', 'Comentarios'); ?>

    <p><?php echo e($consultor->con_comentarios); ?></p>
</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email'); ?>

    <p><?php echo e($consultor->email); ?></p>
</div>

<!-- Lsv Id Field -->
<div class="form-group">
    <?php echo Form::label('lsv_id', 'Linea de Servicio'); ?>

    <p>
        <?php $__currentLoopData = $lst_linea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($linea->lsv_id === $consultor->lsv_id): ?>
                <?php echo e($linea->lsv_nombre); ?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>

<!-- Nvl Id Field -->
<div class="form-group">
    <?php echo Form::label('nvl_id', 'Nivel'); ?>

    <p>
        <?php $__currentLoopData = $lst_niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($nivel->nvl_id === $consultor->nvl_id): ?>
                <?php echo e($nivel->nvl_nombre); ?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>

<!-- Car Id Field -->
<div class="form-group">
    <?php echo Form::label('car_id', 'Cargo'); ?>

    <p>
        <?php $__currentLoopData = $lst_cargo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($cargo->car_id === $consultor->car_id): ?>
                <?php echo e($cargo->car_nombre); ?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>

<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/consultors/show_fields.blade.php ENDPATH**/ ?>