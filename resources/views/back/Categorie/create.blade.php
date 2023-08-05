@extends('back.layouts.app')

@section('content')
    @include('back.Categorie.form', [$title='Nouvel Categorie', $edit=false, $show=false])
@endsection
