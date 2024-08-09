@extends('front/layouts/app', ['title' => 'Accueil'])

@section('style')
    <style>
        .btn-pulse {
            position: relative;
            width: 100px;
            height: 100px;
            border: none;
            box-shadow: 0 0 0 0 rgba(232, 76, 61, 0.7);
            border-radius: 50%;
            background-color: #e84c3d;
            /* background-image: url(http:YOUR-URL-IMAGE.png); */
            background-size: cover;
            background-repeat: no-repeat;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center; /* Centrer horizontalement et verticalement */
            -webkit-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            -moz-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            -ms-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        }

        .btn-pulse:hover {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            animation: none;
            background-color: blue;
        }
        @-webkit-keyframes pulse { to { box-shadow: 0 0 0 45px rgba(232, 76, 61, 0); } }
        @-moz-keyframes pulse { to { box-shadow: 0 0 0 45px rgba(232, 76, 61, 0); } }
        @-ms-keyframes pulse { to { box-shadow: 0 0 0 45px rgba(232, 76, 61, 0); } }
        @keyframes pulse { to { box-shadow: 0 0 0 45px rgba(232, 76, 61, 0); } }
    </style>
@endsection

@php
    // Reccupération des témoignages
    $temoignages = $types
        ->where('nom', utf8_encode('Temoignage'))
        ->first()
        ->activites()
        ->orderBy('date_deb', 'desc')
        ->get();

    // Reccupération des Enseignements
    $enseignements = $types->where('nom', 'Enseignement')->first()->activites()->orderBy('date_deb', 'desc')->paginate(4);

    // Reccupération des Tags
    $tags = DB::table('tags')->select('*')->get();

    // Programmes TV
    $rubriques = DB::table('rubriques')->select('*')->get();

    // Eglises JESUS-REVIENT
    $eglises = DB::table('eglises')->select('*')->get();
@endphp

