@extends('layouts.doctors')
@section('title')
   <title>Add City</title>
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
  <form action="{{ url('section/' . $cities->id) }}" method="POST">
  @csrf 
  @method('PATCH')
                <h1>Add City</h1>
                <div class="login">
                      <input type="text" name="city" placeholder="City" class="input" value="{{ $cities->city }}">
                      <input type="text" name="city_ar" placeholder="المدينة" class="input" value="{{ $cities->city_ar }}">
                </div>
                <div class="submit" style="margin-top: -15px;">
                <input type="submit input" class="btn mt-3" value="Add">
                </div>
   </form>
</div>
@endsection