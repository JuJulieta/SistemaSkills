
<?php if(Auth::user()->hasRole('Consultor')||Auth::user()->hasRole('Evaluador') ): ?>
<li class="treeview">
    <a href="#">
    <i class="fa fa-star-o text-yellow"></i> <span>Mi Perfil</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo e(Request::is('misskills*') ? 'active' : ''); ?>">
        <a href="<?php echo e(route('misskills.index')); ?>"><i class="fa fa-signal"></i><span>Mis Skills</span></a>
        </li>
        <li class="<?php echo e(Request::is('cursoConsultors*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('cursoConsultors.index')); ?>"><i class="fa fa-signal"></i><span>Mis Cursos</span></a>
        </li>

        <li class="">
        <a href="#"><i class="fa fa-signal"></i><span>Mi Nivel</span></a>
        </li>
    </ul>
</li>
<?php endif; ?>

<?php if(Auth::user()->hasRole('Evaluador') || Auth::user()->hasRole('Administrador')): ?>
<li class="treeview">
    <a href="#">
    <i class="fa fa-group"></i> <span>Gestión</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo e(Request::is('skillsConsultores.table') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('skillsConsultores.index')); ?>"><i class="fa fa-puzzle-piece"></i><span>Skills Consultor</span></a>
        </li>
        <li class="<?php echo e(Request::is('skillsConsultores.buscar') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('skillsConsultores.create')); ?>"><i class="fa fa-puzzle-piece"></i><span>Busqueda Skills Consultor</span></a>
        </li>
        <li class="<?php echo e(Request::is('cursoConsultors*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('cursoConsultors.index')); ?>"><i class="fa fa-puzzle-piece"></i><span>Cursos Consultors</span></a>
        </li>

        <li class="<?php echo e(Request::is('cursoSkills*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('cursoSkills.index')); ?>"><i class="fa fa-puzzle-piece"></i><span>Curso Skills</span></a>
        </li>
        <li class="<?php echo e(Request::is('perfils*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('perfils.index')); ?>"><i class="fa fa-puzzle-piece"></i><span>Perfiles</span></a>
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
    <i class="fa fa-gears"></i> <span>Mantenedores</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo e(Request::is('categorias*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('categorias.index')); ?>"><i class="fa fa-edit"></i><span>Categorías</span></a>
        </li>

        <li class="<?php echo e(Request::is('subCategorias*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('subCategorias.index')); ?>"><i class="fa fa-edit"></i><span>SubCategorías</span></a>
        </li>
        <li class="<?php echo e(Request::is('skills*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('skills.index')); ?>"><i class="fa fa-edit"></i><span>Skills</span></a>
        </li>
        <li class="<?php echo e(Request::is('cursos*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('cursos.index')); ?>"><i class="fa fa-edit"></i><span>Cursos</span></a>
        </li>
        <li class="<?php echo e(Request::is('cargos*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('cargos.index')); ?>"><i class="fa fa-edit"></i><span>Cargos</span></a>
        </li>
        <li class="<?php echo e(Request::is('lineaServicios*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('lineaServicios.index')); ?>"><i class="fa fa-edit"></i><span>Líneas de Servicios</span></a>
        </li>
        <li class="<?php echo e(Request::is('nivels*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('nivels.index')); ?>"><i class="fa fa-edit"></i><span>Niveles</span></a>
        </li>
        <li class="<?php echo e(Request::is('consultors*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('consultors.index')); ?>"><i class="fa fa-edit"></i><span>Consultores</span></a>
        </li>
        <!--
        <li class="<?php echo e(Request::is('perfils*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('perfils.index')); ?>"><i class="fa fa-edit"></i><span>Perfil</span></a>
        </li>
        <li class="<?php echo e(Request::is('io_generator_builder*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('io_generator_builder')); ?>"><i class="fa fa-edit"></i><span>Gui Builder</span></a>
        </li>-->

    </ul>
</li>
<?php endif; ?>











<?php /**PATH C:\xampp\htdocs\sistema_skills\resources\views/layouts/menu.blade.php ENDPATH**/ ?>