@extends('front/layouts/app', ['title' => 'Accueil'])

@php
    // Reccupération des témoignages
    $temoignages = $types->where('nom', 'Temoignage')->first()->activites()->orderBy('date_deb', 'desc')->get();

    // Reccupération des Enseignements
    $enseignements = $types->where('nom', 'Enseignement')->first()->activites()->orderBy('date_deb', 'desc')->paginate(4);

    // Reccupération des Tags
    $tags = DB::table('tags')->select('*')->get();
@endphp

@section('content')
    {{-- Banner --}}
    <section class="pt-0 pb-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">
                        <div class="tiny-slider-inner"
                            data-autoplay="true"
                            data-hoverpause="true"
                            data-gutter="1"
                            data-arrow="true"
                            data-dots="false"
                            data-items="1">

                            <!-- Slide 1 -->
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{ asset('assets/front/images/_banner/banner-1.jpg') }}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Actualité</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">Le feu du reveil embrase tout les pays du monde entier🔥</a></h2>
                                            <p class="text-white">Tel un feu, le réveil enflamme le monde chaque jour, d'un bout à l'autre. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{ asset('assets/front/images/_banner/banner-2.jpg') }}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Actualité</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">💥La puissance de l'Evangile transforme les vies</a></h2>
                                            <p class="text-white">Des vies sont profondément transformées par la puissance de l'Evangile. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{ asset('assets/front/images/_banner/banner-3.jpg') }}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Actualié</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">Jésus-Christ prépare son Eglise pour l'enlèvement</a></h2>
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
        {{-- Témoignages --}}
        <div class="row">
			<div class="col-md-12">
				<!-- Title -->
				<div class="my-3 d-md-flex justify-content-between align-items-center">
					<h2 class="m-0"><i class="bi bi-megaphone"></i> Témoignages édifiants</h2>
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

						@foreach ($temoignages as $temoignage)
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{ $temoignage->img }}" alt="Card image">
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">{{ truncate_string($temoignage->titre, 50) }}</a></h5>
                                </div>
                            </div>
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{ $temoignage->img }}" alt="Card image">
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">{{ truncate_string($temoignage->titre, 50) }}</a></h5>
                                </div>
                            </div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>

        {{-- Afficher direct --}}
        <div class="bg-primary my-4 bg-opacity-10 rounded-3 p-5 h-100">
            <div class="row">
                <div class="col-sm-6 position-relative text-cente my-auto">
                    <h1 class="mb-1">Suivez le direct</h1>
                    <a href="https://bit.ly/3D0VgDo" class="btn btn-primary"><i class="fas fa-download"></i> Télécharger</a>
                </div>
                <div class="col-sm-6 px-4">
                    <a href="#" class="btn btn-danger btn-pulse">Le Direct</a>
                </div>
            </div>
        </div>

        {{-- Télécharger l'application --}}
        <div class="bg-primary bg-opacity-10 rounded-3 p-5 h-100">
            <div class="row">
                <div class="col-sm-6 position-relative text-cente my-auto">
                    <h1 class="mb-1">Télécharger l'application</h1>
                    <h2 class="mb-1 font-weight-bold">JESUS-REVIENT TV</h2>
                    <p class="my-4 h5 fw-light lead">Découvrez une expérience unique pour plonger au cœur des écrits bibliques grâce à notre application inédite. <br>Accédez à une multitude d'émissions bibliques captivantes diffusées depuis la télévision, laissez-vous inspirer par des enseignements profonds, des discussions éclairantes et des réflexions qui nourriront votre esprit. </p>
                    <a href="https://bit.ly/3D0VgDo" class="btn btn-primary"><i class="fas fa-download"></i> Télécharger</a>
                </div>
                <div class="col-sm-6 px-4">
                    <img src="{{ asset('assets/front/images/_content/phone_mockup.png') }}" class="h-100px h-sm-200px" alt="">
                </div>
            </div>
        </div>

        {{-- Enseignements --}}
        <div class="row mt-4">
            {{-- Content --}}
            <div class="col-lg-9 col-sm-12">
                <div class="mb-4">
					<h2 class="m-0"><i class="bi bi-megaphone me-2"></i>Enseignements</h2>
					<p>Bénéficiez des enseignements basé sur sur la saine doctrine</p>
				</div>
                <div class="row gy-4">
                    @foreach ($enseignements as $enseignement)
                        <div class="col-sm-6">
                            <div class="card">
                                <a href="{{ $enseignement->url }}">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img img-scale" syle="width: 397.5px; height: 298.13px" src="{{ $enseignement->img }}" alt="Card image">
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="{{ $enseignement->url }}" class="btn-link text-reset fw-bold">{{ truncate_string($enseignement->titre, 50) }}</a></h4>
                                        <p class="card-text">{{ $enseignement->description }}</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-sm">
                                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/front/images/_content/accueil_logo.png') }}" alt="avatar">
                                                        </div>
                                                        <span class="ms-2">par
                                                            <a href="#" class="stretched-link text-reset btn-link">
                                                                @foreach ($enseignement->responsables as $responsable)
                                                                    {{ $responsable->nom }}
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
					<!-- Social widget START -->
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
					<div>
						<h4 class="mt-4 mb-3">Thèmes récents</h4>
						<!-- Category item -->
                        @foreach ($tags as $tag)
                            <div class="text-center mb-2 card-bg-scale position-relative overflow-hidden rounded bg-primary bg-dark-overlay-4">
                                <div class="p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">{{ $tag->nom }}</a>
                                </div>
                            </div>
                        @endforeach
					</div>
				</div>
			</div>
        </div>

        {{-- TV Programs --}}
        <div class="row mt-4">
            <!-- Title -->
            <div class="mb-3 d-md-flex justify-content-between align-items-center">
                <h2 class="m-0"><i class="bi bi-megaphone"></i> Programmes TV</h2>
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
                    <div>
                        <div class="card card-overlay-bottom card-img-scale">
                            <a href="#">
                                <!-- Card Image -->
                                <img class="card-img" src="data:image/png;base64, {{ generateImage(100, 100) }}" alt="">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex text-bg-warning flex-column p-3 p-sm-4">
                                    <div class="w-100 my-auto text-center">
                                        <!-- Card title -->
                                        <i class="fa fa-home pb-3 fa-5x text-dark"></i>
                                        <h4>
                                            <a href="#" class="btn-link text-reset stretched-link">Qu'en dis la saine doctrine</a>
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="card card-overlay-bottom card-img-scale">
                            <a href="#">
                                <!-- Card Image -->
                                <img class="card-img" src="data:image/png;base64, {{ generateImage(100, 100) }}" alt="">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex text-bg-warning flex-column p-3 p-sm-4">
                                    <div class="w-100 my-auto text-center">
                                        <!-- Card title -->
                                        <i class="fa fa-home pb-3 fa-5x text-dark"></i>
                                        <h4>
                                            <a href="#" class="btn-link text-reset stretched-link">Qu'en dis la saine doctrine</a>
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="card card-overlay-bottom card-img-scale">
                            <a href="#">
                                <!-- Card Image -->
                                <img class="card-img" src="data:image/png;base64, {{ generateImage(100, 100) }}" alt="">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex text-bg-warning flex-column p-3 p-sm-4">
                                    <div class="w-100 my-auto text-center">
                                        <!-- Card title -->
                                        <i class="fa fa-home pb-3 fa-5x text-dark"></i>
                                        <h4>
                                            <a href="#" class="btn-link text-reset stretched-link">Qu'en dis la saine doctrine</a>
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="card card-overlay-bottom card-img-scale">
                            <a href="#">
                                <!-- Card Image -->
                                <img class="card-img" src="data:image/png;base64, {{ generateImage(100, 100) }}" alt="">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex text-bg-warning flex-column p-3 p-sm-4">
                                    <div class="w-100 my-auto text-center">
                                        <!-- Card title -->
                                        <i class="fa fa-home pb-3 fa-5x text-dark"></i>
                                        <h4>
                                            <a href="#" class="btn-link text-reset stretched-link">Qu'en dis la saine doctrine</a>
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="card card-overlay-bottom card-img-scale">
                            <a href="#">
                                <!-- Card Image -->
                                <img class="card-img" src="data:image/png;base64, {{ generateImage(100, 100) }}" alt="">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex text-bg-warning flex-column p-3 p-sm-4">
                                    <div class="w-100 my-auto text-center">
                                        <!-- Card title -->
                                        <i class="fa fa-home pb-3 fa-5x text-dark"></i>
                                        <h4>
                                            <a href="#" class="btn-link text-reset stretched-link">Qu'en dis la saine doctrine</a>
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Apk --}}
    <div class="row mt-4 mb-4">
        <div class="col">
            <a href="#" class="d-block card-img-flash  rounded-3 overflow-hidden">
                <img src="{{ asset('assets/front/images/adv-3.png') }}" alt="">
            </a>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/front/js/sticky.min.js') }}"></script>
@endsection
