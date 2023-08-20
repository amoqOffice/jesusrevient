@extends('back.layouts.app')

@section('content')
    @include('back.Article.form', [$title='Modifier Article',  $edit=true, $show=false])
@endsection
