@extends('layouts.3col')

@section('middle')
    @include('partials.doctors', ['doctors' => $doctors])
@endsection
