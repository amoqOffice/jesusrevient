<li class="menu-title">
    <span>CONTENU</span>
</li>
<li class="{{ request()->is('admin/accueil') ? 'active' : '' }}">
    <a href="{{ route('back.home') }}">
        <i class="fe fe-home text-primary"></i>
        <span>Accueil</span>
    </a>
</li>

{{-- Activites --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Activites</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/activites/create') ? 'active' : '' }}" href="{{ route('back.activite.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/activites/index') ? 'active' : '' }}" href="{{ route('back.activite.index') }}">Liste</a></li>
    </ul>
</li>

{{-- Types --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Types</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/types/create') ? 'active' : '' }}" href="{{ route('back.type.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/types/index') ? 'active' : '' }}" href="{{ route('back.type.index') }}">Liste</a></li>
    </ul>
</li>

{{-- Eglises --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Eglises</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/eglises/create') ? 'active' : '' }}" href="{{ route('back.eglise.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/eglises/index') ? 'active' : '' }}" href="{{ route('back.eglise.index') }}">Liste</a></li>
    </ul>
</li>

{{-- Responsables --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Responsables</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/responsables/create') ? 'active' : '' }}" href="{{ route('back.responsable.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/responsables/index') ? 'active' : '' }}" href="{{ route('back.responsable.index') }}">Liste</a></li>
    </ul>
</li>

{{-- Rubriques --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Rubriques</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/rubriques/create') ? 'active' : '' }}" href="{{ route('back.rubrique.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/rubriques/index') ? 'active' : '' }}" href="{{ route('back.rubrique.index') }}">Liste</a></li>
    </ul>
</li>

{{-- Membres --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Membres</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/membres/create') ? 'active' : '' }}" href="{{ route('back.membre.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/membres/index') ? 'active' : '' }}" href="{{ route('back.membre.index') }}">Liste</a></li>
    </ul>
</li>

{{-- Categories --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Categories</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/categories/create') ? 'active' : '' }}" href="{{ route('back.categorie.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/categories/index') ? 'active' : '' }}" href="{{ route('back.categorie.index') }}">Liste</a></li>
    </ul>
</li>

{{-- Articles --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Articles</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/articles/create') ? 'active' : '' }}" href="{{ route('back.article.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/articles/index') ? 'active' : '' }}" href="{{ route('back.article.index') }}">Liste</a></li>
    </ul>
</li>

{{-- Tags --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Tags</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/tags/create') ? 'active' : '' }}" href="{{ route('back.tag.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/tags/index') ? 'active' : '' }}" href="{{ route('back.tag.index') }}">Liste</a></li>
    </ul>
</li>

{{-- Commentaires --}}
<li class="submenu my-2">
    <a href="#"><i class="fa fa-home"></i> <span> Commentaires</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="{{ request()->is('admin/commentaires/create') ? 'active' : '' }}" href="{{ route('back.commentaire.create') }}">Ajouter</a></li>
        <li><a class="{{ request()->is('admin/commentaires/index') ? 'active' : '' }}" href="{{ route('back.commentaire.index') }}">Liste</a></li>
    </ul>
</li>
