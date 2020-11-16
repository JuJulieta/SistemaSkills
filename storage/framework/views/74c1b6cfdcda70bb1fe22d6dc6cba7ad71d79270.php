<!-- Cat Nombre Field -->
<div class="form-group">
    <?php echo Form::label('cat_nombre', 'Nombre'); ?>

    <p><?php echo e($categoria->cat_nombre); ?></p>
</div>

<!-- Cat Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('cat_descripcion', 'Descripción'); ?>

    <p><?php echo e($categoria->cat_descripcion); ?></p>
</div>
<!-- SubCat Asociadas Field -->
<div class="form-group ">
    <?php echo Form::label('SubCategorías'); ?> 
    <?php $__currentLoopData = $lst_subCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategorias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <p><?php echo e($subCategorias->scat_nombre); ?></p>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/categorias/show_fields.blade.php ENDPATH**/ ?>