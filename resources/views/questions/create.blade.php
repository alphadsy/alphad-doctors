@extends('layouts.2col')

@section('right')
    <div class="col-md-6 bg-white p-3">

        <h2>Add Question</h2>
        <p>ask the doctor</p>

        <form method="POST" action="{{ route('questions.store') }}">
            @csrf

            <div class="form-group">
                <label for="title">{{ __('Title') }}</label>
                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                       name="title" value="{{ old('title') }}" required autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="body">{{ __('Question') }}</label>


                <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}"
                          name="body" rows="15" required></textarea> {{ old('body') }}

                @if ($errors->has('body'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="gender">{{ __('gender') }}</label>

                <select name="gender" id="gender" class="form-control">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>

                @if ($errors->has('gender'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="birth_year">{{ __('birthday') }}</label>

               <input type="date" name="birth_year" id="birth_year" class="form-control" value="{{Auth::user()->birth_year}}">

                @if ($errors->has('birth_year'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('birth_year') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="specialization">{{ __('specialization') }}</label>

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
                <label for="patient_story">{{ __('patient medical story') }}</label>
                {{ Auth::User()->patient_story }}
                <textarea name="patient_story"  class="form-control" id="patient_story" rows="10">{{ Auth::User()->patient_story }}</textarea>

                @if ($errors->has('patient_story'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('patient_story') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="">
                    {{ __('add question') }}
                </button>
            </div>
        </form>
    </div>

@endsection
