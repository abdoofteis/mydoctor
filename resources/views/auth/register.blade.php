@extends('layouts.doctors')
@section('title')
    <title>{{trans('main.main_reg')}}</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-0 text-center" style="background: lightgrey;"><h5><b>{{trans('main.main_reg')}}</b></h5></div>

                <div class="card-body" style="background: lightgrey;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                          @if ( app()->getLocale() == 'ar')
                            <label for="name" class="col-md-4 col-form-label text-md-left"><h6 style="color: black;">{{trans('main.name')}}</h6></label>
                          @else
                            <label for="name" class="col-md-4 col-form-label text-md-right"><h6 style="color: black;">{{trans('main.name')}}</h6></label>
                         @endif
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          @if ( app()->getLocale() == 'ar')
                            <label for="email" class="col-md-4 col-form-label text-md-left"><h6 style="color: black;">{{trans('main.emailAdress')}}</h6></label>
                          @else
                            <label for="email" class="col-md-4 col-form-label text-md-right"><h6 style="color: black;">{{trans('main.emailAdress')}}</h6></label>
                          @endif
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          @if ( app()->getLocale() == 'ar')
                            <label for="password" class="col-md-4 col-form-label text-md-left"><h6 style="color: black;">{{trans('main.pass')}}</h6></label>
                          @else
                            <label for="password" class="col-md-4 col-form-label text-md-right"><h6 style="color: black;">{{trans('main.pass')}}</h6></label>
                          @endif
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          @if ( app()->getLocale() == 'ar')
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left"><h6 style="color: black;">{{trans('main.conpass')}}</h6></label>
                          @else
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><h6 style="color: black;">{{trans('main.conpass')}}</h6></label>
                          @endif
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                          @if ( app()->getLocale() == 'ar')
                            <div class="col-md-6 offset-md-4 pl-5">
                          @else
                            <div class="col-md-6 offset-md-4">
                          @endif
                                <button type="submit" class="btn btn-primary">
                                    {{trans('main.main_reg')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
