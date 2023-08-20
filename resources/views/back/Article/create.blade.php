@extends('back.layouts.app')

@section('content')
    @include('back.Article.form', [$title='Nouvel Article', $edit=false, $show=false])
@endsection
