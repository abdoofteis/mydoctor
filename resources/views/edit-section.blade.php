@extends('layouts.doctors')
@section('title')
   <title>{{trans('main.editdepartment')}}</title>
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
  <form action="{{ url('section/' . $departments->id) }}" method="POST" enctype="multipart/form-data" style="margin-top: -100px;">
  @csrf 
  @method('PATCH')
                <h1>{{trans('main.editdepartment')}}</h1>
                <div class="login">
                      <input type="text" name="department" placeholder="Department" class="input" value="{{ $departments->department }}">
                      <input type="text" name="department_ar" placeholder="القسم" class="input" value="{{ $departments->department_ar }}">
                </div>
                <input type="file" name="img" class="input" style="background-color: white;">
                 @if($departments->img)
                     <img src="{{ asset(Storage::url($departments->img)) }}" alt="" width="200">
                 @endif
                <div class="submit" style="margin-top: -15px;">
                <input type="submit" class="btn mt-3" value="{{trans('main.edit')}}">
                </div>
   </form>
</div>
@endsection