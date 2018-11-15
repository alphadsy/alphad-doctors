@extends('layouts.3col')

@section('middle')
    @include('partials.question', ['question'=> $question])
@endsection
