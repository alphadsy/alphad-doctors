@extends('layouts.3col')

@section('middle')
@endsection

@section('right')
    @include('partials.doctor', ['doctor'=> $doctor])
@endsection
