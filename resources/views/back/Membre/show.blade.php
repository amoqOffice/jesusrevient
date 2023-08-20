@extends('back.layouts.app')

@section('content')
    @include('back.Membre.form', [$title='Détails de Membre', $edit=false, $show=true])
@endsection
