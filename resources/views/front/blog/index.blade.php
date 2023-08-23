@extends('front/layouts/app', ['title' => 'Blog'])

@section('content')
    <h1>Bienvenue sur la page Blog</h1>
    <img src="{{ generateImage(100, 70) }}" alt="">
    @include('front.partials.breadcrumbSimple')
@endsection
