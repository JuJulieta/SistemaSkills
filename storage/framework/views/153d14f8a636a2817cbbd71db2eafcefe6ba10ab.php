<!-- Con Nombres Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('con_nombres', 'Nombres:'); ?>

    <?php echo Form::text('con_nombres', null, ['class' => 'form-control','maxlength' => 400,'maxlength' => 400]); ?>

</div>

<!-- Con Apellidos Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('con_apellidos', 'Apellidos:'); ?>

    <?php echo Form::text('con_apellidos', null, ['class' => 'form-control','maxlength' => 400,'maxlength' => 400]); ?>

</div>

<!-- Con Rut Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('con_rut', 'Rut:'); ?>

    <?php echo Form::number('con_rut', null, ['class' => 'form-control']); ?>

</div>

<!-- Con Rut Dv Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('con_rut_dv', 'Digito Verificador:'); ?>

    <?php echo Form::text('con_rut_dv', null, ['class' => 'form-control','maxlength' => 1,'maxlength' => 1]); ?>

</div>

<!-- Con Fecha Nacimiento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('con_fecha_nacimiento', 'Fecha Nacimiento:'); ?>

    <?php echo Form::text('con_fecha_nacimiento', null, ['class' => 'form-control','id'=>'con_fecha_nacimiento']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#con_fecha_nacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Con Fecha Ingreso Compania Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('con_fecha_ingreso_compania', 'Fecha Ingreso Compania:'); ?>

    <?php echo Form::text('con_fecha_ingreso_compania', null, ['class' => 'form-control','id'=>'con_fecha_ingreso_compania']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#con_fecha_ingreso_compania').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Con Comentarios Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('con_comentarios', 'Comentarios:'); ?>

    <?php echo Form::textarea('con_comentarios', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('consultors.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH /var/www/skills_orbisdata/resources/views/consultors/fields.blade.php ENDPATH**/ ?>