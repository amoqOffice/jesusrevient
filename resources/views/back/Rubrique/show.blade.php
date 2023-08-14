@extends('back.layouts.app')

@section('content')
    @include('back.Rubrique.form', [$title='Détails de Rubrique', $edit=false, $show=true])
@endsection
