@extends('layouts.3col')

@section('middle')
    @include('partials.articles', ['articles'=> $articles])
@endsection
