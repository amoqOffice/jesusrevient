@extends('back.layouts.app')

@section('content')
    @include('back.Membre.form', [$title='Nouvel Membre', $edit=false, $show=false])
@endsection
