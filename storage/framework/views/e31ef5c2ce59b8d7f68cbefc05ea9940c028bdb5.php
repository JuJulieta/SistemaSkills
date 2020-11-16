<div class="table-responsive">
    <table class="table" id="consultors-table">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Rut</th>
                <th>Fecha Nacimiento</th>
                <th>Fecha Ingreso Compañia</th>
                <th>Comentarios</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $consultors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($consultor->con_nombres); ?></td>
            <td><?php echo e($consultor->con_apellidos); ?></td>
            <td><?php echo e($consultor->con_rut); ?>-<?php echo e($consultor->con_rut_dv); ?></td>
            <td><?php echo e($consultor->con_fecha_nacimiento); ?></td>
            <td><?php echo e($consultor->con_fecha_ingreso_compania); ?></td>
            <td><?php echo e($consultor->con_comentarios); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['consultors.destroy', $consultor->con_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('consultors.show', [$consultor->con_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('consultors.edit', [$consultor->con_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/demo/resources/views/consultors/table.blade.php ENDPATH**/ ?>