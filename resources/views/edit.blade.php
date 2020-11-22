
@extends('layouts.doctors')
@section('title')
      <title>{{trans('main.editdoctor')}}</title>
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
  <form action="{{ url('mydoctor/' . $doctor->id) }}" method="POST" enctype="multipart/form-data">
  @csrf 
  @method('PATCH')
                <h1 style="margin-bottom: 5px; margin-top: 10px;">{{trans('main.editdoctor')}}</h1>
                <div class="login">
                      <input type="text" name="name" placeholder="Doctor Name" class="input" value="{{ $doctor->name }}">
                      <input type="text" name="name_ar" placeholder="اسم الطبيب" class="input" value="{{ $doctor->name_ar }}">
                </div>
                <div class="login">
                      <input type="text" name="hospital" placeholder="Hospital" class="input" value="{{ $doctor->hospital }}">
                      <input type="text" name="hospital_ar" placeholder="العيادة" class="input" value="{{ $doctor->hospital_ar }}">
                </div>
                <select name="section" class="input">
                      @foreach ($departments as $department)
                        @if ( app()->getLocale() == 'ar')
                          <option {{ $department->id == $doctor->section ? 'selected' : ''}} value="{{ $department->id }}"> {{ $department->department_ar }} </option>
                        @else
                          <option {{ $department->id == $doctor->section ? 'selected' : ''}} value="{{ $department->id }}"> {{ $department->department }} </option>
                        @endif
                      @endforeach
                </select>
                <select name="city" class="input">
                      @foreach ($cities as $city)
                        @if ( app()->getLocale() == 'ar')
                          <option {{ $city->id == $doctor->city ? 'selected' : '' }} value="{{ $city->id }}"> {{ $city->city_ar }} </option>
                        @else
                          <option {{ $city->id == $doctor->city ? 'selected' : '' }} value="{{ $city->id }}"> {{ $city->city }} </option>
                        @endif
                      @endforeach
                </select>
                <div class="login">
                      <input type="text" name="place" placeholder="Place" class="input" value="{{ $doctor->place }}">
                      <input type="text" name="place_ar" placeholder="مكان العيادة" class="input" value="{{ $doctor->place_ar }}">
                </div>
                <input type="text" placeholder="{{trans('main.phonenumber')}}" name="phone" class="input" value="{{ $doctor->phone }}">
                <div class="msg">
                        <textarea class="area" style="height: 100px;" name="description" placeholder="{{trans('main.message')}}" value="{{ $doctor->name }}"></textarea>
                </div>
                 <input type="file" name="img" class="input" style="background-color: white; margin-top: -20px;">
                 @if($doctor->img)
                     <img src="{{ asset(Storage::url($doctor->img)) }}" alt="" width="200">
                 @endif
                <div class="submit" style="margin-top: 0px;">
                <input type="submit" class="btn" value="{{trans('main.edit')}}">
                </div>
   </form>
   @endsection
