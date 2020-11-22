@extends('layouts.doctors')
@section('title')
   <title>{{trans('main.adddepartment')}}</title>
@endsection
 @section('content')
<div class="containerr" style="margin-top: 150px;">


@if ($errors->count())
        <div class="alert alert-danger" style="background: linear-gradient(red, transparent); margin-top: -100px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: white;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <form action="{{ URL('/mydoctor/sections') }}" method="POST" enctype="multipart/form-data">
  @csrf 
                <h1>{{trans('main.adddepartment')}}</h1>
                <div class="login">
                      <input type="text" name="department" placeholder="Department" class="input">
                      <input type="text" name="department_ar" placeholder="القسم" class="input">
                </div>
                <input type="file" name="img" class="input" style="background-color: white;">
                <div class="submit" style="margin-top: -15px;">
                <input type="submit" class="btn mt-3" value="{{trans('main.add')}}">
                </div>
   </form>
</div>
@endsection