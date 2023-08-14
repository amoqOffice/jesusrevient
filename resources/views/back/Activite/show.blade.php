@extends('back.layouts.app')

@section('content')
    @include('back.Activite.form', [$title='Détails de Activite', $edit=false, $show=true])
@endsection
