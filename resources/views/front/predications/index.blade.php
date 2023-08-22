@extends('front/layouts/app', ['title' => 'Prédications'])

@php
    $tags = App\Tag::limit(5)->get();
    $categories = App\Categorie::limit(5)->get();
@endphp

@section('content')

<section class="pt-0 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{-- Breadcrumb --}}
                <div class="border bg-light p-4 mb-2 text-center rounded-3">
                    <h1>Prédications</h1>
                    <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dots m-0">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="bi bi-home me-1"></i> Accueil
                                </a>
                            </li>
                            <li class="breadcrumb-item active"> Hello</li>
                        </ol>
                    </nav>
                </div>

                {{-- <div class="container" data-sticky> --}}
                <div class="container pt-2">
                    {{-- Title --}}
                    <div class="my-3 d-md-flex justify-content-between align-items-center">
                        <h2 class="m-0"><i class="bi bi-megaphone"></i> Prédications récentes</h2>
                    </div>
                    <div class="row pt-1">
                        <!-- Main Post -->
                        <div class="col-lg-9">
                            <div class="row">
                                @foreach ($predications as $predication)
                                {{-- @dd($predication) --}}
                                <div class="col-sm-12 col-lg-6 pb-4">
                                    <!-- Card img -->
                                    <div class="card">
                                        <div class="position-relative">
                                            <img class="card-img fixed-div-400-300" src="{{ asset("$predication->img") }}" alt="Card image">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay Top -->
                                                <div class="w-100 mb-auto d-flex justify-content-end">
                                                    <div class="text-end ms-auto">
                                                        <!-- Card format icon -->
                                                        <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle" title="Une vidéo est associée"><i class="fas fa-video"></i></div>
                                                    </div>
                                                </div>
                                                <!-- Card overlay bottom -->
                                                @if(!is_null($predication->tags->first()))
                                                    <div class="w-100 mt-auto">
                                                        <!-- Card category -->
                                                        <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{ $predication->tags->first()->nom ?? '' }}</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pt-3">
                                            <h4 class="card-title"><a href="post-single-4.html" class="btn-link text-reset fw-bold">{{ $predication->titre }}</a></h4>
                                            <p class="card-text">{{ truncate_string($predication->description, 150) }}</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="{{ asset('assets/front/images/_content/card_logo.png') }}" alt="avatar">
                                                            </div>
                                                            <span class="ms-3">par <a href="#" class="stretched-link text-reset btn-link">{{ $predication->responsables->first()->nom ?? '' }}</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">{{ date('d/m/Y', strtotime($predication->date_deb)) }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Side bar --}}
                        <div class="col-lg-3 mt-5 mt-lg-0">
                            <div>
                                <!-- Social widget START -->
                                <h4 class="mb-3">Réseaux sociaux</h4>
                                <div class="row g-2">
                                    <div class="col-4">
                                        <a href="#" class="bg-facebook rounded text-center text-white-force p-3 d-block">
                                            <i class="fab fa-facebook-square fs-5 mb-2"></i>
                                            <h6 class="m-0">1.5K</h6>
                                            <span class="small">Fans</span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
                                            <i class="fab fa-instagram fs-5 mb-2"></i>
                                            <h6 class="m-0">1.8M</h6>
                                            <span class="small">Followers</span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="bg-youtube rounded text-center text-white-force p-3 d-block">
                                            <i class="fab fa-youtube-square fs-5 mb-2"></i>
                                            <h6 class="m-0">22K</h6>
                                            <span class="small">Subs</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Trending topics widget START -->
                                @if(count($tags))
                                <div class="row g-2">
                                    <h4 class="mt-4 mb-3">Thèmes disponibles</h4>

                                    @foreach ($tags as $tag)
                                        <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 bg-primary bg-soft">
                                            <div class="p-3">
                                                <a href="#" class="stretched-link btn-link fw-bold text-white h5">{{ $tag->nom }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @endif

                                {{-- Catégories --}}
                                @if(count($categories))
                                <div class="row g-2 mt-5">
                                    <h5>Categories</h5>

                                    @foreach ($categories as $categorie)
                                    <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-15 rounded p-2 position-relative">
                                        <h6 class="m-0 text-dark">{{ $categorie->nom }}</h6>
                                        <a href="#" class="badge bg-primary text-light stretched-link">{{ count($categorie->activites) }}</a>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
