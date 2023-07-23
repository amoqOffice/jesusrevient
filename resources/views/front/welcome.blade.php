@extends('front/layouts/app')

@section('content')
	@widget('homeCarousel')
    {{ Widget::homeCarousel() }}
    <section class="p-0">
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
                            <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0" style="background-image: url('/assets/front/images/blog/16by9/05.jpg'); background-position: center left; background-size: cover;">
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
                                                                    <img class="avatar-img rounded-circle" src="{{ asset('assets/front/images/avatar/11.jpg') }}" alt="avatar">
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

                            <!-- Slide 2 -->
                            <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url('/assets/front/images/blog/16by9/big/03.jpg'); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 my-auto">
                                        <div class="col-md-10 col-lg-7 mx-auto text-center">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                            <!-- Card title -->
                                        <h2 class="text-white display-5"><a href="post-single-2.html" class="btn-link text-reset fw-normal">This is why this year will be the year of startups</a></h2>
                                        <p class="text-white">Particular way thoroughly unaffected projection favorable Mrs can be projecting own. </p>
                                        <!-- Card info -->
                                                        <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div class="d-flex align-items-center text-white position-relative">
                                                                <div class="avatar avatar-sm">
                                                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/10.jpg') }}" alt="avatar">
                                                                        </div>
                                                                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis</a></span>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                        <li class="nav-item">Nov 15, 2022</li>
                                                        <li class="nav-item"><a href="#" class="btn-link"><i class="far fa-comment-alt me-1"></i> 3 Comments</a></li>
                                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url('/assets/front/images/blog/16by9/big/04.jpg'); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 my-auto">
                                        <div class="col-md-10 col-lg-7 mx-auto text-center">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                            <!-- Card title -->
                                        <h2 class="text-white display-5"><a href="post-single-2.html" class="btn-link text-reset fw-normal">This is why this year will be the year of startups</a></h2>
                                        <p class="text-white">Particular way thoroughly unaffected projection favorable Mrs can be projecting own. </p>
                                        <!-- Card info -->
                                                        <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div class="d-flex align-items-center text-white position-relative">
                                                                <div class="avatar avatar-sm">
                                                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/10.jpg') }}" alt="avatar">
                                                                        </div>
                                                                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis</a></span>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                        <li class="nav-item">Nov 15, 2022</li>
                                                        <li class="nav-item"><a href="#" class="btn-link"><i class="far fa-comment-alt me-1"></i> 3 Comments</a></li>
                                                        </ul>
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
