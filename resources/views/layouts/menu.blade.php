
@if(Auth::user()->hasRole('Consultor')||Auth::user()->hasRole('Evaluador') )
<li class="treeview">
    <a href="#">
    <i class="fa fa-star-o text-yellow"></i> <span>Mi Perfil</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('misskills*') ? 'active' : '' }}">
        <a href="{{ route('misskills.index') }}"><i class="fa fa-signal"></i><span>Mis Skills</span></a>
        </li>
        <li class="{{ Request::is('cursoConsultors*') ? 'active' : '' }}">
            <a href="{{ route('cursoConsultors.index') }}"><i class="fa fa-signal"></i><span>Mis Cursos</span></a>
        </li>

        <li class="">
        <a href="#"><i class="fa fa-signal"></i><span>Mi Nivel</span></a>
        </li>
    </ul>
</li>
@endif

@if(Auth::user()->hasRole('Evaluador') || Auth::user()->hasRole('Administrador'))
<li class="treeview">
    <a href="#">
    <i class="fa fa-group"></i> <span>Gestión</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('skillsConsultores.table') ? 'active' : '' }}">
            <a href="{{ route('skillsConsultores.index') }}"><i class="fa fa-puzzle-piece"></i><span>Skills Consultor</span></a>
        </li>
        <li class="{{ Request::is('skillsConsultores.buscar') ? 'active' : '' }}">
            <a href="{{ route('skillsConsultores.create') }}"><i class="fa fa-puzzle-piece"></i><span>Busqueda Skills Consultor</span></a>
        </li>
        <li class="{{ Request::is('cursoConsultors*') ? 'active' : '' }}">
            <a href="{{ route('cursoConsultors.index') }}"><i class="fa fa-puzzle-piece"></i><span>Cursos Consultors</span></a>
        </li>

        <li class="{{ Request::is('cursoSkills*') ? 'active' : '' }}">
            <a href="{{ route('cursoSkills.index') }}"><i class="fa fa-puzzle-piece"></i><span>Curso Skills</span></a>
        </li>
        <li class="{{ Request::is('perfils*') ? 'active' : '' }}">
            <a href="{{ route('perfils.index') }}"><i class="fa fa-puzzle-piece"></i><span>Perfiles</span></a>
        </li>
        <li class="{{ Request::is('io_generator_builder*') ? 'active' : '' }}">
            <a href="{{ route('io_generator_builder') }}"><i class="fa fa-edit"></i><span>Gui Builder</span></a>
        </li>
    </ul>
</li>
@endif

@if(Auth::user()->hasRole('Administrador'))
<li class="treeview">
    <a href="#">
    <i class="fa fa-gears"></i> <span>Mantenedores</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('categorias*') ? 'active' : '' }}">
            <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Categorías</span></a>
        </li>

        <li class="{{ Request::is('subCategorias*') ? 'active' : '' }}">
            <a href="{{ route('subCategorias.index') }}"><i class="fa fa-edit"></i><span>SubCategorías</span></a>
        </li>
        <li class="{{ Request::is('skills*') ? 'active' : '' }}">
            <a href="{{ route('skills.index') }}"><i class="fa fa-edit"></i><span>Skills</span></a>
        </li>
        <li class="{{ Request::is('cursos*') ? 'active' : '' }}">
            <a href="{{ route('cursos.index') }}"><i class="fa fa-edit"></i><span>Cursos</span></a>
        </li>
        <li class="{{ Request::is('cargos*') ? 'active' : '' }}">
            <a href="{{ route('cargos.index') }}"><i class="fa fa-edit"></i><span>Cargos</span></a>
        </li>
        <li class="{{ Request::is('lineaServicios*') ? 'active' : '' }}">
            <a href="{{ route('lineaServicios.index') }}"><i class="fa fa-edit"></i><span>Líneas de Servicios</span></a>
        </li>
        <li class="{{ Request::is('nivels*') ? 'active' : '' }}">
            <a href="{{ route('nivels.index') }}"><i class="fa fa-edit"></i><span>Niveles</span></a>
        </li>
        <li class="{{ Request::is('consultors*') ? 'active' : '' }}">
            <a href="{{ route('consultors.index') }}"><i class="fa fa-edit"></i><span>Consultores</span></a>
        </li>
        <!--
        <li class="{{ Request::is('perfils*') ? 'active' : '' }}">
            <a href="{{ route('perfils.index') }}"><i class="fa fa-edit"></i><span>Perfil</span></a>
        </li>
        <li class="{{ Request::is('io_generator_builder*') ? 'active' : '' }}">
            <a href="{{ route('io_generator_builder') }}"><i class="fa fa-edit"></i><span>Gui Builder</span></a>
        </li>-->

    </ul>
</li>
@endif











