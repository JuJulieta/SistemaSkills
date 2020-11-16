<!-- Con Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('con_id', 'Con Id:'); ?>

    <?php echo Form::number('con_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Skl Skill Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('skl_skill', 'Skl Skill:'); ?>

    <?php echo Form::number('skl_skill', null, ['class' => 'form-control']); ?>

</div>

<!-- Nvl Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nvl_id', 'Nvl Id:'); ?>

    <?php echo Form::number('nvl_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Csk Comentario Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('csk_comentario', 'Csk Comentario:'); ?>

    <?php echo Form::textarea('csk_comentario', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('skillsConsultors.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/demo/resources/views/skills_consultors/fields.blade.php ENDPATH**/ ?>