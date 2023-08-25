@extends('front/layouts/app', ['title' => 'Prédications'])

@php
    $autresActivites = $typePrincipal->activites;
@endphp

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/front/css/plyr.css') }}">
@endsection

@section('content')
<div class="container">
        {{-- Breadcrumb --}}
        <div class="row my-3 pb-3">
            <div class="col-12">
                <div class="border bg-light py-4 text-center rounded-3">
                    <h1>Détails sur {{ $typePrincipal->nom }}</h1>
                    <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dots m-0">
                            {{-- <li class="breadcrumb-item"><a href="#"><i class="bi bi-house me-1"></i> Home</a></li>
                            <li class="breadcrumb-item active">All post</li> --}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row mt-sm-0">
            <div class="col-lg-9 col-sm-12 mt-0 mt-lg-0">
                <!-- Card item START -->
                <div class="card bg-transparent overflow-hidden mb-0">
                    <!-- Card img -->
                    <div class="position-relative rounded-3 overflow-hidden">
                        <!-- Video -->
                        <div class="card-image">
                            <div class="overflow-hidden">
                                <!-- HTML video START -->
                                {{-- @dd(getYoutubeEmbedLink($activite->url)) --}}
                                <div class="player-wrapper rounded-3 overflow-hidden">
                                        <div class="player-youtube" >
                                        <iframe src="{{ getYoutubeEmbedLink($activite->url) }}"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body px-0 pt-3">
                        {{-- Titre --}}
                        <h3 class="card-title my-2">{{ str_format($activite->titre) }}</h3>
                        {{-- Par JESUS-REVIENT² --}}
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/front/images/_content/card_logo.png') }}" alt="avatar">
                                        </div>
                                        <span class="ms-2">par
                                            <a href="{{ $activite->url }}" target="_blank" class="pl-1 text-reset btn-link">JESUS-REVIENT TV</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">{{ date('d/m/Y', strtotime($activite->date_deb)) }}</li>
                        </ul>

                        @if (strlen($activite->description))
                            <h5 class="mt-4">Descrpition</h5>
                            <p>{{ $activite->description }}.</p>
                        @endif
                    </div>
                </div>


            </div>

            {{-- Side bar --}}
            <div class="col-lg-3">
                <!-- Categories -->
                <!-- Social widget START -->
                <h4 class="mb-3">Réseaux sociaux</h4>
                <div class="row g-2">
                    <div class="col-4">
                        <a href="https://www.youtube.com/@JESUSREVIENTTV?sub_confirmation=1" target="_blank" class="bg-youtube rounded text-center text-white-force p-3 d-block">
                            <i class="fab fa-youtube-square fs-5 mb-2"></i>
                            <h6 class="m-0">73k</h6>
                            <span class="small">Subs</span>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="https://web.facebook.com/groupejesusrevient?_rdc=1&_rdr" target="_blank" class="bg-facebook rounded text-center text-white-force p-3 d-block">
                            <i class="fab fa-facebook-square fs-5 mb-2"></i>
                            <h6 class="m-0">7.3K</h6>
                            <span class="small">Fans</span>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="https://t.me/jesusrevient_tv" target="_blank" class="bg-telegram rounded text-center text-white-force p-3 d-block">
                            <i class="fab fa-telegram fs-5 mb-2"></i>
                            <h6 class="m-0">807</h6>
                            <span class="small">Subs</span>
                        </a>
                    </div>
                </div>

                <!-- Liste des Eglises -->
                <div>
                    <h5 class="mt-4 mb-3">Eglises JESUS-REVIENT</h5>
                    <!-- Category item -->
                    <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4bg-primary ">
                        <div class="p-3">
                            <a href="#" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Autres vidéos -->
            <div class="mt-5 mb-3 d-md-flex justify-content-between align-items-center">
                <h4 class="m-0"><i class="bi bi-megaphone"></i> Autres contenues interessants</h4>
            </div>
            <div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round">
                <div class="tiny-slider-inner"
                    data-autoplay="true"
                    data-hoverpause="true"
                    data-gutter="24"
                    data-arrow="true"
                    data-dots="false"
                    data-items-xl="4"
                    data-items-md="3"
                    data-items-sm="2"
                    data-items-xs="1">

                    @foreach ($autresActivites as $autreActivite)
                        <div class="card">
                            <a href="{{ route('front.eglises.activites.show', [$typePrincipal->nom, $autreActivite->id]) }}">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" style="height: 13rem" src="{{ $autreActivite->img }}" alt="{{ str_format($autreActivite->titre) }}">
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h5 class="card-title text-center"><a href="{{ route('front.eglises.activites.show', [$typePrincipal->nom, $autreActivite->id]) }}" class="btn-link text-reset fw-bold">{{ truncate_string(str_format($autreActivite->titre), 50) }}</a></h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('assets/front/js/plyr.js') }}"></script>
    <script>

    </script>
@endsection
