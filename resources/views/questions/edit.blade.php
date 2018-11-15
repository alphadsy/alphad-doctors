@extends('layouts.2col')

@section('right')
    <div class="col-md-6 bg-white p-3">

        <h2>Edit Question</h2>

        <form method="POST" action="{{ route('questions.update', ['question' => $question->id]) }}">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="title">{{ __('Title') }}</label>
                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                       name="title" value="{{ old('title', $question->title) }}" required autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="body">{{ __('Question') }}</label>

                <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}"
                          name="body" rows="15" required>{{ old('body', $question->body) }}</textarea>

                @if ($errors->has('body'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="">
                    {{ __('edit question') }}
                </button>
            </div>
        </form>
    </div>

@endsection
