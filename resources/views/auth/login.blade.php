@extends('layouts.app')

@section('content')
    <div class="col-6 bg-white rounded p-3 ">

        <h2>Login</h2>
        <p>join us and starts ask medical questions</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">{{ __('ُEmail') }}</label>
                <input id="email" type="email"
                       class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                       value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password"
                       class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                       name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('login') }}
                </button>
                <a class="btn btn-link float-right" href="{{ route('password.request') }}">
                    {{ __('forget password?') }}
                </a>
            </div>
        </form>
    </div>
@endsection
