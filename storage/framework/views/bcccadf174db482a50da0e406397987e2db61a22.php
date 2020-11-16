

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
        Línea de Servicio
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($lineaServicio, ['route' => ['lineaServicios.update', $lineaServicio->lsv_id], 'method' => 'patch']); ?>


                        <?php echo $__env->make('linea_servicios.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/linea_servicios/edit.blade.php ENDPATH**/ ?>