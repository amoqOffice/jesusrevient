@extends('back.layouts.app')

@section('content')
    @include('back.Activite.form', [$title='Nouvelle Activité', $edit=false, $show=false])
@endsection
