@extends('front/layouts/app', ['title' => 'Blog'])

@section('content')
    <h1>Bienvenue sur la page Blog</h1>
    <img src="data:image/png;base64, {{ generateImage(100, 70) }}" alt="">
@endsection
