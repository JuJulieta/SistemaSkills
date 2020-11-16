

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Editar Skills
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($skills, ['route' => ['skills.update', $skills->skl_id], 'method' => 'patch']); ?>

                            <!-- SELECT CATEGORIA-->

                            <div class="form-group col-sm-6">
                            <?php echo Form::label('cat_nombre', 'Categoría'); ?>


                            <select name="cat_id" id="cat_id" class="form-control" style="width: 100%" onchange="seleccionarSubcategoria(this.options[this.selectedIndex].value);">
                                <option value="0">--Seleccionar Categoría--</option>                               
                                <?php $__currentLoopData = $lst_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($categoria['cat_id']); ?>" > <?php echo e($categoria['cat_nombre']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </select>

                        </div>
                        <!-- SELECT SUBCATEGORIA-->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('cat_nombre', 'Sub - Categoría'); ?>

                            <select name="scat_id" id="scat_id" class="form-control" style="width: 100%" >
                                <option value="0">--Seleccionar Sub Categoría--</option>
                               
                            </select>
                       
                        </div>

                        <!-- Skl Nombre Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('skl_nombre', 'Nombre'); ?>

                            <?php echo Form::text('skl_nombre', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]); ?>

                        </div>
                        <!-- Skl Descripcion Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            <?php echo Form::label('skl_descripcion', 'Descripcion'); ?>

                            <?php echo Form::textarea('skl_descripcion', null, ['class' => 'form-control']); ?>

                        </div>
                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

                            <a href="<?php echo e(route('skills.index')); ?>" class="btn btn-default">Cancelar</a>
                        </div>

                        <script type="text/javascript">
                            var arraCategorias = [];
                            var arraSubCategorias = [];
                                                    

                            //Cargamos la configuracion de sub-categorias
                            <?php $__currentLoopData = $lst_subCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                arraSubCategorias.push({
                                    id: <?php echo e($sub_categoria['scat_id']); ?>, 
                                    nombre: "<?php echo e($sub_categoria['scat_nombre']); ?>", 
                                    cat_id : <?php echo e($sub_categoria['cat_id']); ?>,
                                    skills: [],
                                    total_skills: 0
                                });
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            //Cargamos la configuracion de categorias
                            <?php $__currentLoopData = $lst_categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                arraCategorias.push({
                                    id: <?php echo e($categoria['cat_id']); ?>, 
                                    nombre: "<?php echo e($categoria['cat_nombre']); ?>", 
                                    sub_categoria: [],
                                    total_skills: 0, 
                                    enable: false
                                });    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            //Unimos cada sub-categoria a las categorias
                            arraSubCategorias.forEach(function(data){
                                const categoria = arraCategorias.find(search => search.id === data.cat_id);
                                categoria.sub_categoria.push(data);
                                categoria.total_skills = categoria.total_skills + data.total_skills;
                            });
                            
                            //Cargando categorias y subcategorias seleccionadas
                            var subCategoriaSeleccionada = <?php echo e($skills->scat_id); ?>;
                            var categoriaSeleccionada= null;
                            //console.log(subCategoriaSeleccionada);

                            if(subCategoriaSeleccionada){       

                                const subCategoriaSel = arraSubCategorias.find(search => search.id === subCategoriaSeleccionada);
                                document.getElementById("cat_id").value =subCategoriaSel.cat_id;
                                seleccionarSubcategoria(subCategoriaSel.cat_id);
                                document.getElementById("scat_id").value =subCategoriaSel.id;

                            }
                            
                            //Cargamos combobox_Subcategoria según la Categoria seleccionada
                            function seleccionarSubcategoria(id_categoria){

                                const categoria = arraCategorias.find(search => search.id === parseInt(id_categoria));
                                document.getElementById("scat_id").innerHTML="";

                                //sub_categoria.innerHTML="";

                                var option = document.createElement("option");

                                option.setAttribute("id", 0);
                                option.setAttribute("value", "--Seleccionar Sub Categoría--");
                                option.appendChild(document.createTextNode('--Seleccionar Sub Categoría--'));
                                document.getElementById("scat_id").appendChild(option);

                                for(var i=0; i < categoria.sub_categoria.length; i++){
                                    const sub = categoria.sub_categoria[i];
                                    
                                    var option = document.createElement("option");

                                    option.setAttribute("id", sub.id);
                                    option.setAttribute("value", sub.id);
                                    option.appendChild(document.createTextNode(sub.nombre));
                                    document.getElementById("scat_id").appendChild(option)
                                }
                                
                            }

                        </script>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/skills/edit.blade.php ENDPATH**/ ?>