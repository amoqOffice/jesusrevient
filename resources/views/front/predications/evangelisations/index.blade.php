@extends('front/layouts/app', ['title' => 'Evangélisations'])

@section('content')
<section class="pt-0 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{-- Breadcrumb --}}
                <div class="border bg-light  p-4 text-center rounded-3">
                    <h1>Evangelisation</h1>
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
                <div class="container">
                    {{-- Title --}}
                    <div class="my-3 d-md-flex justify-content-between align-items-center">
                        <h2 class="m-0"><i class="bi bi-megaphone"></i> Témoignages édifiants</h2>
                    </div>
                    <div class="row pt-1">

                        <!-- Main Post -->
                        <div class="col-lg-9">
                            <div class="row">
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
                                    <h4 class="mt-4 mb-3">Trending topics</h4>
                                    <!-- Category item -->
                                    <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 " style="background-image:url(/assets/front/images/blog/4by3/01.jpg); background-position: center left; background-size: cover;">
                                        <div class="p-3">
                                            <a href="#" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
                                        </div>
                                    </div>
                                    <!-- Category item -->
                                    <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(/assets/front/images/blog/4by3/02.jpg); background-position: center left; background-size: cover;">
                                        <div class="bg-dark-overlay-4 p-3">
                                            <a href="#" class="stretched-link btn-link fw-bold text-white h5">Business</a>
                                        </div>
                                    </div>
                                    <!-- Category item -->
                                    <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(/assets/front/images/blog/4by3/03.jpg); background-position: center left; background-size: cover;">
                                        <div class="bg-dark-overlay-4 p-3">
                                            <a href="#" class="stretched-link btn-link fw-bold text-white h5">Marketing</a>
                                        </div>
                                    </div>
                                    <!-- Category item -->
                                    <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(/assets/front/images/blog/4by3/04.jpg); background-position: center left; background-size: cover;">
                                        <div class="bg-dark-overlay-4 p-3">
                                            <a href="#" class="stretched-link btn-link fw-bold text-white h5">Photography</a>
                                        </div>
                                    </div>
                                    <!-- Category item -->
                                    <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(/assets/front/images/blog/4by3/05.jpg); background-position: center left; background-size: cover;">
                                        <div class="bg-dark-overlay-4 p-3">
                                            <a href="#" class="stretched-link btn-link fw-bold text-white h5">Sports</a>
                                        </div>
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
@endsection
