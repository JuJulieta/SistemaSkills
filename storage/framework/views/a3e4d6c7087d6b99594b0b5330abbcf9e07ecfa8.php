<div class="table-responsive">
    <table class="table" id="skills-table">
        <thead>
            <tr>
                <th>Skl Nombre</th>
        <th>Skl Descripcion</th>
        <th>Scat Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($skills->skl_nombre); ?></td>
            <td><?php echo e($skills->skl_descripcion); ?></td>
            <td><?php echo e($skills->scat_id); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['skills.destroy', $skills->skl_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('skills.show', [$skills->skl_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('skills.edit', [$skills->skl_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\HELP\v1\sistema_skills-master\resources\views/skills/table.blade.php ENDPATH**/ ?>