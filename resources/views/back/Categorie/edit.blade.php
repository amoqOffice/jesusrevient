@extends('back.layouts.app')

@section('content')
    @include('back.Categorie.form', [$title='Modifier Categorie',  $edit=true, $show=false])
@endsection
