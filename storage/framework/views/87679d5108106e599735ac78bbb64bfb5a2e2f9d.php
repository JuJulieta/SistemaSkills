<div class="table-responsive">
    <table class="table" id="cursoConsultors-table">
        <thead>
            <tr>
                <th>Cur Id</th>
        <th>Con Id</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $cursoConsultors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cursoConsultor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cursoConsultor->cur_id); ?></td>
            <td><?php echo e($cursoConsultor->con_id); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['cursoConsultors.destroy', $cursoConsultor->cuc_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('cursoConsultors.show', [$cursoConsultor->cuc_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('cursoConsultors.edit', [$cursoConsultor->cuc_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/curso_consultors/table.blade.php ENDPATH**/ ?>