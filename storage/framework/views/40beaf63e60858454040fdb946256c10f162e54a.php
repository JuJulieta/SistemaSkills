<?php if(Auth::user()->hasRole('Consultor')): ?>
<li class="<?php echo e(Request::is('misskills*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('misskills.index')); ?>"><i class="fa fa-circle-o text-red"></i><span>Mis Skills</span></a>
</li>
<?php endif; ?>

<?php if(Auth::user()->hasRole('Administrador')): ?>
<li class="treeview">
    <a href="#">
    <i class="fa fa-dashboard"></i> <span>Administración</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-edit"></i><span>Usuarios</span></a>
        </li>    
        <li class="<?php echo e(Request::is('io_generator_builder*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('io_generator_builder')); ?>"><i class="fa fa-edit"></i><span>Gui Builder</span></a>
        </li>
    </ul>
</li>
<?php endif; ?>
<?php if(Auth::user()->hasRole('Administrador')): ?>
<li class="treeview">
    <a href="#">
    <i class="fa fa-table"></i> <span>Configuración</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
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
    </ul>
</li>
<?php endif; ?>


<li class="treeview">
    <a href="#">
    <i class="fa fa-pie-chart"></i>
    <span>Reportes</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
    </ul>
</li><?php /**PATH /var/www/skills_orbisdata/resources/views/layouts/menu.blade.php ENDPATH**/ ?>