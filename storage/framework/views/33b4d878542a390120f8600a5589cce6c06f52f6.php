<!-- Cur Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cur_nombre', 'Nombre'); ?>

    <?php echo Form::text('cur_nombre', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]); ?>

</div>

<!-- Cur Descripcion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cur_descripcion', 'Descripción'); ?>

    <?php echo Form::text('cur_descripcion', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('cursos.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/cursos/fields.blade.php ENDPATH**/ ?>