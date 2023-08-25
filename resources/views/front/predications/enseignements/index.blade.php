@extends('front/layouts/app', ['title' => 'Evangélisations'])

@section('content')
<section class="pt-0 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{-- Breadcrumb --}}
                <div class="border bg-light p-4 mb-2 text-center rounded-3">
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

                {{-- <div class="container" data-sticky> --}}
                <div class="container pt-2">
                    {{-- Title --}}
                    <div class="my-3 d-md-flex justify-content-between align-items-center">
                        <h2 class="m-0"><i class="bi bi-megaphone"></i> Enseignements récents</h2>
                    </div>
                    <div class="row pt-1">
                        <!-- Main Post -->
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 pb-4">
                                    <!-- Card img -->
                                    <div class="card">
                                        <div class="position-relative">
                                            <img class="card-img" src="/assets/front/images/blog/4by3/06.jpg" alt="Card image">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay Top -->
                                                <div class="w-100 mb-auto d-flex justify-content-end">
                                                    <div class="text-end ms-auto">
                                                        <!-- Card format icon -->
                                                        <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                                    </div>
                                                </div>
                                                <!-- Card overlay bottom -->
                                                <div class="w-100 mt-auto">
                                                    <!-- Card category -->
                                                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pt-3">
                                            <h4 class="card-title"><a class="btn-link text-reset fw-bold">Dirty little secrets about the business industry</a></h4>
                                            <p class="card-text">Place voice no arises along to. Parlors waiting so against me no. Wishing calling is warrant settled was lucky. Express besides it present if at an opinion visitor.</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="/assets/front/images/avatar/02.jpg" alt="avatar">
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
                                <div class="col-sm-12 col-lg-6 pb-4">
                                    <!-- Card img -->
                                    <div class="card">
                                        <div class="position-relative">
                                            <img class="card-img" src="/assets/front/images/blog/4by3/06.jpg" alt="Card image">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay Top -->
                                                <div class="w-100 mb-auto d-flex justify-content-end">
                                                    <div class="text-end ms-auto">
                                                        <!-- Card format icon -->
                                                        <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                                    </div>
                                                </div>
                                                <!-- Card overlay bottom -->
                                                <div class="w-100 mt-auto">
                                                    <!-- Card category -->
                                                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pt-3">
                                            <h4 class="card-title"><a class="btn-link text-reset fw-bold">Dirty little secrets about the business industry</a></h4>
                                            <p class="card-text">Place voice no arises along to. Parlors waiting so against me no. Wishing calling is warrant settled was lucky. Express besides it present if at an opinion visitor.</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="/assets/front/images/avatar/02.jpg" alt="avatar">
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
                                <div class="col-sm-12 col-lg-6 pb-4">
                                    <!-- Card img -->
                                    <div class="card">
                                        <div class="position-relative">
                                            <img class="card-img" src="/assets/front/images/blog/4by3/06.jpg" alt="Card image">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay Top -->
                                                <div class="w-100 mb-auto d-flex justify-content-end">
                                                    <div class="text-end ms-auto">
                                                        <!-- Card format icon -->
                                                        <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                                    </div>
                                                </div>
                                                <!-- Card overlay bottom -->
                                                <div class="w-100 mt-auto">
                                                    <!-- Card category -->
                                                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pt-3">
                                            <h4 class="card-title"><a class="btn-link text-reset fw-bold">Dirty little secrets about the business industry</a></h4>
                                            <p class="card-text">Place voice no arises along to. Parlors waiting so against me no. Wishing calling is warrant settled was lucky. Express besides it present if at an opinion visitor.</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="/assets/front/images/avatar/02.jpg" alt="avatar">
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
                                <div class="col-sm-12 col-lg-6 pb-4">
                                    <!-- Card img -->
                                    <div class="card">
                                        <div class="position-relative">
                                            <img class="card-img" src="/assets/front/images/blog/4by3/06.jpg" alt="Card image">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay Top -->
                                                <div class="w-100 mb-auto d-flex justify-content-end">
                                                    <div class="text-end ms-auto">
                                                        <!-- Card format icon -->
                                                        <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                                    </div>
                                                </div>
                                                <!-- Card overlay bottom -->
                                                <div class="w-100 mt-auto">
                                                    <!-- Card category -->
                                                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pt-3">
                                            <h4 class="card-title"><a class="btn-link text-reset fw-bold">Dirty little secrets about the business industry</a></h4>
                                            <p class="card-text">Place voice no arises along to. Parlors waiting so against me no. Wishing calling is warrant settled was lucky. Express besides it present if at an opinion visitor.</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="/assets/front/images/avatar/02.jpg" alt="avatar">
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
                            </div>
                        </div>

                        {{-- Side bar --}}
                        <div class="col-lg-3 mt-5 mt-lg-0">
                            <div>
                                <!-- Social widget START -->
                                <h4 class="mb-3">Réseaux sociaux</h4>
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
                                    <h4 class="mt-4 mb-3">Liste des Pays</h4>
                                    <!-- Category item -->
                                    <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 " style="background-image:url(data:image/png;base64, {{ generateImage(100, 100) }}); background-position: center left; background-size: cover;">
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
