<div class="table-responsive">
    <table class="table" id="skillsConsultors-table">
        <thead>
            <tr>
                <th>Id Consultor</th>
                <th>Skill</th>
                <th>Id Nivel</th>
                <th>Comentario</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $skillsConsultors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skillsConsultor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($skillsConsultor->con_id); ?></td>
            <td><?php echo e($skillsConsultor->skl_skill); ?></td>
            <td><?php echo e($skillsConsultor->nvl_id); ?></td>
            <td><?php echo e($skillsConsultor->csk_comentario); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['skillsConsultors.destroy', $skillsConsultor->csk_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('skillsConsultors.show', [$skillsConsultor->csk_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('skillsConsultors.edit', [$skillsConsultor->csk_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/demo/resources/views/skills_consultors/table.blade.php ENDPATH**/ ?>