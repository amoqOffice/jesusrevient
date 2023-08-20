@extends('back.layouts.app')

@section('content')
    @include('back.Commentaire.form', [$title='Détails de Commentaire', $edit=false, $show=true])
@endsection
