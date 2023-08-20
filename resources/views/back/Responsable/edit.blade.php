@extends('back.layouts.app')

@section('content')
    @include('back.Responsable.form', [$title='Modifier Responsable',  $edit=true, $show=false])
@endsection
