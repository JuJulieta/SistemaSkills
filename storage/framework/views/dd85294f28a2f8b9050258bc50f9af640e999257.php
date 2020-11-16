<li class="<?php echo e(Request::is('consultors*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('consultors.index')); ?>"><i class="fa fa-edit"></i><span>Consultores</span></a>
</li>

<li class="<?php echo e(Request::is('skills*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('skills.index')); ?>"><i class="fa fa-edit"></i><span>Skills</span></a>
</li>

<li class="<?php echo e(Request::is('skillsConsultores*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('skillsConsultores.index')); ?>"><i class="fa fa-edit"></i><span>Skills Consultores</span></a>
</li>

<li class="<?php echo e(Request::is('categorias*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('categorias.index')); ?>"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="<?php echo e(Request::is('subCategorias*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('subCategorias.index')); ?>"><i class="fa fa-edit"></i><span>Sub Categorias</span></a>
</li>

<li class="<?php echo e(Request::is('perfils*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('perfils.index')); ?>"><i class="fa fa-edit"></i><span>Perfiles</span></a>
</li>

<li class="<?php echo e(Request::is('nivels*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('nivels.index')); ?>"><i class="fa fa-edit"></i><span>Niveles</span></a>
</li>

<li class="<?php echo e(Request::is('perfilSkills*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('perfilSkills.index')); ?>"><i class="fa fa-edit"></i><span>Perfil Skills</span></a>
</li>

<?php /**PATH /var/www/demo/resources/views/layouts/menu.blade.php ENDPATH**/ ?>