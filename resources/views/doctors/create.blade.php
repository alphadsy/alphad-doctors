@extends('layouts.2col')

@section('right')

    @can('create', \App\Models\Doctor::class)

        <div class="col-md-6 bg-white p-3">

            <h2>Join us</h2>
            <p>join out team of professional doctors</p>

            <form method="POST" action="{{ route('doctors.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="specialization">{{ __('Specialization') }}</label>
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
                    <label for="association_id">{{ __('association number') }}</label>
                    <input class="form-control" name="association_id" id="association_id">
                    @if ($errors->has('association_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('association_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="bio">{{ __('bio') }}</label>
                    <textarea class="form-control" name="bio" id="bio" rows="3"></textarea>
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
                            <option value="{{$location}}">{{$location}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('location'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>

                {{--<div class="form-group">--}}
                {{--<label for="sub-location">{{ __('Sub Location') }}</label>--}}

                {{--<select name="sub-location" id="sub-location" class="form-control{{ $errors->has('sub-location') ? ' is-invalid' : '' }}" value="{{ old('sub-location') }}" required>--}}
                {{-- use Js to populate list --}}
                {{--</select>--}}

                {{--@if ($errors->has('sub-location'))--}}
                {{--<span class="invalid-feedback" role="alert">--}}
                {{--<strong>{{ $errors->first('sub-location') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
                {{--</div>--}}

                <div class="form-group">
                    <label for="address">{{ __('address') }}</label>
                    <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                    @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="contact">{{ __('contact') }}</label>
                    <textarea class="form-control" name="contact" id="contact" rows="3"></textarea>
                    @if ($errors->has('contact'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="avatar">{{ __('profile') }}</label>
                    <input type="file" class="form-control" name="avatar" id="avatar">
                    @if ($errors->has('avatar'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('avatar') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group  mt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('join us') }}
                        </button>
                </div>
            </form>
        </div>
    @else
        <p>you cant create new doctor account </p>
    @endcan
@endsection
