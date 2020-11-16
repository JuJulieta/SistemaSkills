<div class="table-responsive">
    <table class="table" id="perfils-table">
        <thead>
            <tr>
                <th>Per Nombre</th>
        <th>Per Descripcion</th>
        <th>Car Id</th>
        <th>Lsv Id</th>
        <th>Nvl Id</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $perfils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perfil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($perfil->per_nombre); ?></td>
            <td><?php echo e($perfil->per_descripcion); ?></td>
            <td><?php echo e($perfil->car_id); ?></td>
            <td><?php echo e($perfil->lsv_id); ?></td>
            <td><?php echo e($perfil->nvl_id); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['perfils.destroy', $perfil->per_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('perfils.show', [$perfil->per_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('perfils.edit', [$perfil->per_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/perfils/table.blade.php ENDPATH**/ ?>