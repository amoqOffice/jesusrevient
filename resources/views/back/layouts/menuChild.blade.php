<li class="menu-title">
    <span>CONTENU</span>
</li>
<li class="{{ request()->is('admin/accueil') ? 'active' : '' }}">
    <a href="{{ route('back.home') }}">
        <i class="fe fe-home text-primary"></i>
        <span>Dashboard</span>
    </a>
</li>
{{-- Rubriques --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-tag"></i> <span> Rubriques</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/rubriques/create') ? 'active' : '' }}" href="{{ route('back.rubrique.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/rubriques/index') ? 'active' : '' }}" href="{{ route('back.rubrique.index') }}">Liste</a></li>
    </ul>
</li>
{{-- Rubriques --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-book"></i> <span> Rubriques</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/rubriques/create') ? 'active' : '' }}" href="{{ route('back.rubrique.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/rubriques/index') ? 'active' : '' }}" href="{{ route('back.rubrique.index') }}">Liste</a></li>
    </ul>
</li>
{{-- Rubriques --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-facebook"></i> <span> Rubriques</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/rubriques/create') ? 'active' : '' }}" href="{{ route('back.rubrique.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/rubriques/index') ? 'active' : '' }}" href="{{ route('back.rubrique.index') }}">Liste</a></li>
    </ul>
</li>
{{-- Rubriques --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-youtube"></i> <span> Rubriques</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/rubriques/create') ? 'active' : '' }}" href="{{ route('back.rubrique.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/rubriques/index') ? 'active' : '' }}" href="{{ route('back.rubrique.index') }}">Liste</a></li>
    </ul>
</li>
{{-- Activites --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Activites</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/activites/create') ? 'active' : '' }}" href="{{ route('back.activite.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/activites/index') ? 'active' : '' }}" href="{{ route('back.activite.index') }}">Liste</a></li>
    </ul>
</li>
