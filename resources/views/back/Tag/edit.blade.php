@extends('back.layouts.app')

@section('content')
    @include('back.Tag.form', [$title='Modifier Tag',  $edit=true, $show=false])
@endsection
