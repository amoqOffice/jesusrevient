@extends('front/layouts/app', ['title' => 'Prédications'])

@section('style')
    {{-- <link rel="stylesheet" href="{{ asset('assets/front/css/plyr.css') }}"> --}}
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
        {{-- @dd(getYouTubeThumbnail('https://www.youtube.com/embed/tXHviS-4ygo')) --}}
        <div class="row">
            <div class="col-lg-9 col-sm-12 mt-4 mt-lg-0">
                <!-- Card item START -->
                <div class="card bg-transparent overflow-hidden mb-0">
                    <!-- Card img -->
                    <div class="position-relative rounded-3 overflow-hidden">
                        <!-- Video -->
                        <div class="card-image">
                            <div class="overflow-hidden">
                                {{-- Image de l'Activité --}}
                                <div class="w-100 h-500">
                                    <img class="avatar-img rounded-3" src="/assets/front/images/avatar/11.jpg" alt="avatar">
                                </div>

                                <!-- HTML video START -->
                                <div class="player-wrapper rounded-3 overflow-hidden">
                                        <div class="player-youtube" >
                                        <iframe src="https://www.youtube.com/embed/tXHviS-4ygo"></iframe>
                                    </div>
                                </div>
                                <!-- HTML video END -->
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

                <!-- Comments START -->
                <div class="mt-3">
                    <h5>Commentaires</h5>
                    <!-- Comment level 1-->
                    <div class="my-4 d-flex bg-light rounded-3 p-3 p-md-4">
                        <img class="avatar avatar-md rounded-circle float-start me-3" src="/assets/front/images/avatar/01.jpg" alt="avatar">
                        <div>
                            <div class="mb-2">
                                <h5 class="m-0">Allen Smith</h5>
                                <span class="me-3 small">June 11, 2022 at 6:01 am </span>
                            </div>
                            <p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
                            <a href="#" class="btn btn-primary-soft btn-sm ">Répondre</a>
                            <form action="" id="comment_answer" method="POST">
                                @csrf
                                <div class="input-group mt-2">
                                    <input class="form-control form-control-sm" type="text">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Comment children level 3 -->
                    <div class="my-4 d-flex ps-3 ps-md-5">
                        <img class="avatar avatar-md rounded-circle float-start me-3" src="/assets/front/images/avatar/01.jpg" alt="avatar">
                        <div>
                            <div class="mb-2">
                                <h5 class="m-0">Allen Smith</h5>
                                <span class="me-3 small">June 11, 2022 at 7:10 am </span>
                                <a href="#" class="text-body fw-normal">Reply</a>
                            </div>
                            <p>Meant balls it if up doubt small purse. </p>
                        </div>
                    </div>

                    <!-- Comment level 2 -->
                    {{-- <div class="my-4 d-flex ps-2 ps-md-3">
                        <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/03.jpg" alt="avatar">
                        <div>
                            <div class="mb-2">
                                <h5 class="m-0">Frances Guerrero</h5>
                                <span class="me-3 small">June 14, 2022 at 12:35 pm </span>
                                <a href="#" class="text-body fw-normal">Reply</a>
                            </div>
                            <p>Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>
                        </div>
                    </div> --}}

                    <!-- Comment level 1 -->
                    <div class="my-4 d-flex">
                        <img class="avatar avatar-md rounded-circle float-start me-3" src="/assets/front/images/avatar/04.jpg" alt="avatar">
                        <div>
                            <div class="mb-2">
                                <h5 class="m-0">Judy Nguyen</h5>
                                <span class="me-3 small">June 18, 2022 at 11:55 am </span>
                                <a href="#" class="text-body fw-normal">Reply</a>
                            </div>
                            <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. </p>
                        </div>
                    </div>
                </div>

                <!-- Reply START -->
                <div>
                    <h3>Laisser un commentaire</h3>
                    <form class="row g-3 mt-2">
                        <div class="col-md-6">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Commentaire</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- Categories -->
                <div class="row g-2">
                    <h5>Categories</h5>
                        <div class="d-flex justify-content-between align-items-center bg-warning bg-opacity-15 rounded p-2 position-relative">
                                <h6 class="m-0 text-warning">Photography</h6>
                                <a href="#" class="badge bg-warning text-dark stretched-link">09</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center bg-info bg-opacity-10 rounded p-2 position-relative">
                                <h6 class="m-0 text-info">Travel</h6>
                                <a href="#" class="badge bg-info stretched-link">25</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center bg-danger bg-opacity-10 rounded p-2 position-relative">
                                <h6 class="m-0 text-danger">Photography</h6>
                                <a href="#" class="badge bg-danger stretched-link">75</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 rounded p-2 position-relative">
                                <h6 class="m-0 text-primary">Covid-19</h6>
                                <a href="#" class="badge bg-primary stretched-link">19</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center bg-success bg-opacity-10 rounded p-2 position-relative">
                                <h6 class="m-0 text-success">Business</h6>
                                <a href="#" class="badge bg-success stretched-link">35</a>
                            </div>
                        </div>

                        <!-- Newsletter START -->
                        <div class="bg-light p-4 mt-4 rounded-3 text-center">
                            <h4>Subscribe to our mailing list!</h4>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email address">
                                </div>
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                                <div class="form-text">We don't spam</div>
                            </form>
                        </div>
                        <!-- Newsletter END -->

                        <!-- Advertisement -->
                        <div class="mt-4">
                            <a href="#" class="d-block card-img-flash">
                                <img src="assets/images/adv.png" alt="">
                            </a>
                        </div>
                </div>
            </div>

            {{-- Activités récentes --}}
            {{-- <div class="row"> --}}
                <div class="col-md-12 mt-5">
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
            {{-- </div> --}}
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('assets/front/js/plyr.js') }}"></script>
@endsection
