<div class="d-flex justify-content-between align-items-center bg-{{ $categorie->color ?? 'dark' }} bg-opacity-10 rounded p-2 position-relative">
    <h6 class="m-0 text-{{ $categorie->color ?? 'dark' }}">{{ $categorie->title }}</h6>
    <a href="#" class="badge bg-{{ $categorie->color ?? 'dark' }} stretched-link">{{ $categorie->counter }}</a>
</div>
