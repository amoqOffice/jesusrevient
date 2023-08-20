@extends('back.layouts.app')

@section('content')
    @include('back.Tag.form', [$title='Détails de Tag', $edit=false, $show=true])
@endsection
