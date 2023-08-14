@extends('back.layouts.app')

@section('content')
    @include('back.Type.form', [$title='Modifier Type',  $edit=true, $show=false])
@endsection
