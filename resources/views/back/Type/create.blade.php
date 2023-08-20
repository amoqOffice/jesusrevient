@extends('back.layouts.app')

@section('content')
    @include('back.Type.form', [$title='Nouveau Type', $edit=false, $show=false])
@endsection
