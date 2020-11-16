<!-- Per Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('per_id', 'Per Id:'); ?>

    <?php echo Form::number('per_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Skl Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('skl_id', 'Skl Id:'); ?>

    <?php echo Form::number('skl_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Nvl Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nvl_id', 'Nvl Id:'); ?>

    <?php echo Form::number('nvl_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Psk Comentario Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('psk_comentario', 'Psk Comentario:'); ?>

    <?php echo Form::textarea('psk_comentario', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('perfilSkills.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/demo/resources/views/perfil_skills/fields.blade.php ENDPATH**/ ?>