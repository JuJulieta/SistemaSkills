<!-- Car Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('car_nombre', 'Nombre'); ?>

    <?php echo Form::text('car_nombre', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]); ?>

</div>

<!-- Car Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('car_descripcion', 'Descripción'); ?>

    <?php echo Form::textarea('car_descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('cargos.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/cargos/fields.blade.php ENDPATH**/ ?>