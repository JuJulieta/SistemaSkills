<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Mis Skills</h1>
        <br /><br />
    </section>
    <div class="content">
        <div class="clearfix"></div>
        
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>
        
        <div class="box box-primary">
        <br />
        <span>&nbsp; Solicitar un texto que describa la actividad...:</span>
        <br />
            <div class="box-body">
                    <?php echo $__env->make('misskills.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/sistema_skills/resources/views/misskills/index.blade.php ENDPATH**/ ?>