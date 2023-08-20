@extends('back.layouts.app')

@section('content')
    @include('back.Article.form', [$title='Détails de Article', $edit=false, $show=true])
@endsection
