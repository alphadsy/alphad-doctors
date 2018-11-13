@extends('layouts.2col')

@section('right')

<div class="col-md-6 bg-white p-3">

    <h2>edit information</h2>

    <form method="POST" action="{{ route('doctors.update') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="bio">{{ __('Bio') }}</label>
            <textarea class="form-control" name="bio" id="bio" rows="3">{{$doctor->bio}}</textarea>
            @if ($errors->has('bio'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bio') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="location">{{ __('location') }}</label>
            <select name="location" id="location" class="form-control">
                @foreach($locations as $location)
                    <option value="{{$location}}"
                            @if ($location == old('location', Auth::user()->doctor->location))
                            selected="selected"
                            @endif
                    >{{$location}}</option>
                @endforeach
            </select>
            @if ($errors->has('location'))
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('location') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="address">{{ __('address') }}</label>
            <textarea class="form-control" name="address" id="address" rows="3">{{$doctor->address}}</textarea>
            @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="contact">{{ __('contact') }}</label>
            <textarea class="form-control" name="contact" id="contact" rows="3">{{$doctor->contact}}</textarea>
            @if ($errors->has('contact'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contact') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="avatar">{{ __('avatar') }}</label>
            <input type="file" class="form-control" name="avatar" id="avatar">
            @if ($errors->has('avatar'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('avatar') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group  mt-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('save new information') }}
                </button>
        </div>
    </form>
</div>
@endsection
