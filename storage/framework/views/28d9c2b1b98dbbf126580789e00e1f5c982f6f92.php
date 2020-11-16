<div class="table-responsive">
    <table class="table" id="espaniols-table">
        <thead>
            <tr>
                <th>Ska Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $espaniols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $espaniol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($espaniol->ska_nombre); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['espaniols.destroy', $espaniol->ska_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('espaniols.show', [$espaniol->ska_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('espaniols.edit', [$espaniol->ska_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/espaniols/table.blade.php ENDPATH**/ ?>