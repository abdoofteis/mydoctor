@extends('layouts.doctors')
@section('title')
   <title>{{trans('main.addcity')}}</title>
@endsection
 @section('content')
<div class="containerr" style="margin-top: 150px;">

@if ($errors->count())
        <div class="alert alert-danger" style="background: linear-gradient(red, transparent); margin-top: -80px">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: white;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <form action="{{ URL('/mydoctor/city') }}" method="POST">
  @csrf 
                <h1>{{trans('main.addcity')}}</h1>
                {{-- <input type="text" placeholder="City" name="city" class="input"> --}}
                <div class="login">
                      <input type="text" name="city" placeholder="City" class="input">
                      <input type="text" name="city_ar" placeholder="المدينة" class="input">
                </div>
                <div class="submit" style="margin-top: -15px;">
                <input type="submit" class="btn mt-3" value="{{trans('main.add')}}">
                </div>
   </form>
</div>
@endsection