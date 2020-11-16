<div class="table-responsive">
    <table class="table" id="subCategorias-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $subCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($subCategoria->scat_nombre); ?></td>
                <td> <?php $__currentLoopData = $lst_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($categoria->cat_id == $subCategoria->cat_id): ?>
                            <?php echo e($categoria->cat_nombre); ?>

                        <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>

                <td>
                    <?php echo Form::open(['route' => ['subCategorias.destroy', $subCategoria->scat_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('subCategorias.show', [$subCategoria->scat_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('subCategorias.edit', [$subCategoria->scat_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/sub_categorias/table.blade.php ENDPATH**/ ?>