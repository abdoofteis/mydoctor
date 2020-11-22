
@extends('layouts.doctors')
@section('title')
      <title>{{trans('main.adddoctor')}}</title>
@endsection
@section('cont')
<div class="containerr" style="margin-top: 40px;">

@if ($errors->count())
        <div class="alert alert-danger" style="background: linear-gradient(red, transparent);">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: white;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <form action="{{ URL('/mydoctor') }}" method="POST" enctype="multipart/form-data">
  @csrf 
                <h1 style="margin-bottom: 5px; margin-top: 10px;">ِ{{trans('main.adddoctor')}}</h1>
                <div class="login">
                      <input type="text" name="name" placeholder="Doctor Name" class="input">
                      <input type="text" name="name_ar" placeholder="اسم الطبيب" class="input">
                </div>
                <div class="login">
                      <input type="text" name="hospital" placeholder="Hospital" class="input">
                      <input type="text" name="hospital_ar" placeholder="العيادة" class="input">
                </div>
                <select name="section" class="input">
                      @foreach ($departments as $department)
                        @if ( app()->getLocale() == 'ar')
                          <option value="{{ $department->id }}"> {{ $department->department_ar }} </option>
                        @else
                          <option value="{{ $department->id }}"> {{ $department->department }} </option>
                        @endif
                      @endforeach
                </select>
                <select name="city" class="input">
                      @foreach ($cities as $city)
                        @if ( app()->getLocale() == 'ar')
                          <option value="{{ $city->id }}"> {{ $city->city_ar }} </option>
                        @else
                          <option value="{{ $city->id }}"> {{ $city->city }} </option>
                        @endif
                      @endforeach
                </select>
                <div class="login">
                      <input type="text" name="place" placeholder="Place" class="input">
                      <input type="text" name="place_ar" placeholder="مكان العيادة" class="input">
                </div>
                <input type="text" placeholder="{{trans('main.phonenumber')}}" name="phone" class="input">
                <input type="file" name="img" class="input" style="background-color: white;">
                <div class="msg">
                        <textarea class="area" name="description" placeholder="{{trans('main.message')}}"></textarea>
                </div>
                <div class="submit" style="margin-top: -20px;">
                <input type="submit" class="btn" value="{{trans('main.add')}}" style="margin-top: -5px;">
                </div>
   </form>
   @endsection
