@extends('back.layouts.app')

@section('content')
    @include('back.Rubrique.form', [$title='Nouvel Rubrique', $edit=false, $show=false])
@endsection
