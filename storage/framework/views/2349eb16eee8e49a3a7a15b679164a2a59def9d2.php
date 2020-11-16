<div class="table-responsive">
    <table class="table" id="perfilSkills-table">
        <thead>
            <tr>
                <th>Per Id</th>
        <th>Skl Id</th>
        <th>Nvl Id</th>
        <th>Psk Comentario</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $perfilSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perfilSkills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($perfilSkills->per_id); ?></td>
            <td><?php echo e($perfilSkills->skl_id); ?></td>
            <td><?php echo e($perfilSkills->nvl_id); ?></td>
            <td><?php echo e($perfilSkills->psk_comentario); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['perfilSkills.destroy', $perfilSkills->psk_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('perfilSkills.show', [$perfilSkills->psk_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('perfilSkills.edit', [$perfilSkills->psk_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/demo/resources/views/perfil_skills/table.blade.php ENDPATH**/ ?>