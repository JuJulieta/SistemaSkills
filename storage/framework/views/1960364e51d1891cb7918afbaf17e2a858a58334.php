
<!-- Con Comentarios Field -->
<div class="form-group col-sm-12 ">
    <?php echo Form::label('con_comentarios', 'Comentarios'); ?>

    <?php echo Form::textarea('con_comentarios', null, ['class' => 'form-control']); ?>

</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('consultors.index')); ?>" class="btn btn-default">Cancelar</a>
</div>


<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/consultors/fields.blade.php ENDPATH**/ ?>