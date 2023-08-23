@extends('back.layouts.app')

@section('content')
    @include('back.Rubrique.form', [$title='Nouvelle Rubrique', $edit=false, $show=false])
@endsection
