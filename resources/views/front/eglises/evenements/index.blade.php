@extends('front/layouts/app', ['title' => 'Evènements'])

@section('content')
<section class="pt-0 pb-3">
    <div class="container-fluid">
        {{-- Breadcrumb --}}
        <div class="border bg-light p-4 mb-2 text-center rounded-3">
            <h1>Evènements</h1>
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

        <div class="container pt-3">
            <div class="row">
                <div class="col-md-12">
                    <!-- Card item START -->
                    <div class="card">
                      <!-- Image -->
                        <div class="card-image">
                            <img class="card-img" src="/assets/front/images/blog/16by9/05.jpg" alt="">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h2 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Image post</a></h2>
                            <p>Drawings offended yet answered Jennings perceive laughing six did far was out laughter raptures. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore corporis quibusdam amet veritatis, deserunt nisi accusantium distinctio non sit dolore repellat quam fugiat quasi, quidem consequatur asperiores quis voluptatem. Praesentium.</p>
                            <div class="d-md-flex align-items-center mt-3">
                                <h5 class="text-black me-3">Disponible sur: </h5>
                                <ul class="nav text-white-force">
                                    <li class="nav-item">
                                        <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-facebook" href="#">
                                            <i class="fab fa-facebook-square align-middle"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-twitter" href="#">
                                            <i class="fab fa-twitter-square align-middle"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-linkedin" href="#">
                                            <i class="fab fa-linkedin align-middle"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-pinterest" href="#">
                                            <i class="fab fa-pinterest align-middle"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-primary" href="#">
                                            <i class="far fa-envelope align-middle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row my-2">
                            <!-- Title -->
                            <div class="my-3 d-md-flex justify-content-between align-items-center">
                                <h3 class="m-0"><i class="fas fa-search"></i> Résultats de recherche</h3>
                            </div>
                            <div class="col-lg-9">
                                <div class="card mb-4">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="rounded-3" src="/assets/front/images/blog/4by3/01.jpg" alt="">
                                        </div>
                                        <div class="col-md-7 mt-3 mt-md-0">
                                            <h3><a href="post-single-2.html" class="btn-link stretched-link text-reset">The pros and cons of business agency</a></h3>
                                            <p>Pleasure and so read the was hope entire first decided the so must have as on was want up of I will rival in came this touched got a physics to travelling so all especially refinement monstrous desk they was arrange the overall helplessly out of particularly ill are purer Person she control of to beginnings view looked eyes Than continues its and because</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="/assets/front/images/avatar/01.jpg" alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Jan 22, 2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="rounded-3" src="/assets/front/images/blog/4by3/01.jpg" alt="">
                                        </div>
                                        <div class="col-md-7 mt-3 mt-md-0">
                                            <h3><a href="post-single-2.html" class="btn-link stretched-link text-reset">The pros and cons of business agency</a></h3>
                                            <p>Pleasure and so read the was hope entire first decided the so must have as on was want up of I will rival in came this touched got a physics to travelling so all especially refinement monstrous desk they was arrange the overall helplessly out of particularly ill are purer Person she control of to beginnings view looked eyes Than continues its and because</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="/assets/front/images/avatar/01.jpg" alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Jan 22, 2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <h5 class="mb-2">Recherche</h5>
                                    <!-- Input group -->
                                    <div class="input-group">
                                        <input class="form-control form-control">
                                        <button type="button" class="btn btn-dark"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Evenements recents --}}
            <div class="row">
                <div class="col-md-12">
                    <!-- Title -->
                    <div class="my-3 d-md-flex justify-content-between align-items-center">
                        <h2 class="m-0"><i class="bi bi-megaphone"></i> Evènements récents</h2>
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
                                        <img class="card-img" src="{{ asset('assets/front/images/blog/16by9/05.jpg') }}" alt="Card image">
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Test</a></h5>
                                    </div>
                                </div>
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/front/images/blog/16by9/05.jpg') }}" alt="Card image">
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Test</a></h5>
                                    </div>
                                </div>
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/front/images/blog/16by9/05.jpg') }}" alt="Card image">
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Test</a></h5>
                                    </div>
                                </div>
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/front/images/blog/16by9/05.jpg') }}" alt="Card image">
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Test</a></h5>
                                    </div>
                                </div>
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/front/images/blog/16by9/05.jpg') }}" alt="Card image">
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Test</a></h5>
                                    </div>
                                </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
