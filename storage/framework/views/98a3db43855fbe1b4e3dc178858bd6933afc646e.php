<!-- Con Id Field -->
<div class="form-group">
    <?php echo Form::label('con_id', 'Consultor:'); ?>

    <p>
        <?php $__currentLoopData = $lst_consultores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($consultor->con_id == $skillsConsultores->con_id): ?>
                <?php echo e($consultor->con_nombres); ?> <?php echo e($consultor->con_apellidos); ?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>

<!-- Skl Id Field -->
<div class="form-group">
    <?php echo Form::label('skl_id', 'Skill:'); ?>

    <p>
        <?php $__currentLoopData = $lst_skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($skill->skl_id == $skillsConsultores->skl_id): ?>
                <?php echo e($skill->skl_nombre); ?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </p>
</div>

<!-- Nvl Id Field -->
<div class="form-group">
    <?php echo Form::label('nvl_id', 'Nivel:'); ?>

    <p>
        <?php $__currentLoopData = $lst_niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($nivel->nvl_id == $skillsConsultores->nvl_id): ?>
                <?php echo e($nivel->nvl_nombre); ?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </p>
</div>

<!-- Csk Comentario Field -->
<div class="form-group">
    <?php echo Form::label('csk_comentario', 'Comentario:'); ?>

    <p><?php echo e($skillsConsultores->csk_comentario); ?></p>
</div>

<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/skills_consultores/show_fields.blade.php ENDPATH**/ ?>