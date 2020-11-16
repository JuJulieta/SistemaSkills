<div class="table-responsive">

    <div id="tabla_dinamica"></div>

    <script type="text/javascript">



        var arraCategorias = [];
        var arraSubCategorias = [];
        var arraSkills = [];
        var arraNiveles = [];
        var misSkills = [];

        //Cargamos skills del consultores
        <?php $__currentLoopData = $lst_skillsConsultor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mi_skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        misSkills.push({
            con_id : <?php echo e($mi_skill-> con_id); ?>,
            skl_id : <?php echo e($mi_skill-> skl_id); ?>,
            nvl_id : <?php echo e($mi_skill-> nvl_id); ?>

        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        //Cargamos la configuracion de niveles
        <?php $__currentLoopData = $lst_niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        arraNiveles.push({
            id: <?php echo e($nivel->nvl_id); ?>,
            nombre: "<?php echo e($nivel->nvl_nombre); ?>"
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        //Cargamos la configuracion de skills
        <?php $__currentLoopData = $lst_skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        arraSkills.push({
            id: <?php echo e($skill->skl_id); ?>,
            nombre: "<?php echo e($skill->skl_nombre); ?>", 
            scat_id: <?php echo e($skill->scat_id); ?>,
            nivel: {id: null,nombre: null}
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        //Cargamos la configuracion de sub-categorias
        <?php $__currentLoopData = $lst_subcatgorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

        //TODO VOLER A TRUE ENABLE

        //Unimos skills a cada sub-categoria y el nivel de la skill
        arraSkills.forEach(function(data){
            const sub_categoria = arraSubCategorias.find(search => search.id === data.scat_id);
            const nivel = misSkills.find(search => search.skl_id === data.id);
            if(nivel){
                data.nivel.id = nivel.nvl_id;
                const nivel_ = arraNiveles.find(search => search.id === nivel.nvl_id);
                data.nivel.nombre = nivel_.nombre;
            }
            sub_categoria.skills.push(data);
            sub_categoria.total_skills = sub_categoria.total_skills + 1;
        });

        //Unimos cada sub-categoria a las categorias
        arraSubCategorias.forEach(function(data){
            const categoria = arraCategorias.find(search => search.id === data.cat_id);
            categoria.sub_categoria.push(data);
            categoria.total_skills = categoria.total_skills + data.total_skills;
        });

        mostrarTabla(arraCategorias, arraNiveles);
        
        function mostrarTabla(data, niveles){                     
            var tabla   = document.createElement("table");
            tabla.setAttribute("class", "table table-bordered table-striped");
            tabla.setAttribute("id", "mis-skillsConsultores-table");
            
            var tblBody = document.createElement("tbody");
            var tbl_header = document.createElement("thead");

            //Titulos
            var arr_titulos = ["Categoria", "Sub Categoria", "Skill", "Nivel"];
            var row_titulo = document.createElement("tr");
            for(var x=0; x < arr_titulos.length; x++){
                var td = document.createElement("th");
                var valor_titulo = document.createTextNode(arr_titulos[x]);
                td.appendChild(valor_titulo);
                row_titulo.appendChild(td);
                tbl_header.appendChild(row_titulo);
            }

            //Datos
            for(var x=0; x < data.length; x++){
                const categoria = data[x];
                var x_primero = true;

                if(!categoria.enable){

                    //Creamos la fila   
                    var row = document.createElement("tr");

                    var celda_categoria = document.createElement("td");
                    celda_categoria.setAttribute("colspan", arr_titulos.length);        

                    if(categoria.total_skills > 0){
                        var icon_minus = document.createElement("i");
                        icon_minus.setAttribute("class", "glyphicon " + ( categoria.enable ? "glyphicon-minus" : "glyphicon-plus") );
                        icon_minus.setAttribute("onclick", "ocultarCategoria(" + categoria.id + ");");
                        celda_categoria.appendChild(icon_minus);
                    }
            
                    var valor_celda = document.createTextNode(" " + categoria.nombre);
                    celda_categoria.appendChild(valor_celda);     
                                        
                    //Agregamos la fila a la tabla
                    tblBody.appendChild(row);
                    row.appendChild(celda_categoria);

                    x_primero = false;    
                    continue;
                }

                for(var i=0; i < categoria.sub_categoria.length; i++){
                    const sub_categoria = categoria.sub_categoria[i];
                    var i_primero = true;
                    for(var z=0; z < sub_categoria.skills.length; z++){
                        const skill = sub_categoria.skills[z];

                        //Creamos la fila   
                        var row = document.createElement("tr");
                        
                        if(x_primero){
                            //Agregamos la columna Categoria
                            var celda_categoria = document.createElement("td");
                            celda_categoria.setAttribute("rowspan", categoria.total_skills);

                            var icon_minus = document.createElement("i");
                            icon_minus.setAttribute("class", "glyphicon glyphicon-minus");
                            icon_minus.setAttribute("onclick", "ocultarCategoria(" + categoria.id + ");");
                            var valor_celda = document.createTextNode(" " + categoria.nombre);
                            celda_categoria.appendChild(icon_minus);
                            celda_categoria.appendChild(valor_celda);

                            row.appendChild(celda_categoria);
                            x_primero = false;
                        }

                        if(i_primero){
                            //Agregamos la columna Sub-Categoria
                            var celda_sub_categoria = document.createElement("td");
                            celda_sub_categoria.setAttribute("rowspan", sub_categoria.total_skills);
                            var valor_celda_sub_categoria = document.createTextNode(sub_categoria.nombre);
                            celda_sub_categoria.appendChild(valor_celda_sub_categoria);
                            row.appendChild(celda_sub_categoria);
                            i_primero = false;
                        }

                        //Agregamos la columna Skills
                        var celda_skill = document.createElement("td");
                        var valor_celda_skill = document.createTextNode(skill.nombre);
                        celda_skill.appendChild(valor_celda_skill);
                        row.appendChild(celda_skill);

                        //Agregamos la columna Nivel
                        var celda_nivel = document.createElement("td");
                        
                        nivel_div = document.createElement("div");
                        nivel_div.setAttribute("class", "btn-group");

                        nivel_form = document.createElement("form");    

                        nivel_form.setAttribute("id", "frm_" + skill.id);



                        nivel_fieldset = document.createElement("fieldset");
                        nivel_fieldset.setAttribute("class", "col-sm-12");

                      

                        nivel_span = document.createElement("span");    
                        nivel_span.setAttribute("class", "star-cb-group");

                        var nombre_nivel = null;

                        for(var lvl = niveles.length -1; lvl >= 0; lvl--){
                            const nivel = niveles[lvl];
                            nivel_input = document.createElement("input");    
                            nivel_input.setAttribute("type", "radio");
                            nivel_input.setAttribute("id", "rating_" + skill.id + lvl);
                            nivel_input.setAttribute("name", "rating_" + skill.id);
                            nivel_input.setAttribute("value", lvl);
                            if(skill.nivel.id && skill.nivel.id === nivel.id){
                                nivel_input.setAttribute("checked", "checked");
                                nombre_nivel = skill.nivel.nombre;
                            }
                            nivel_input.setAttribute("onclick", "agregar_nivel(" + categoria.id + ", " + sub_categoria.id + "," + skill.id + ", " + nivel.id + ", '" + nivel.nombre + "');");
                            nivel_label = document.createElement("label");    
                            nivel_label.setAttribute("for", "rating_" + skill.id + lvl);
                            nivel_label.setAttribute("value", nivel);

                            nivel_span.appendChild(nivel_input);
                            nivel_span.appendChild(nivel_label);
                        }   

                        
                        var icon_remove = document.createElement("i");
                        icon_remove.setAttribute("class", "glyphicon glyphicon-remove-circle");
                        icon_remove.setAttribute("onclick", "alert('Eliminando');eliminar_nivel(" + categoria.id + ", " + sub_categoria.id + "," + skill.id +");");
                        nivel_span.appendChild(icon_remove);

                        nivel_fieldset.appendChild(nivel_span);

                        nivel_form.appendChild(nivel_fieldset);
                        
                        nivel_div.appendChild(nivel_form);


                        var span_texto = document.createElement("span");    
                        span_texto.setAttribute("id", "span_" + skill.id);                
                        var valor_celda_nivel = document.createTextNode(" " + ( nombre_nivel ? nombre_nivel : "n / a"));
                        span_texto.appendChild(valor_celda_nivel);
                        celda_nivel.appendChild(nivel_div);
                        celda_nivel.appendChild(span_texto);
                        row.appendChild(celda_nivel);

                        //Agregamos la fila a la tabla
                        tblBody.appendChild(row);
                    }                
                }
            }

            tabla.appendChild(tbl_header);
            tabla.appendChild(tblBody);

            document.getElementById("tabla_dinamica").innerHTML="";
            document.getElementById("tabla_dinamica").appendChild(tabla);
        }

        function ocultarCategoria(cat_id){
            const categoria = this.arraCategorias.find(search => search.id === cat_id);
            if(cat_id === categoria.id){
                
                categoria.enable = !categoria.enable;  
                this.mostrarTabla(this.arraCategorias, this.arraNiveles);
            } 
            return;
        }

        function agregar_nivel(categoria_id, sub_categoria_id, skill_id, nivel_id, nivel_nombre){
            var id = <?php echo e($user->id); ?>;

            var valor_celda_nivel = document.createTextNode(" " + nivel_nombre);
            document.getElementById("span_" + skill_id).innerHTML="";
            document.getElementById("span_" + skill_id).appendChild(valor_celda_nivel);

            //Actualizamos la lista
            const categoria = this.arraCategorias.find(search => search.id === parseInt(categoria_id));
            const sub_categoria = categoria.sub_categoria.find(search => search.id === parseInt(sub_categoria_id));
            const skill = sub_categoria.skills.find(search => search.id === parseInt(skill_id));

            skill.nivel.id = nivel_id;
            skill.nivel.nombre = nivel_nombre;
            //TODO Invocar una api que haga el seteo del valor en la base de datos.
            $.ajax({
                type: "PUT",
                url: '<?php echo e(url('')); ?>' + '/api/consultorSkill/' + id + '/' + skill_id + '/' + nivel_id ,
                dataType: "json",
                success: function (result, status, xhr) {
                    console.log(result);
                },
                error: function (xhr, status, error) {
                    //TODO mostrar error
                }
            });
        }

        function eliminar_nivel(categoria_id, sub_categoria_id,skill_id){
            //categoria_id, sub_categoria_id, skill_id, nivel_id, nivel_nombre
            var id = <?php echo e($user->id); ?>;
            console.log(id);
            var valor_celda_nivel = document.createTextNode(" n/a ");
            document.getElementById("span_" + skill_id).innerHTML="";
            document.getElementById("span_" + skill_id).appendChild(valor_celda_nivel);

            //Actualizamos la lista
            const categoria = this.arraCategorias.find(search => search.id === parseInt(categoria_id));
            const sub_categoria = categoria.sub_categoria.find(search => search.id === parseInt(sub_categoria_id));
            const skill = sub_categoria.skills.find(search => search.id === parseInt(skill_id));

            //TODO Invocar una api que haga el seteo del valor en la base de datos.
            $.ajax({
                type: "delete",
                url: '<?php echo e(url('')); ?>' + '/api/consultorSkill/' + id + '/' + skill_id ,
                dataType: "json",
                success: function (result, status, xhr) {
                    console.log(result);
                },
                error: function (xhr, status, error) {
                    //TODO mostrar error
                    console.log(result);
                }
            });
        }

    </script>

</div>
<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/misskills/table.blade.php ENDPATH**/ ?>