@extends('back.layouts.app')

@section('content')
    @include('back.Eglise.form', [$title='Nouvelle Eglise', $edit=false, $show=false])
@endsection
