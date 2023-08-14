@extends('back.layouts.app')

@section('content')
    @include('back.Rubrique.form', [$title='Modifier Rubrique',  $edit=true, $show=false])
@endsection
