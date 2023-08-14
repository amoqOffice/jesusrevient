@extends('back.layouts.app')

@section('content')
    @include('back.Type.form', [$title='Nouvel Type', $edit=false, $show=false])
@endsection
