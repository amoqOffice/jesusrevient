@extends('back.layouts.app')

@section('content')
    @include('back.Categorie.form', [$title='Détails de Categorie', $edit=false, $show=true])
@endsection
