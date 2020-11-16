<!-- Nvl Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nvl_nombre', 'Nombre'); ?>

    <?php echo Form::text('nvl_nombre', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]); ?>

</div>

<!-- Nvl Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('nvl_descripcion', 'Descripción'); ?>

    <?php echo Form::textarea('nvl_descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Nvl Valor Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nvl_valor', 'Porcentaje'); ?>

    <?php echo Form::number('nvl_valor', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('nivels.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/nivels/fields.blade.php ENDPATH**/ ?>