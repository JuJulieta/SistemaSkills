

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            SubCategoría
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($subCategoria, ['route' => ['subCategorias.update', $subCategoria->scat_id], 'method' => 'patch']); ?>


                        <?php echo $__env->make('sub_categorias.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- Cat Id Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('cat_nombre', 'Categoría'); ?>


                            <select name="cat_id"class="form-control" style="width: 100%" id="cat_id">
                                <option value="0">--Seleccionar Categoría--</option>        
                                <?php $__currentLoopData = $lst_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option name="cat_id"value="<?php echo e($categoria['cat_id']); ?>" <?php echo e(($subCategoria->cat_id === $categoria->cat_id) ? 'selected':''); ?>><?php echo e($categoria['cat_nombre']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

                            <a href="<?php echo e(route('subCategorias.index')); ?>" class="btn btn-default">Cancelar</a>
                        </div> 



                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/sub_categorias/edit.blade.php ENDPATH**/ ?>