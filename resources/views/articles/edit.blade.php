@extends('layouts.2col')

@section('right')
    <div class="row justify-content-center">
        <div class="col-md-8 bg-white rounded p-3">
            <h2>Edit Articl</h2>

            <form method="POST" action="{{ route('articles.update', ['article' => $article ]) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label for="title">{{ __('Title') }}</label>

                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $article->title }}" required autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="body">{{ __('Body') }}</label>

                    <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" rows="30" required>{{ $article->body }}</textarea>

                    @if ($errors->has('body'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="cover" class="col-md-4">{{ __('cover') }}</label>

                    <input type="file" name="cover" id="cover" class="form-control">

                    @if ($errors->has('cover'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cover') }}</strong>
                    </span>
                    @endif
                </div>


                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
@endsection
