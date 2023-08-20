@extends('back.layouts.app')

@section('content')
    @include('back.Eglise.form', [$title='Modifier Eglise',  $edit=true, $show=false])
@endsection
