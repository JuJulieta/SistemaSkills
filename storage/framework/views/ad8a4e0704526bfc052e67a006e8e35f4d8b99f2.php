<!-- Lsv Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('lsv_nombre', 'Nombre'); ?>

    <?php echo Form::text('lsv_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('lineaServicios.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/linea_servicios/fields.blade.php ENDPATH**/ ?>