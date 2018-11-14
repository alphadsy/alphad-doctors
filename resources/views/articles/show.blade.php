@extends('layouts.3col')

@section('middle')
    @include('partials.article')
@endsection

@section('right')
    @include('partials.doctor', ['doctor'=> $article->doctor])
@endsection
