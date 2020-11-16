<br>
<div class="row">
    <?php echo Form::model("Buscar", ['route' => ['consultors.buscar'], 'method' => 'post']); ?>

    <div class="form-group col-sm-12">
        <?php echo Form::label('skl_nombre', 'Skills'); ?>

        <select id="skl_id" class="skl_id" name="opSkill[]" multiple="multiple" style="width: 100%" >
            <?php $__currentLoopData = $lst_skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($skills['skl_id']); ?>" <?php echo e($skills['selected']); ?> ><?php echo e($skills['skl_nombre']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group col-sm-12">
        <?php echo Form::submit('Buscar', ['class' => 'btn btn-primary']); ?>

    </div>
    <?php echo Form::close(); ?>

</div>
<br/>
    


<div class="table-responsive">
    <table class="table" id="consultors-table">
        <thead>
            <tr>
                <th>Nombre</th>     
                <th id="skl_1" style="color:grey; font-weight:normal">Skill</th>
                <th id="skl_2" style="color:grey; font-weight:normal">Skill</th>
                <th id="skl_3" style="color:grey; font-weight:normal">Skill</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbody_skills">
        <?php if($lst_resultado): ?>
        <?php $__currentLoopData = $lst_resultado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resultado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($resultado['con_nombres']); ?> <?php echo e($resultado['con_apellidos']); ?> </td>
            <td><?php echo e($resultado['skl_nombre_1']); ?></td>
            <td><?php echo e($resultado['skl_nombre_2']); ?></td>
            <td><?php echo e($resultado['skl_nombre_3']); ?></td>
            <td>Accion</td>
         </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>


<?php /**PATH /var/www/sistema_skills/resources/views/consultors/table.blade.php ENDPATH**/ ?>