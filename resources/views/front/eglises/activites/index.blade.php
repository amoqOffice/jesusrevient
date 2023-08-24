@extends('front/layouts/app', ['title' => 'Prédications'])

@php
    $eglises = App\Eglise::limit(5)->get();
@endphp

@section('content')
<section class="pt-0 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- <div class="container" data-sticky> --}}

                    {{-- Breadcrumb --}}
                    <div class="row mt-3 mb-4 pb-3">
                        <div class="col-12">
                            <div class="border bg-light py-4 text-center rounded-3">
                                <h1>Les {{ $typePrincipal }}s</h1>
                                {{-- <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-dots m-0">
                                        <li class="breadcrumb-item"><a href="#"><i class="bi bi-house me-1"></i> Accueil</a></li>
                                        <li class="breadcrumb-item active">All post</li>
                                    </ol>
                                </nav> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row pt-1">
                        <div class="col-lg-9">
                            <div class="row">
                                {{-- Title --}}
                                <div class="mb-3 d-md-flex justify-content-between align-items-center">
                                    <h4 class="m-0"><i class="bi bi-megaphone"></i>  {{ $typePrincipal }} : Vidéos récentes</h4>
                                </div>

                                @foreach ($activites as $activite)
                                    <div class="col-sm-12 col-lg-6 pb-4">
                                        <div class="card card-overlay-bottom card-fold h-350" style="background-image: url('{{ asset($activite->img) }}'); background-position: center left; background-size: cover;">
                                            <!-- Card Image overlay -->
                                            <div class="card-img-overlay d-flex flex-column p-3 p-sm-5" style="background: #00000087">
                                                <!-- Card play button -->
                                                <div class="position-absolute top-50 start-50 translate-middle pb-5">
                                                    <!-- Popup video -->
                                                    <a href="{{ $activite->url }}" class="icon-lg text-bg-danger d-block text-white rounded-circle" data-glightbox data-gallery="y-video">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                </div>
                                                <!-- Card overlay Bottom  -->
                                                <div class="w-100 mt-auto">
                                                    <div class="col text-center">
                                                        <!-- Card title -->
                                                        <h4 class="text-white"><a href="{{ route('front.eglises.activites.show', [$typePrincipal, $activite->id]) }}" class="btn-link text-reset text-capitalize fw-normal">{{ str_format(str_limit($activite->titre, 40)) }}</a></h4>
                                                    </div>
                                                </div>
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

                                {{-- Catégories --}}
                                @if(count($eglises))
                                <div class="row g-2 mt-4">
                                    <h5>Eglise JESUS-REVIENT</h5>

                                    @foreach ($eglises as $eglise)
                                    <div class="d-flex justify-content-between align-items-center bg-success bg-opacity-15 rounded p-2 position-relative">
                                        <h6 class="m-0 text-dark">{{ $eglise->nom }}</h6>
                                        {{-- <a href="#" class="badge bg-primary text-light stretched-link">{{ count($categorie->activites) }}</a> --}}
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
</section>
@endsection
