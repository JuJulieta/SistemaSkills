

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Roles de Usuario
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                   <?php echo Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']); ?>

                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('name', 'Nombre'); ?>

                        <?php echo Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly'=>true]); ?>

                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('email', 'Email'); ?>

                        <?php echo Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly'=>true]); ?>

                    </div>

                    <!-- Roles Field -->
                    <div class="form-group col-sm-6">
                        <?php echo Form::label('role[]', 'Roles   '); ?> <br />
                        <?php $__currentLoopData = $lst_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($user->hasRole($role->name)): ?>
                                <input type="checkbox" id="role" name="role[]" value="<?php echo e($role->id); ?>" checked> <?php echo e($role->name); ?></br>
                            <?php else: ?>
                                <input type="checkbox" id="role" name="role[]" value="<?php echo e($role->id); ?>"> <?php echo e($role->name); ?></br>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        <input  type="submit" value="Guardar" class="btn btn-primary" onclick="verificar();"></input>
                        <a href="<?php echo e(route('consultors.edit', [$user->id])); ?>" id="volver"class="btn btn-default" >Volver</a>                        
                    </div>
                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
   <script type="text/javascript">
    function verificar(){
    var suma = 0;
    var los_cboxes = document.getElementsByName('role[]'); 
    console.log(los_cboxes);
    for (var i = 0, j = los_cboxes.length; i < j; i++) {
        
        if(los_cboxes[i].checked == true){
        suma++;
        }
    }
    
    if(suma == 0){
    alert('Debe Seleccionar al menos un Rol.');
    return false;
    }else{      
        return true;
    }
    
    }
   </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/users/edit.blade.php ENDPATH**/ ?>