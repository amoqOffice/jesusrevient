@extends('front/layouts/app', ['title' => 'Programmes Eglises / cellules'])

@section('content')
    <section class="pt-0 pb-3">
        <div class="container-fluid">
            {{-- Breadcrumb --}}
            <div class="border bg-light p-4 mb-2 text-center rounded-3">
                <h1>Programmes</h1>
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
                <!-- Title -->
                <div class="my-3 d-md-flex justify-content-between align-items-center">
                    <h2 class="m-0"><i class="bi bi-megaphone"></i> Programmes</h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-9">
                        <div class="row">
                            <div class="col-sm-12 col-lg-4 mb-4">
                                <div class="card card-body border bg-success bg-opacity-10 rounded-3 text-success p-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Icon -->
                                        <div class="icon-xl fs-1 mb-auto">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <!-- Content -->
                                        <div class="ms-3">
                                            <h3>Lundi</h3>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 mb-4">
                                <div class="card card-body border bg-success bg-opacity-10 rounded-3 text-success p-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Icon -->
                                        <div class="icon-xl fs-1 mb-auto">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <!-- Content -->
                                        <div class="ms-3">
                                            <h3>Mardi</h3>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 mb-4">
                                <div class="card card-body border bg-success bg-opacity-10 rounded-3 text-success p-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Icon -->
                                        <div class="icon-xl fs-1 mb-auto">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <!-- Content -->
                                        <div class="ms-3">
                                            <h3>Mercredi</h3>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 mb-4">
                                <div class="card card-body border bg-success bg-opacity-10 rounded-3 text-success p-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Icon -->
                                        <div class="icon-xl fs-1 mb-auto">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <!-- Content -->
                                        <div class="ms-3">
                                            <h3>Jeudi</h3>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 mb-4">
                                <div class="card card-body border bg-success bg-opacity-10 rounded-3 text-success p-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Icon -->
                                        <div class="icon-xl fs-1 mb-auto">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <!-- Content -->
                                        <div class="ms-3">
                                            <h3>Vendredi</h3>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 mb-4">
                                <div class="card card-body border bg-success bg-opacity-10 rounded-3 text-success p-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Icon -->
                                        <div class="icon-xl fs-1 mb-auto">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <!-- Content -->
                                        <div class="ms-3">
                                            <h3>Samedi</h3>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                            <h6 class="mb-0">● Test 1</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-4">
                            <div class="card card-body border bg-success bg-opacity-10 rounded-3 text-success p-3">
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <div class="icon-xl fs-1 mb-auto">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <!-- Content -->
                                    <div class="ms-3">
                                        <h3>Dimanche</h3>
                                        <h6 class="mb-0">● Test 1</h6>
                                        <h6 class="mb-0">● Test 1</h6>
                                        <h6 class="mb-0">● Test 1</h6>
                                        <h6 class="mb-0">● Test 1</h6>
                                        <h6 class="mb-0">● Test 1</h6>
                                        <h6 class="mb-0">● Test 1</h6>
                                        <h6 class="mb-0">● Test 1</h6>
                                        <h6 class="mb-0">● Test 1</h6>
                                        <h6 class="mb-0">● Test 1</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <div class="row">
                            <div class="mb-4">
                                <h5 class="mb-2">Rechercher le programme d'une Eglise</h5>
                                <!-- Input group -->
                                <div class="input-group">
                                    <input class="form-control form-control" placeholder="Bénin">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
