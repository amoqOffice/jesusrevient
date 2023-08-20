@extends('back.layouts.app')

@section('content')
    @include('back.Responsable.form', [$title='Détails de Responsable', $edit=false, $show=true])
@endsection
