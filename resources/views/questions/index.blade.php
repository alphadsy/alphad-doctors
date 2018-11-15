@extends('layouts.3col')

@section('middle')
    <div class="jumbotron">
        <h1 class="display-5">Add New Question</h1>
        <p class="lead">ask your question</p>
        @guest()
            <hr class="my-4">
            <p>you should be registered to ask question</p>
            <a class="btn btn-outline-secondary " href="{{route('register')}}" role="button"><i class="fa fa-user-plus"></i>register</a>
        @endguest
        @auth()
            <a class="btn btn-primary mr-2" href="{{route('questions.create')}}" role="button">Ask question</a>
        @endauth
    </div>

    <div class="row">
        @include('partials.questions', ['questions'=> $questions])
    </div>

@endsection
