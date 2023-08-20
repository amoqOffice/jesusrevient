@extends('back.layouts.app')

@section('content')
    @include('back.Responsable.form', [$title='Nouveau Responsable', $edit=false, $show=false])
@endsection
