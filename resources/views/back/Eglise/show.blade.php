@extends('back.layouts.app')

@section('content')
    @include('back.Eglise.form', [$title='Détails de Eglise', $edit=false, $show=true])
@endsection
