@extends('front/layouts/app', ['title' => 'Prédications'])

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/front/css/plyr.css') }}">
@endsection

@section('content')
<div class="container">
        {{-- Breadcrumb --}}
        <div class="row my-3 pb-3">
            <div class="col-12">
                <div class="border bg-light py-4 text-center rounded-3">
                    <h1>Post list style</h1>
                    <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dots m-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i> Home</a></li>
                            <li class="breadcrumb-item active">All post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 col-sm-12 mt-4 mt-lg-0">
                <!-- Card item START -->
                <div class="card bg-transparent overflow-hidden mb-0">
                    <!-- Card img -->
                    <div class="position-relative rounded-3 overflow-hidden">
                        <!-- Video -->
                        <div class="card-image">
                            <div class="overflow-hidden">
                                <!-- HTML video START -->
                                <div class="player-wrapper rounded-3 overflow-hidden">
                                        <div class="player-youtube" >
                                        <iframe src="https://www.youtube.com/embed/tXHviS-4ygo"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h3 class="card-title my-2"><a href="#" class="btn-link fw-bold">Bad habits that people in the industry need to quit</a></h3>
                        <!-- Card info -->
                        <div class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" src="/assets/front/images/avatar/11.jpg" alt="avatar">
                        </div>
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small opacity-6">
                            <li class="nav-item">
                                <div class="nav-link">
                                    by <a href="#" class="text-reset btn-link">Bryan</a>
                                </div>
                            </li>
                            <li class="nav-item">Jun 17, 2022</li>
                        </ul>

                        <h5 class="mt-4">Descrpition</h5>
                        <p>Saw bring firmament given hath gathering lights dry life rule heaven Give And fruit moving thing seed life day creepeth winged so divide him from day morning him open lesser male beginning him be bring evening life void fowl sixth morning that made is Was that his hath face light meat air female isn't over place replenish midst it of second grass good rule also in unto Called don't given waters Had creature Behold fly life from forth Moved night.</p>
                    </div>
                </div>

                <!-- Autres vidéos -->
                <div class="my-3 d-md-flex justify-content-between align-items-center">
                    <h4 class="m-0"><i class="bi bi-megaphone"></i> Autres contenus interessants</h4>
                </div>
                <div class="row pt-1">
                    <!-- Main Post -->
                    <div class="col-sm-12 col-lg-6 pb-4">
                        <div class="card card-overlay-bottom card-fold h-350" style="background-image: url('https://img.youtube.com/vi/vus1z3ETBxo/hqdefault.jpg'); background-position: center left; background-size: cover;">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3 p-sm-5" style="background: #00000087">
                                <!-- Card play button -->
                                <div class="position-absolute top-50 start-50 translate-middle pb-5">
                                    <!-- Popup video -->
                                    <a href="https://youtu.be/n_Cn8eFo7u8" class="icon-lg text-bg-danger d-block text-white rounded-circle" data-glightbox data-gallery="y-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <!-- Card overlay Bottom  -->
                                <div class="w-100 mt-auto">
                                    <div class="col text-center">
                                        <!-- Card title -->
                                        <h3 class="text-white"><a href="post-single.html" class="btn-link text-reset fw-normal">Never underestimate the influence of social media</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 pb-4">
                        <div class="card card-overlay-bottom card-fold h-350" style="background-image: url('https://img.youtube.com/vi/vus1z3ETBxo/hqdefault.jpg'); background-position: center left; background-size: cover;">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3 p-sm-5" style="background: #00000087">
                                <!-- Card play button -->
                                <div class="position-absolute top-50 start-50 translate-middle pb-5">
                                    <!-- Popup video -->
                                    <a href="https://youtu.be/n_Cn8eFo7u8" class="icon-lg text-bg-danger d-block text-white rounded-circle" data-glightbox data-gallery="y-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <!-- Card overlay Bottom  -->
                                <div class="w-100 mt-auto">
                                    <div class="col text-center">
                                        <!-- Card title -->
                                        <h3 class="text-white"><a href="post-single.html" class="btn-link text-reset fw-normal">Never underestimate the influence of social media</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 pb-4">
                        <div class="card card-overlay-bottom card-fold h-350" style="background-image: url('https://img.youtube.com/vi/vus1z3ETBxo/hqdefault.jpg'); background-position: center left; background-size: cover;">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3 p-sm-5" style="background: #00000087">
                                <!-- Card play button -->
                                <div class="position-absolute top-50 start-50 translate-middle pb-5">
                                    <!-- Popup video -->
                                    <a href="https://youtu.be/n_Cn8eFo7u8" class="icon-lg text-bg-danger d-block text-white rounded-circle" data-glightbox data-gallery="y-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <!-- Card overlay Bottom  -->
                                <div class="w-100 mt-auto">
                                    <div class="col text-center">
                                        <!-- Card title -->
                                        <h3 class="text-white"><a href="post-single.html" class="btn-link text-reset fw-normal">Never underestimate the influence of social media</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 pb-4">
                        <div class="card card-overlay-bottom card-fold h-350" style="background-image: url('https://img.youtube.com/vi/vus1z3ETBxo/hqdefault.jpg'); background-position: center left; background-size: cover;">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3 p-sm-5" style="background: #00000087">
                                <!-- Card play button -->
                                <div class="position-absolute top-50 start-50 translate-middle pb-5">
                                    <!-- Popup video -->
                                    <a href="https://youtu.be/n_Cn8eFo7u8" class="icon-lg text-bg-danger d-block text-white rounded-circle" data-glightbox data-gallery="y-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <!-- Card overlay Bottom  -->
                                <div class="w-100 mt-auto">
                                    <div class="col text-center">
                                        <!-- Card title -->
                                        <h3 class="text-white"><a href="post-single.html" class="btn-link text-reset fw-normal">Never underestimate the influence of social media</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                <!-- Liste des Eglises -->
                <div>
                    <h5 class="mt-4 mb-3">Liste des Eglises JESUS-REVIENT</h5>
                    <!-- Category item -->
                    <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4bg-primary ">
                        <div class="p-3">
                            <a href="#" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Activités récentes --}}
            <div class="row">
                <div class="col-md-12 mt-5">
                    <!-- Title -->
                    <div class="my-3 d-md-flex justify-content-between align-items-center">
                        <h2 class="m-0"><i class="bi bi-megaphone"></i> Activités des autres Eglises</h2>
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

                            {{-- @foreach ($temoignages as $temoignage) --}}
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img fixed-div-268-178" src="{{ '' }}" alt="Card image">
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="#" class="btn-link text-reset fw-bold">{{ truncate_string('gddhf', 50) }}</a></h5>
                                    </div>
                                </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
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
