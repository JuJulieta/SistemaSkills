<!-- Nombre Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::textarea('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('foraneas.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/demo/resources/views/foraneas/fields.blade.php ENDPATH**/ ?>