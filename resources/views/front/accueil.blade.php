@extends('front/layouts/app', ['title' => 'Accueil'])

@section('content')
    {{ Widget::homeCarousel() }}
    {{ Widget::viewMore() }}
@endsection
