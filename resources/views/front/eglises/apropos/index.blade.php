@extends('front/layouts/app', ['title' => 'A Propos'])

@section('content')
<section class="pt-0 pb-3">
    <div class="container-fluid">
        {{-- Breadcrumb --}}
        <div class="border bg-light p-4 mb-2 text-center rounded-3">
            <h1>A Propos</h1>
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
                            <h2 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Histoire de l'Eglise</a></h2>
                            <p>Drawings offended yet answered Jennings perceive laughing six did far was out laughter raptures. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore corporis quibusdam amet veritatis, deserunt nisi accusantium distinctio non sit dolore repellat quam fugiat quasi, quidem consequatur asperiores quis voluptatem. Praesentium.</p>
                        </div>
                        <div class="mt-3 d-md-flex justify-content-between align-items-center">
                            <h3 class="m-0"><i class="fas fa-search"></i> Contact des serviteurs</h3>
                        </div>
                        <div class="row my-2">
                            <!-- Title -->
                            <div class="mt-3 mb-2 d-md-flex justify-content-between align-items-center">
                                <h4 class="m-0"><i class="fas fa-search"></i> Recherche sur les Eglises JESUS-REVIENT</h4>
                            </div>
                            <form class="row g-2 gxl-4 bg-light p-3">
                                <!-- Search -->
                                <div class="col-xl-6">
                                    <div class="rounded position-relative">
                                        <input class="form-control pe-5" type="search" placeholder="Search products by name or keyword..." aria-label="Search">
                                        <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
                                    </div>
                                </div>

                                <!-- Select -->
                                <div class="col-md-4 col-xl-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Filter</option>
                                        <option value="1">T-shirts</option>
                                        <option value="2">Shoes</option>
                                        <option value="3">Tracking bags</option>
                                    </select>
                                </div>

                                <!-- Select -->
                                <div class="col-md-4 col-xl-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Sort by</option>
                                        <option value="1">Name</option>
                                        <option value="2">Low to High Price</option>
                                        <option value="3">Heigh to Low Price</option>
                                    </select>
                                </div>

                                <div class="col-md-4 col-xl-3 d-grid d-xl-none">
                                <!-- Filter offcanvas button -->
                                    <button class="btn btn-primary-soft btn-primary-check mb-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                                        <i class="fas fa-sliders-h me-1"></i> Show filter
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
