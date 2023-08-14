@extends('back.layouts.app')

@section('content')
    @include('back.Activite.form', [$title='Modifier Activite',  $edit=true, $show=false])
@endsection
