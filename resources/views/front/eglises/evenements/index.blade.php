@extends('front/layouts/app', ['title' => 'Evènements'])

@php
    $firstEvent = $evenements->first();
@endphp

@section('content')
<section class="pt-0 pb-3">
    <div class="container">
        <div class="row">
            {{-- Breadcrumb --}}
            <div class="mt-3 mb-4 pb-3">
                <div class="col-12">
                    <div class="border bg-light py-4 text-center rounded-3">
                        <h1>Evènements</h1>
                        {{-- <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dots m-0">
                                <li class="breadcrumb-item"><a href="#"><i class="bi bi-house me-1"></i> Accueil</a></li>
                                <li class="breadcrumb-item active">All post</li>
                            </ol>
                        </nav> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if (count($evenements))
                    <!-- Card item START -->
                    <div class="card">
                    <!-- Image -->
                        <div class="card-image">
                            <img class="card-img" src="{{ asset("$firstEvent->img") }}" alt="">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h2 class="card-title"><a href="#" class="btn-link text-reset fw-bold">{{ $firstEvent->titre }}</a></h2>
                            <p>{{ $firstEvent->description }}</p>
                            <div class="d-md-flex align-items-center mt-3">
                                <h5 class="text-black me-3">Partager sur: </h5>
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
                    </div>
                @else
                <div class="card py-5">
                    <div class="card-body text-center">
                        <i class="fas fa-exclamation-circle fa-5x mb-4 text-danger"></i>
                        <h3 class="card-title">Aucun événement disponible</h3>
                        <p class="card-text">Il n'y a actuellement aucun événement à afficher.</p>
                    </div>
                </div>
                @endif
            </div>
        </div>

        {{-- Evenements recents --}}
        @if (count($evenements))
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

                            @foreach ($evenements as $evenement)
                                @if ($firstEvent->id != $evenement->id)
                                    <div class="card">
                                        <!-- Card img -->
                                        <div class="position-relative">
                                            <img class="card-img" src="{{ asset("$evenement->img") }}" alt="Card image">
                                        </div>
                                        <div class="card-body px-0 pt-3">
                                            <h5 class="card-title"><a href="javascript:;" class="btn-link text-reset fw-bold">{{ $evenement->titre }}</a></h5>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
@endsection
