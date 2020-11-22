@extends('layouts.doctors')
@section('title')
    <title>{{trans('main.main_login')}}</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header pb-0 text-center" style="background: lightgrey;"><h5><b>{{trans('main.admin')}}</b></h5></div>

                <div class="card-body" style="background: lightgrey;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group row">
                           @if ( app()->getLocale() == 'ar')    
                            <label for="email" class="col-md-4 col-form-label text-md-left"><h6 style="color: black;">{{trans('main.emailAdress')}}</h6></label>
                          @else
                            <label for="email" class="col-md-4 col-form-label text-md-right"><h6 style="color: black;">{{trans('main.emailAdress')}}</h6></label>
                          @endif
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input mt-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  @if ( app()->getLocale() == 'ar')
                                        <label class="form-check-label pl-5" for="remember">
                                        <h6 style="color: black; padding-right: 20px;">{{trans('main.rem')}}</h6>
                                  @else
                                        <label class="form-check-label" for="remember">
                                        <h6 style="color: black;">{{trans('main.rem')}}</h6>
                                  @endif
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{trans('main.main_login')}}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{trans('main.for')}}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
