<!-- Skl Nombre Field -->
<div class="form-group">
    <?php echo Form::label('skl_nombre', 'Nombre'); ?>

    <p><?php echo e($skills->skl_nombre); ?></p>
</div>

<!-- Skl Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('skl_descripcion', 'Descripción'); ?>

    <p><?php echo e($skills->skl_descripcion); ?></p>
</div>

<!-- Scat Id Field -->
<div class="form-group">
    <?php echo Form::label('scat_id', 'Subcategoría'); ?>

    <p>
    <?php $__currentLoopData = $lst_subCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($subCategoria->scat_id == $skills->scat_id): ?>
            <?php echo e($subCategoria->scat_nombre); ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>

<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/skills/show_fields.blade.php ENDPATH**/ ?>