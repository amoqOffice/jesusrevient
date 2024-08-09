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
        <div class="container">
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
        <section class="p-0 mb-4">
            {{-- Témoignages --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-4">
                        <h2 class="m-0"><i class="bi bi-megaphone"></i> Témoignages Edifiants</h2>
                        <p class="m-0">Retrouvez des témoignages sur l'enfer et le paradis, le danger des maquillages, etc.</p>
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
                                <div class="card tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="Card image">
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h5>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <span>300 <a href="#" class="stretched-link text-reset btn-link">vues</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">07 Mar 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            @endfor
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
                            <div class="card tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="Card image">
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h5 class="card-title"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <span>300 <a href="#" class="stretched-link text-reset btn-link">vues</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">07 Mar 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="Card image">
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h5 class="card-title"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <span>300 <a href="#" class="stretched-link text-reset btn-link">vues</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">07 Mar 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="Card image">
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h5 class="card-title"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <span>300 <a href="#" class="stretched-link text-reset btn-link">vues</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">07 Mar 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="Card image">
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h5 class="card-title"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <span>300 <a href="#" class="stretched-link text-reset btn-link">vues</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">07 Mar 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="btn btn-primary-soft">Voir tout les Enseignements <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
                        </div>

                        {{-- Pagination --}}
                        {{-- <div class="d-flex justify-content-center">
                            {!! $enseignements->links() !!}
                        </div> --}}
                    </div>
                </div>
                {{-- Side bar --}}
                <div class="col-lg-3 mt-5 mt-lg-0">
                    <div>
                        {{-- <h5 class="mb-3">Les Réseaux sociaux</h5> --}}

                        <!-- Social widget START -->
                        <div class="row g-2">
                            <div class="col-4">
                                <a href="https://web.facebook.com/groupejesusrevient?_rdc=1&_rdr" target="_blank" class="bg-facebook rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-facebook-square fs-5 mb-2"></i>
                                    <h6 class="m-0">7.3K</h6>
                                    <span class="small">Fans</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="https://www.youtube.com/@JESUSREVIENTTV?sub_confirmation=1" target="_blank" class="bg-youtube rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-youtube-square fs-5 mb-2"></i>
                                    <h6 class="m-0">73k</h6>
                                    <span class="small">Subs</span>
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
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-5 " style="background-image:url({{ asset('assets/front/images/flags/benin.jpg') }}); background-position: center left; background-size: cover;">
                                <div class="p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">BENIN</a>
                                </div>
                            </div>
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-5 " style="background-image:url({{ asset('assets/front/images/flags/ivoiry_coast.jpg') }}); background-position: center left; background-size: cover;">
                                <div class="p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">CÔTE D'IVOIRE</a>
                                </div>
                            </div>
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-5 " style="background-image:url({{ asset('assets/front/images/flags/liberia.jpg') }}); background-position: center left; background-size: cover;">
                                <div class="p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">LIBERIA</a>
                                </div>
                            </div>
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-5 " style="background-image:url({{ asset('assets/front/images/flags/france.jpg') }}); background-position: center left; background-size: cover;">
                                <div class="p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">FRANCE</a>
                                </div>
                            </div>
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-5 " style="background-image:url({{ asset('assets/front/images/flags/canada.jpg') }}); background-position: center left; background-size: cover;">
                                <div class="p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">CANADA</a>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="#" class="fw-bold text-body text-primary-hover"><u>Voir toutes les Eglises</u></a>
                            </div>
                            {{-- @foreach ($eglises as $eglise)
                                <div class="text-center mb-2 card-bg-scale position-relative overflow-hidden rounded bg-danger bg-dark-overlay-4">
                                    <div class="p-3">
                                        <a href="#" class="stretched-link btn-link fw-bold text-white h5">{{ str_limit($eglise->nom, 15) }}</a>
                                    </div>
                                </div>
                            @endforeach --}}

                            <div class="col-12 col-sm-6 col-lg-12">
                                <h4 class="mt-4 mb-3">Activités récentes</h4>
                                <!-- Recent post item -->
                                <div class="card mb-3">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <img class="rounded" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="">
                                        </div>
                                        <div class="col-8">
                                            <h6 class="mb0">
                                                <a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">The pros and cons ...</a>
                                            </h6>
                                            <div class="small mt-1">17 May 2022</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent post item -->
                                <div class="card mb-3">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <img class="rounded" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="">
                                        </div>
                                        <div class="col-8">
                                            <h6 class="mb-0">
                                                <a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">Around the web: 2 ...</a>
                                            </h6>
                                            <div class="small mt-1">04 Apr 2022</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent post item -->
                                <div class="card mb-3">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <img class="rounded" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="">
                                        </div>
                                        <div class="col-8">
                                            <h6 class="mb-0">
                                                <a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">5 reasons why you ...</a>
                                            </h6>
                                            <div class="small mt-1">30 Jun 2022</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent post item -->
                                <div class="card mb-3">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <img class="rounded" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="">
                                        </div>
                                        <div class="col-8">
                                            <h6><a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">Five unbelievable ...</a></h6>
                                            <div class="small mt-1">29 Nov 2022</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Faire un don --}}
        <div class="bg-primary mt-4 bg-opacity-10 rounded-3 p-5 h-100">
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
        </div>

        {{-- TV Programs --}}
        <div class="row mt-5">
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
        </div>

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

        <div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>

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
                    data-items-xs="2">
                    <!-- Card item START -->

                    @for($i = 1; $i <= 10; $i++)
                        <div>
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative card-img-scale card-img-flash">
                                    <img style="height: 13rem;border-radius: 10%" data-glightbox role="button" class="card-img" src="{{ asset('assets/front/images/_content/evangelisation/evg'.$i.'.jpg') }}" alt="Card image">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-12 text-center my-4">
                <button type="button" class="btn btn-primary-soft">Voir plus d'images <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/front/js/sticky.min.js') }}"></script>
@endsection
