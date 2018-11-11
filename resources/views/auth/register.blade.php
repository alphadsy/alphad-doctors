@extends('layouts.app')

@section('content')
    <div class="col-md-8 bg-white rounded p-3 ">
        <h2>Join Us</h2>
        <p>join us and starts ask medical questions</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">{{ __('Full Name') }}</label>
                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email"
                       class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="mobile">{{ __('Mobile') }}</label>
                <input id="mobile" type="text"
                       class="form-control {{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus>

                @if ($errors->has('mobile'))
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password-confirm">{{ __('Password Confirmation') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <label for="gender">{{ __('Gender') }}</label>
                <select class="form-control " name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                @if ($errors->has('gender'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="birth_date">{{ __('Birthday') }}</label>
                <input class="form-control " type="date" name="birth_date" id="birth_date">

                @if ($errors->has('birth_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('birth_date') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="location">{{ __('Location') }}</label>
                <select class="form-control " name="location" id="location">
                    @foreach($locations as $location)
                        <option value="{{$location}}">{{$location}}</option>
                    @endforeach
                </select>

                @if ($errors->has('location'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('location') }}</strong>
                   </span>
                @endif
            </div>

            <div class="form-group">
                <label for="patient_story">{{ __('Patient Story') }}</label>
                <textarea class="form-control" name="patient_story" id="patient_story" cols="30">{{ old('patient_story') }}</textarea>
                @if ($errors->has('patient_story'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('patient_story') }}</strong>
                   </span>
                @endif
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>

@endsection
