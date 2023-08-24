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
                    <h1>Prédication sur {{ $categorie }}</h1>
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
                                @if ($predication->url)
                                    <!-- Vidéo de la prédication -->
                                    <div class="player-wrapper rounded-3 overflow-hidden">
                                        <div class="player-youtube" >
                                            <iframe src="{{ getYoutubeEmbedLink($predication->url) }}"></iframe>
                                        </div>
                                    </div>
                                @else
                                    {{-- Image de l'Activité --}}
                                    <div class="w-100 h-500">
                                        <img class="avatar-img rounded-3" src="{{ asset($predication->img) }}" alt="avatar">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h3 class="card-title my-2 text-capitalize">{{ str_format($predication->titre) }}</h3>
                        <!-- Card info -->
                        <div class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" src="{{ asset('assets/front/images/_content/card_logo.png') }}" alt="avatar">
                        </div>
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small opacity-6">
                            <li class="nav-item">
                                <div class="nav-link">
                                    by <a href="#" class="text-reset btn-link">Bryan</a>
                                </div>
                            </li>
                            <li class="nav-item">Jun 17, 2022</li>
                        </ul>

                        @if (strlen($predication->description))
                            <h5 class="mt-4">Descrpition</h5>
                            <p>{{ $predication->description }}</p>
                        @endif
                    </div>
                </div>

                <!-- Comments START -->
                {{-- <div class="mt-3">
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
                    <!-- <div class="my-4 d-flex ps-2 ps-md-3">
                        <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/03.jpg" alt="avatar">
                        <div>
                            <div class="mb-2">
                                <h5 class="m-0">Frances Guerrero</h5>
                                <span class="me-3 small">June 14, 2022 at 12:35 pm </span>
                                <a href="#" class="text-body fw-normal">Reply</a>
                            </div>
                            <p>Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>
                        </div>
                    </div> -->

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
                </div> --}}

                <!-- Faire un commentaire -->
                {{-- <div>
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
                </div> --}}
            </div>
            <div class="col-lg-3">
                <!-- Categories -->
                <div class="row g-2">
                    <div class="row g-2 mt-4">
                    {{-- @if(count($categories)) --}}
                            <h5>Catégories</h5>
                            {{-- @foreach ($categories as $categorie)
                            <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-15 rounded p-2 position-relative">
                                <h6 class="m-0 text-dark">{{ $categorie->nom }}</h6>
                                <a href="#" class="badge bg-primary text-light stretched-link">{{ count($categorie->activites) }}</a>
                            </div>
                            @endforeach --}}
                    {{-- @endif --}}

                    <!-- Newsletter START -->
                    {{-- <div class="bg-light p-4 mt-4 rounded-3 text-center">
                        <h4>Abonnez-vous à notre liste de diffusion!</h4>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email address">
                            </div>
                            <button type="submit" class="btn btn-primary">Souscrire</button>
                            <!-- <div class="form-text">We don't spam</div> -->
                        </form>
                    </div> --}}

                    <!-- Posts sur le meme sujet -->
                    <div class="mt-4">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <h4 class="mt-4 mb-3">Posts récents</h4>
                            <!-- Recent post item -->
                            {{-- @foreach ($predications as $predication) --}}
                                {{-- <div class="card mb-3">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <img class="rounded" src="/assets/front/images/blog/4by3/thumb/01.jpg" alt="">
                                        </div>
                                        <div class="col-8">
                                            <h6><a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">The pros and cons of business agency</a></h6>
                                            <div class="small mt-1">May 17, 2022</div>
                                        </div>
                                    </div>
                                </div> --}}
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
@endsection
