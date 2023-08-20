@extends('back.layouts.app')

@section('content')
    @include('back.Commentaire.form', [$title='Nouvel Commentaire', $edit=false, $show=false])
@endsection
