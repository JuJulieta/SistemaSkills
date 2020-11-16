<!-- Scat Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('scat_nombre', 'Nombre'); ?>

    <?php echo Form::text('scat_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]); ?>

</div>

<!-- Scat Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('scat_descripcion', 'Descripción'); ?>

    <?php echo Form::textarea('scat_descripcion', null, ['class' => 'form-control']); ?>

</div>

<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/sub_categorias/fields.blade.php ENDPATH**/ ?>