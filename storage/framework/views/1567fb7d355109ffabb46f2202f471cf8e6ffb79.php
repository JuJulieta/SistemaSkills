<!-- Scat Nombre Field -->
<div class="form-group">
    <?php echo Form::label('scat_nombre', 'Nombre '); ?>

    <p><?php echo e($subCategoria->scat_nombre); ?></p>
</div>
<!-- Cat Nombre Field -->
<div class="form-group">
    <?php echo Form::label('cat_id', 'Categoría '); ?>

    <p>
        <?php $__currentLoopData = $lst_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($categoria->cat_id == $subCategoria->cat_id): ?>
                <?php echo e($categoria->cat_nombre); ?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>
<!-- Scat Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('scat_descripcion', 'Descripción '); ?>

    <p><?php echo e($subCategoria->scat_descripcion); ?></p>
</div>



<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/sub_categorias/show_fields.blade.php ENDPATH**/ ?>