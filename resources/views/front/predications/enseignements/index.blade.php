@extends('front/layouts/app', ['title' => 'Enseignements'])

@section('content')
<section class="pt-0 pb-3">
    <div class="container-fluid">
        {{-- Breadcrumb --}}
        <div class="border bg-light  p-4 text-center rounded-3">
            <h1>Enseignements</h1>
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
    </div>
    <div class="container">
        <div class="row pt-1">
            <!-- Main Post -->
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <!-- Card img -->
                            <div class="position-relative card-fold">
                                <img class="card-img lazy entered loaded" data-src="{{ asset('assets/front/images/blog/4by3/06.jpg') }}" alt="Card image" data-ll-status="loaded" src="{{ 'https://img.youtube.com/vi/vus1z3ETBxo/hqdefault.jpg' }}">
                                {{-- <img class="card-img lazy entered loaded" data-src="{{ asset('assets/front/images/blog/4by3/06.jpg') }}" alt="Card image" data-ll-status="loaded" src="{{ asset('assets/front/images/blog/4by3/06.jpg') }}">https://img.youtube.com/vi/vus1z3ETBxo/hqdefault.jpg --}}
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3" style="background: #00000087">
                                    <!-- Card overlay Top -->
                                    <div class="w-100 mt-auto d-flex justify-content-end">
                                        <div class="text-center mx-auto">
                                            <!-- Card format icon -->
                                            <a href="#"><div class="icon-lg text-bg-danger rounded-circle" title="cliquer pour suivre la vidéo"><i class="fas fa-play"></i></div></a>
                                        </div>
                                    </div>
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <!-- <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small 6+
                                            +-fw-bold"></i>Travel</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3">
                                <h4 class="card-title mb-3"><a href="#" class="btn-link text-reset fw-bold">Titre</a></h4>

                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <a href="#" class="badge text-bg-primary"><i class="fas fa-circle me-2 small fw-bold"></i>Tag</a>
                                    </li>
                                    <li class="nav-item">20 Dec 2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
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

            <!-- Sidebar START -->
            <div class="col-lg-3 mt-5 mt-lg-0">
                <div>
                    {{-- @include('front.partials.contentTopic') --}}
                    {{-- @include('front.partials.contentRecentPost') --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
