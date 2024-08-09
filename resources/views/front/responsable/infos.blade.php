@extends('front/layouts/app', ['title' => 'Information sur les Serviteurs'])

@section('content')
    <section class="p-0 mb-4">
        <div class="container">
            <div class="row g-0">
                @isset($responsable)
                    {{-- <ul>
                        <li>Nom : {{ $responsable->nom }}</li>
                        <li>Prenoms : {{ $responsable->prenoms }}</li>
                        <li>Nom_bapteme : {{ $responsable->nom_bapteme }}</li>
                        <li>Naissance : {{ $responsable->naissance }}</li>
                        <li>Poste : {{ $responsable->poste }}</li>
                        <li>Matricule : {{ $responsable->matricule }}</li>
                    </ul> --}}
                    <div class="col-lg-9 mx-auto pt-md-5">
                        <h1>Informations sur les Ministres</h4>

                        <div class="card border rounded-3 p-3 mt-4">
                            <div class="row g-4">
                            <!-- Image -->
                            <div class="col-md-4">
                                <div class="position-relative">
                                    <img class="rounded-3" src="https://i.ytimg.com/vi/ptIY9lRNI3Y/maxresdefault.jpg" alt="Card image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-fle justify-content-between mb-2">
                                    <ul class="lead list-unstyled">
                                        <li>Nom: <span class="fw-bold text-uppercase">{{ $responsable->nom }}</span></li>
                                        <li>Prénom(s): <span class="fw-bold text-uppercase">{{ $responsable->prenoms }}</span></li>
                                        <li>Nom de Baptême : <span class="fw-bold text-uppercase">{{ $responsable->nom_bapteme }}</span></li>
                                        <li>Date de Naissance : <span class="fw-bold text-uppercase">{{ $responsable->naissance }}</span></li>
                                        <li>Fonction : <span class="fw-bold text-uppercase">{{ $responsable->poste }}</span></li>
                                        <li>Matricule : <span class="fw-bold text-uppercase">{{ $responsable->matricule }}</span></li>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <img class="rounded-3" src="{{ asset('QrCode/codeOr_'.$responsable->matricule.'.png') }}" alt="Card image">
                            </div>
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </div>
@endsection
