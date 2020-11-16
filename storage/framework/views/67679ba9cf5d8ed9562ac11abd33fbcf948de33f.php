<div class="table-responsive">
    <table class="table" id="nivels-table">
        <thead>
            <tr>
                <th>Nvl Nombre</th>
        <th>Nvl Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $nivels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($nivel->nvl_nombre); ?></td>
            <td><?php echo e($nivel->nvl_descripcion); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['nivels.destroy', $nivel->nvl_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('nivels.show', [$nivel->nvl_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('nivels.edit', [$nivel->nvl_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/skills_orbisdata/resources/views/nivels/table.blade.php ENDPATH**/ ?>