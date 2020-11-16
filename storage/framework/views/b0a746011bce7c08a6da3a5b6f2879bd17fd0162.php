<div class="table-responsive">
    <table class="table" id="consultors-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Línea de Servicio</th>
                <th>Nivel</th>
                <th>Cargo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $consultors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($consultor->con_nombres); ?>  <?php echo e($consultor->con_apellidos); ?></td>
                <td>
                    <?php $__currentLoopData = $lst_linea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($linea->lsv_id === $consultor->lsv_id): ?>
                            <?php echo e($linea->lsv_nombre); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <?php $__currentLoopData = $lst_niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($nivel->nvl_id === $consultor->nvl_id): ?>
                            <?php echo e($nivel->nvl_nombre); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <?php $__currentLoopData = $lst_cargo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cargo->car_id === $consultor->car_id): ?>
                            <?php echo e($cargo->car_nombre); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
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
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/consultors/table.blade.php ENDPATH**/ ?>