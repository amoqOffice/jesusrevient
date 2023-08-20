@extends('back.layouts.app')

@section('content')
    @include('back.Tag.form', [$title='Nouvel Tag', $edit=false, $show=false])
@endsection
