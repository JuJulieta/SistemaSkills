<div class="table-responsive">
    <table class="table" id="cursoSkills-table">
        <thead>
            <tr>
                <th>Cur Id</th>
        <th>Skl Id</th>
        <th>Nvl Id</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $cursoSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cursoSkill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cursoSkill->cur_id); ?></td>
            <td><?php echo e($cursoSkill->skl_id); ?></td>
            <td><?php echo e($cursoSkill->nvl_id); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['cursoSkills.destroy', $cursoSkill->crs_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('cursoSkills.show', [$cursoSkill->crs_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('cursoSkills.edit', [$cursoSkill->crs_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/curso_skills/table.blade.php ENDPATH**/ ?>