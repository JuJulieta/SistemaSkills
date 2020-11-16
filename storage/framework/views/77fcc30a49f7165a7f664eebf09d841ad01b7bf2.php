<div class="table-responsive">
    <table class="table table-bordered table-striped" id="skillsConsultores-table">
        <thead>
            <tr>
                <th>Consultor</th>
                <th>Skill</th>
                <th>Nivel</th>
                <th>Comentario</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $skillsConsultores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skillsConsultores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php $__currentLoopData = $lst_consultores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($consultor->con_id == $skillsConsultores->con_id): ?>
                            <?php echo e($consultor->con_nombres); ?> <?php echo e($consultor->con_apellidos); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <?php $__currentLoopData = $lst_skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($skill->skl_id == $skillsConsultores->skl_id): ?>
                            <?php echo e($skill->skl_nombre); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <?php $__currentLoopData = $lst_niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($nivel->nvl_id == $skillsConsultores->nvl_id): ?>
                            <?php echo e($nivel->nvl_nombre); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td><?php echo e($skillsConsultores->csk_comentario); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['skillsConsultores.destroy', $skillsConsultores->csk_id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('skillsConsultores.show', [$skillsConsultores->csk_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('skillsConsultores.edit', [$skillsConsultores->csk_id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\HELP\v1\sistema_skills-master\resources\views/skills_consultores/table.blade.php ENDPATH**/ ?>