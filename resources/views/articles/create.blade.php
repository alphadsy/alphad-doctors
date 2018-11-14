@extends('layouts.2col')

@section('right')
    <div class="col-md-8 bg-white rounded p-3">
        <h2>Add Medicla Article</h2>

        <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title" class="col-md-4 col-form-label">{{ __('article title') }}</label>

                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="body" class="col-md-4 col-form-label">{{ __('article') }}</label>

                <textarea  rows="30" id="body" type="text" class="form-control {{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" required>{{ old('body') }}</textarea>

                @if ($errors->has('body'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group">
                <label for="specialization" class="col-md-4 col-form-label">{{ __('specialization') }}</label>

                <select name="specialization" id="specialization" class="form-control">
                    @foreach($specializations as $specialization)
                        <option value="{{$specialization}}">{{$specialization}}</option>
                    @endforeach
                </select>
                @if ($errors->has('specialization'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('specialization') }}</strong>
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
                <button  type="submit" class="btn btn-primary" id="">
                    {{ __('create article') }}
                </button>
            </div>
        </form>
    </div>
@endsection