@section('content')
    {{-- Banner --}}
    <section class="p-0 mb-4">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="mx-auto rounded-3 overflow-hidden">
                    <div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">
                        <div class="tiny-slider-inner"
                            data-autoplay="true"
                            data-hoverpause="true"
                            data-gutter="1"
                            data-arrow="true"
                            data-dots="false"
                            data-items="1">

                            <!-- Slide 1 -->
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{ asset('assets/front/images/_banner/banner-1.png') }}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Actualité</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a class="btn-link text-reset fw-normal">Le feu du réveil embrase tous les pays du monde entier🔥</a></h2>
                                            <p class="text-white">Tel un feu, le réveil enflamme le monde chaque jour, d'un bout à l'autre. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{ asset('assets/front/images/_banner/banner-2.png') }}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Actualité</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a class="btn-link text-reset fw-normal">💥La puissance de l'Evangile transforme les vies</a></h2>
                                            <p class="text-white">Des vies sont profondément transformées par la puissance de l'Evangile. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{ asset('assets/front/images/_banner/banner-3.png') }}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Actualié</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a class="btn-link text-reset fw-normal">Jésus-Christ prépare son Eglise pour l'enlèvement</a></h2>
                                            <p class="text-white">La fin des temps est proche, Rachetez le temps car les jours sont mauvais, soyez prêt. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        {{-- <section class="p-0">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="mx-auto rounded-3 overflow-hidden">
                        <div class="tiny-slider arrow-hover arrow-blur arrow-round position-relative">
                            <div class="tns-outer" id="tns1-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">2</span>  of 3</div><div id="tns1-mw" class="tns-ovh"><div class="tns-inner" id="tns1-iw"><div class="tiny-slider-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" data-autoplay="false" data-hoverpause="true" data-gutter="2" data-arrow="false" data-dots="true" data-items="1" id="tns1" style="transform: translate3d(-20%, 0px, 0px); transition-duration: 0s;"><div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden tns-item tns-slide-cloned" style="background-image:url({{ asset('assets/front/images/_banner/banner-1.png') }}); background-position: center left; background-size: cover;" aria-hidden="true" tabindex="-1">
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay rounded-0 d-flex align-items-center">
                                        <div class="container w-100 my-auto">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <!-- Card category -->
                                                    <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Covid-19</a>
                                                    <!-- Card title -->
                                                    <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">Initial problem of startups and their solution</a></h2>
                                                    <p class="text-white"> Thirty it matter enable become admire in giving. See resolved goodness felicity shy civility domestic. </p>
                                                    <!-- Card info -->
                                                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div class="d-flex align-items-center text-white position-relative">
                                                                    <div class="avatar avatar-sm">
                                                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
                                                                    </div>
                                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">Jun 17, 2022</li>
                                                        <li class="nav-item">10 min read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide item -->
                                <div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden tns-item tns-slide-active" style="background-image:url(assets/images/blog/16by9/big/02.jpg); background-position: center left; background-size: cover;" id="tns1-item0">
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay rounded-0 d-flex align-items-center">
                                        <div class="container px-3 my-auto">
                                            <div class="row">
                                            <div class="col-lg-7">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                                <!-- Card title -->
                                                <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">10 tell-tale signs you need to get a new startup.</a></h2>
                                                <p class="text-white">No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. </p>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                    <li class="nav-item">
                                                        <div class="nav-link">
                                                            <div class="d-flex align-items-center text-white position-relative">
                                                                <div class="avatar avatar-sm">
                                                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
                                                                </div>
                                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis</a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">Jan 01, 2022</li>
                                                    <li class="nav-item">5 min read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- Slide item -->
                                <div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden tns-item" style="background-image:url(assets/images/blog/16by9/big/01.jpg); background-position: center left; background-size: cover;" id="tns1-item1" aria-hidden="true" tabindex="-1">
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay rounded-0 d-flex align-items-center">
                                        <div class="container px-3 my-auto">
                                            <div class="row">
                                            <div class="col-lg-7">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                                <!-- Card title -->
                                                <h2 class="text-white display-5"><a href="post-single-6.html" class="btn-link text-reset fw-normal">7 common mistakes everyone makes while traveling</a></h2>
                                                <p class="text-white">Particular way thoroughly unaffected projection favorable Mrs can be projecting own.</p>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                    <li class="nav-item">
                                                        <div class="nav-link">
                                                            <div class="d-flex align-items-center text-white position-relative">
                                                                <div class="avatar avatar-sm">
                                                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
                                                                </div>
                                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Larry</a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">Feb 22, 2022</li>
                                                    <li class="nav-item">2 min read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- Slide item -->
                                <div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden tns-item" style="background-image:url(assets/images/blog/16by9/big/03.jpg); background-position: center left; background-size: cover;" id="tns1-item2" aria-hidden="true" tabindex="-1">
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay rounded-0 d-flex align-items-center">
                                        <div class="container w-100 my-auto">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <!-- Card category -->
                                                    <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Covid-19</a>
                                                    <!-- Card title -->
                                                    <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">Initial problem of startups and their solution</a></h2>
                                                    <p class="text-white"> Thirty it matter enable become admire in giving. See resolved goodness felicity shy civility domestic. </p>
                                                    <!-- Card info -->
                                                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div class="d-flex align-items-center text-white position-relative">
                                                                    <div class="avatar avatar-sm">
                                                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
                                                                    </div>
                                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">Jun 17, 2022</li>
                                                        <li class="nav-item">10 min read</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden tns-item tns-slide-cloned" style="background-image:url(assets/images/blog/16by9/big/02.jpg); background-position: center left; background-size: cover;" aria-hidden="true" tabindex="-1">
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay rounded-0 d-flex align-items-center">
                                        <div class="container px-3 my-auto">
                                            <div class="row">
                                            <div class="col-lg-7">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                                <!-- Card title -->
                                                <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">10 tell-tale signs you need to get a new startup.</a></h2>
                                                <p class="text-white">No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. </p>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                    <li class="nav-item">
                                                        <div class="nav-link">
                                                            <div class="d-flex align-items-center text-white position-relative">
                                                                <div class="avatar avatar-sm">
                                                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
                                                                </div>
                                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis</a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">Jan 01, 2022</li>
                                                    <li class="nav-item">5 min read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div></div></div></div></div>

                            <!-- Custom thumb START -->
                            <div class="col-xl-4 custom-thumb pe-5 position-absolute top-50 end-0 translate-middle-y d-none d-xxl-block" id="custom-thumb" aria-label="Carousel Pagination">
                                <!-- Thumb 1 -->
                                <div class="row align-items-center g-3 mb-4 tns-nav-active" data-nav="0" aria-label="Carousel Page 1 (Current Slide)" aria-controls="tns1">
                                    <div class="col-auto">
                                        <div class="avatar avatar-lg">
                                            <img class="avatar-img rounded-circle" src="assets/images/blog/16by9/big/02.jpg" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-normal text-truncate mb-1">Tell-tale signs you need to get a new startup</h4>
                                        <p class="text-truncate d-block col-11 small mb-0">Departure defective arranging rapturous did believe</p>
                                    </div>
                                </div>
                                <!-- Thumb 2 -->
                                <div class="row align-items-center g-3 mb-4" data-nav="1" tabindex="-1" aria-label="Carousel Page 2" aria-controls="tns1">
                                    <div class="col-auto">
                                        <div class="avatar avatar-lg">
                                            <img class="avatar-img rounded-circle" src="assets/images/blog/16by9/big/01.jpg" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-normal text-truncate mb-1">7 common mistakes everyone makes while traveling</h4>
                                        <p class="text-truncate d-block col-11 small mb-0">Particular way thoroughly unaffected projection favorable </p>
                                    </div>
                                </div>
                                <!-- Thumb 3 -->
                                <div class="row align-items-center g-3" data-nav="2" tabindex="-1" aria-label="Carousel Page 3" aria-controls="tns1">
                                    <div class="col-auto">
                                        <div class="avatar avatar-lg">
                                            <img class="avatar-img rounded-circle" src="assets/images/blog/16by9/big/03.jpg" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-normal text-truncate mb-1">Initial problem of startups and their solution</h4>
                                        <p class="text-truncate d-block col-11 small mb-0">Drawings offended yet answered Jennings perceive</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Custom thumb END -->
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="p-0 mb-4">
            {{-- Témoignages --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-4">
                        <h2 class="m-0"><i class="bi bi-megaphone"></i> Témoignages Edifiants</h2>
                        <p class="m-0">Retrouvez des témoignages sur l'enfer et le paradis, le danger des maquillages, etc.</p>
                    </div>
                    <div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round mt-3">
                        <div class="tns-outer" id="tns2-ow">
                            <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">13 to 16</span> of 5</div>
                            <div id="tns2-mw" class="tns-ovh">
                                <div class="tns-inner" id="tns2-iw">
                                    <div
                                        class="tiny-slider-inner tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                        data-autoplay="true"
                                        data-hoverpause="true"
                                        data-gutter="24"
                                        data-arrow="true"
                                        data-dots="false"
                                        data-items-xl="4"
                                        data-items-lg="3"
                                        data-items-md="3"
                                        data-items-sm="2"
                                        data-items-xs="1"
                                        id="tns2"
                                        style="transform: translate3d(-57.1429%, 0px, 0px); transition-duration: 0s;"
                                    >

                                    @foreach ($temoignages as $temoignage)
                                        <div class="card tns-item tns-slide-cloned tns-slide-active">
                                            <!-- Card img -->
                                            <div class="position-relative">
                                                    <img class="card-img" src="{{ asset('assets/front/images/_banner/banner-1.png') }}" alt="Card image">
                                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                        <!-- Card overlay Top -->
                                                        <div class="w-100 mb-auto d-flex justify-content-end">
                                                            <div class="text-end ms-auto">
                                                                <!-- Card format icon -->
                                                                <div class="icon-md bg-danger text-white fw-bold rounded-circle" title="This post has images"><i class="fas fa-video"></i></div>
                                                            </div>
                                                        </div>
                                                        <!-- Card overlay bottom -->

                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pt-3">
                                                    <h5 class="card-title"><a href="post-single-6.html" class="btn-link text-reset fw-bold">This is why this year will be the year of startups</a></h5>
                                                    <!-- Card info -->

                                                </div>
                                            </div>
                                            <div class="card">
                                                <a href="{{ route('front.eglises.activites.show', ['temoignage', $temoignage->id]) }}">
                                                    <!-- Card img -->
                                                    <div class="position-relative">
                                                        <img class="card-img" style="height: 13rem" src="{{ $temoignage->img }}" alt="Card image">
                                                    </div>
                                                    <div class="card-body px-0 pt-3">
                                                        <h5 class="card-title text-center"><a href="{{ route('front.eglises.activites.show', ['temoignage', $temoignage->id]) }}" class="btn-link text-reset fw-bold">{{ truncate_string(str_format($temoignage->titre), 50) }}</a></h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                    <div class="card tns-item tns-slide-cloned tns-slide-active">
                                        <!-- Card img -->
                                        <div class="position-relative">
                                            <img class="card-img" src="{{ asset('assets/front/images/_banner/banner-1.png') }}" alt="Card image" />
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay Top -->
                                                <div class="w-100 mb-auto d-flex justify-content-end">
                                                    <div class="text-end ms-auto">
                                                        <!-- Card format icon -->
                                                        <div class="icon-md bg-danger text-white fw-bold rounded-circle" title="This post has images"><i class="fas fa-video"></i></div>
                                                    </div>
                                                </div>
                                                <!-- Card overlay bottom -->
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pt-3">
                                            <h5 class="card-title"><a href="post-single-6.html" class="btn-link text-reset fw-bold">This is why this year will be the year of startups</a></h5>
                                            <!-- Card info -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0">
                                <button type="button" data-controls="prev" tabindex="-1" aria-controls="tns2"><i class="fas fa-chevron-left"></i></button>
                                <button type="button" data-controls="next" tabindex="-1" aria-controls="tns2"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Afficher direct --}}
        <section class="p-0 mb-5">
            <div class="bg-primary my-4 bg-opacity-10 rounded-3 p-5 h-100">
                <div class="row">
                    <div class="col-sm-8 position-relative text-cente my-auto px-4">
                        <h1 class="mb-1 text-primary">Suivez le direct</h1>
                        <p>Rejoignez notre diffusion en direct dédiée au salut de vos âmes. Immergez-vous dans des enseignements profonds, des prières puissantes et des moments de louange et d'adoration intenses. Restez connecté pour nourrir votre âme et fortifier votre marche spirituelle.</p>
                    </div>
                    <div class="col-sm-2 my-auto mx-auto px-4">
                        <a href="#" class="btn text-light btn-pulse">Cliquer ici</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Enseignements --}}
        <section class="p-0 mb-4">
            <div class="row mt-lg-3 mt-xs-1">
                {{-- Content --}}
                <div class="col-lg-9 col-sm-12">
                    <div class="mb-4">
                        <h2 class="m-0"><i class="bi bi-megaphone me-2"></i>Enseignements</h2>
                        <p>Bénéficiez des enseignements basé sur sur la saine doctrine</p>
                    </div>
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{ asset('assets/front/images/_banner/banner-1.png') }}" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay Top -->
                                        <div class="w-100 mb-auto d-flex justify-content-end">
                                            <div class="text-end ms-auto">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-danger text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                            </div>
                                        </div>
                                        <!-- Card overlay bottom -->

                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">Dirty little secrets about the business industry</a></h4>

                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="{{ asset('assets/front/images/_banner/banner-1.png') }}" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Mar 07, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @foreach ($enseignements as $enseignement)
                        {{-- @dd($enseignement->categorie->id) --}}
                            <div class="col-sm-6">
                                <div class="card">
                                    <a href="{{ route('front.predications.show', [$enseignement->categorie->nom ?? '', $enseignement->id]) }}">
                                        <!-- Card img -->
                                        <div class="position-relative">
                                            <img class="card-img img-scale fixed-div-400-300" syle="width: 397.5px; height: 298.13px" src="{{ $enseignement->img }}" alt="Card image">
                                        </div>

                                        <div class="card-body px-0 pt-3">
                                            <h4 class="card-title"><a href="{{ route('front.predications.show', [$enseignement->categorie->nom ?? '', $enseignement->id]) }}" class="btn-link text-reset fw-bold">{{ truncate_string(str_format($enseignement->titre), 50) }}</a></h4>
                                            <p class="card-text">{{ truncate_string($enseignement->description, 150) }}</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle" src="{{ asset('assets/front/images/_content/card_logo.png') }}" alt="avatar">
                                                            </div>
                                                            <span class="ms-2">par
                                                                <a href="#" class="stretched-link text-reset btn-link">
                                                                    @foreach ($enseignement->responsables as $responsable)
                                                                        {{ $responsable->poste.' '.$responsable->nom }}
                                                                    @endforeach
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">{{ date('d/m/Y', strtotime($enseignement->date_deb)) }}</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                            {!! $enseignements->links() !!}
                        </div>
                    </div>
                </div>
                {{-- Side bar --}}
                <div class="col-lg-3 mt-5 mt-lg-0">
                    <div>
                        <h5 class="mb-3">Les Réseaux sociaux</h5>

                        <!-- Social widget START -->
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

                        <!-- Trending topics widget START -->
                        <div>
                            <h5 class="mt-4 mb-3">Les Eglises JESUS-REVIENT</h5>
                            <!-- Category item -->
                            @foreach ($eglises as $eglise)
                                <div class="text-center mb-2 card-bg-scale position-relative overflow-hidden rounded bg-danger bg-dark-overlay-4">
                                    <div class="p-3">
                                        <a href="#" class="stretched-link btn-link fw-bold text-white h5">{{ str_limit($eglise->nom, 15) }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Faire un don --}}
        {{-- <div class="bg-primary mt-4 bg-opacity-10 rounded-3 p-5 h-100">
            <div class="row">
                <div class="col-sm-8 position-relative text-cente my-auto">
                    <h1 class="mb-3">Faire un don</h1>
                    <h3 class="mb-1 font-weight-bold">Rejoignez-nous dans cette grande mission</h3>
                    <p class="my- h5 fw-light lead">
                        <small>
                            Votre don, quelle que soit sa taille, joue un rôle essentiel pour faire une différence positive dans cette mission de grand réveil. Ensemble, nous répandons la lumière de l'Évangile là où elle est nécessaire et semons les graines du changement et de la bonté. Votre soutien nous permet de poursuivre cette œuvre précieuse et de diffuser le message de sanctification et de dépouillement à chaque coin de la planète.
                        </small>
                    </p>
                    <a href="{{ route('front.accueil') }}" class="btn btn-primary rounded-5 mt-3">Faire un don</a>
                </div>
                <div class="col-sm-4 px-4 text-center my-auto">
                    <h3>
                        <i class="fas fa-hand-holding-heart p-4 text-primary bg-primary bg-opacity-10 rounded-5 fa-5x"></i>
                    </h3>
                </div>
            </div>
        </div> --}}

        {{-- TV Programs --}}
        {{-- <div class="row mt-5">
            <!-- Title -->
            <div class="mb-3 d-md-flex justify-content-between align-items-center">
                <h2 class="m-0"><i class="fas fa-tv"></i> Programmes TV</h2>
            </div>
            <div class="col-12">
                <div class="tiny-slider arrow-blur arrow-round rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner"
                    data-autoplay="true"
                    data-hoverpause="true"
                    data-gutter="24"
                    data-arrow="true"
                    data-dots="false"
                    data-items-xl="4"
                    data-items-lg="3"
                    data-items-md="3"
                    data-items-sm="2"
                    data-items-xs="1">
                    <!-- Card item START -->

                    @foreach ($rubriques as $rubrique)
                        <div>
                            <div class="card text-center border">
                                <div class="card-body">
                                    <i class="{{ $rubrique->icon }} text-{{ $rubrique->color }} fa-3x mb-3"></i>
                                    <h5 class="card-title text-capitalize">{{ ($rubrique->nom == "Qu'en dit la saine doctrine") ? 'La Saine Doctrine' : ($rubrique->nom) }}</h5>
                                    <p class="card-text">{{ str_limit($rubrique->description, 35) }}.</p>
                                    <a href="#" class="btn btn-primary btn-sm rounded-5">Consulter</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> --}}

        {{-- Télécharger l'application --}}
        <div class="bg-primary mt-4 bg-opacity-10 rounded-3 p-5 h-100">
            <div class="row">
                <div class="col-md-6 position-relative text-xs-center my-auto">
                    <h1 class="mb-1">Télécharger l'application</h1>
                    <h2 class="mb-1 font-weight-bold">JESUS-REVIENT TV</h2>
                    <p class="my-4 h5 fw-light lead">Découvrez une expérience unique pour plonger au cœur des écrits bibliques grâce à notre application inédite. <br>Accédez à une multitude d'émissions bibliques captivantes diffusées depuis la télévision, laissez-vous inspirer par des enseignements profonds, des discussions éclairantes et des réflexions qui nourriront votre esprit. </p>
                    <a href="https://bit.ly/49hs2y8" target="blank" class="btn btn-primary"><i class="fas fa-download"></i> Télécharger</a>
                </div>
                <div class="col-sm-6 px-4 mt-xs-4">
                    <a href="https://bit.ly/49hs2y8">
                        <img src="{{ asset('assets/front/images/_content/phone_mockup.png') }}" class="h-100px h-sm-200px" data-tilt alt="">
                    </a>
                </div>
            </div>
        </div>

        {{-- Messages d'Evangelisations --}}
        <div class="row mt-4">
            <!-- Title -->
            <div class="mb-3 d-md-flex justify-content-between align-items-center">
                <h2 class="m-0"><i class="bi bi-megaphone"></i> Messages d'Evangélisation</h2>
            </div>
            <div class="col-12">
                <div class="tiny-slider arrow-blur arrow-round rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner"
                    data-autoplay="true"
                    data-hoverpause="true"
                    data-gutter="24"
                    data-arrow="true"
                    data-dots="false"
                    data-items-xl="4"
                    data-items-lg="3"
                    data-items-md="3"
                    data-items-sm="2"
                    data-items-xs="1">
                    <!-- Card item START -->

                    @for($i = 1; $i <= 10; $i++)
                        <div>
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative card-img-scale card-img-flash">
                                    <img style="height: 13rem" data-glightbox role="button" class="card-img " src="{{ asset('assets/front/images/_content/evangelisation/evg'.$i.'.jpg') }}" alt="Card image">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            {{-- <div class="col-12 text-center my-4">
                <button type="button" class="btn btn-primary-soft">Voir plus de contenues <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
            </div> --}}
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/front/js/sticky.min.js') }}"></script>
@endsection
