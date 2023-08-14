@extends('back.layouts.app')

@section('content')
    @include('back.Type.form', [$title='Détails de Type', $edit=false, $show=true])
@endsection
