<div class="table-responsive">
    <table class="table table-bordered table-striped" id="skillsConsultores-table">
        <thead>
            <tr>
                <th>Consultor</th>
                <th>Skill</th>
                <th>Nivel</th>
                <th>Comentario</th>
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

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/skills_consultores/table.blade.php ENDPATH**/ ?>