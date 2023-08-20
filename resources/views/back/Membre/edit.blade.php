@extends('back.layouts.app')

@section('content')
    @include('back.Membre.form', [$title='Modifier Membre',  $edit=true, $show=false])
@endsection
