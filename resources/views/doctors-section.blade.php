@extends('layouts.section')
@section('style')
      <style>
         #h{
            text-align: center !important; padding-bottom: 0px; font-size: 30px; margin-bottom: -30px; margin-top: 40px; color: white !important;
         }
        #h:hover{
            text-align: center !important; padding-bottom: 0px; margin-bottom: -30px; margin-top: 40px; color: #007bff !important;
         }
      </style>
@endsection
@section('drop')
   @if ( app()->getLocale() == 'ar')
     <div class="dropdown-menu dropdown-menu-left text-right"style="background: linear-gradient(#6caae9, transparent); margin-left: 70px;">
   @else
     <div class="dropdown-menu dropdown-menu-right mr-5"style="background: linear-gradient(#6caae9, transparent);">
   @endif
        <a class="dropdown-item" style="color: black;" href="{{ route('all',['id' => $section->id])}}">{{trans('main.all')}}</a> 
        @foreach($cities as $city2)
           @if ( app()->getLocale() == 'ar')
             <a class="dropdown-item" style="color: black;" href="{{ route('all',['id' => $section->id, 'id2' => $city2->id])}}">{{ $city2->city_ar }}
            @else
             <a class="dropdown-item" style="color: black;" href="{{ route('all',['id' => $section->id, 'id2' => $city2->id])}}">{{ $city2->city }}
            @endif          
                @auth
                 @if ( app()->getLocale() == 'ar')
                   <form action="{{ route('destroy-city',['id'=>$city2->id]) }}" method="post" style=" float: left; ">
                         <button class="btn btn-danger btn-xs" style="margin-top: -5px; height: 30px; width: 20px; margin-left: -5px;"><p style=" margin-top: -4px; margin-right: -5px;">X</p></button>
                          @csrf
                         @method('DELETE')
                   </form>
                   @else
                   <form action="{{ route('destroy-city',['id'=>$city2->id]) }}" method="post" style=" float: right; ">
                         <button class="btn btn-danger btn-xs" style="margin-top: -5px; height: 30px; width: 20px; margin-left: -5px;"><p style="margin-left: -5px; margin-top: -4px;">X</p></button>
                          @csrf
                         @method('DELETE')
                   </form>
                   @endif                  
                 @endauth
             </a>
        @endforeach
            <a class="dropdown-item" style="color: black;" href="{{ route('create-city') }}">{{trans('main.main_add-cit')}}</a>
    </div>
@endsection
     @section('content')
    <div class="overlay"></div>
    <section class="specialist-area section-padding">
        @if ( app()->getLocale() == 'ar')
               <h2 style="text-align: center; padding-bottom: 60px; margin-top: 0px;">{{trans('main.best')}} <strong style="color: #007bff; font-size: 40px;">{{ $section->department_ar }}</strong></h2>
        @else
               <h2 style="text-align: center; padding-bottom: 60px; margin-top: 0px;">{{trans('main.best')}} <strong style="color: #007bff;">{{ $section->department }}</strong></h2>      
        @endif
        <div class="container">
            <div class="row">
            @forelse($doctors as $doctor)
                <div class="col-lg-3 col-sm-6 mb-5 text-center">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset(Storage::url($doctor->img)) }}" alt="Doctor Image" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                              @if ( app()->getLocale() == 'ar')
                                <h3 style="font-size: 30px !important; margin-top: -20px !important;">{{trans('main.dr')}}{{ $doctor->name_ar }}</h3>
                                <h6 style="font-size: 15px !important;">{{trans('main.hos')}}{{ $doctor->hospital_ar }}<br>{{trans('main.pl')}}{{ $doctor->place_ar }}<br>{{trans('main.ph')}}{{ $doctor->phone }}<br>{{trans('main.c')}}{{ $doctor->doctorCity->city_ar }}</h6>
                              @else
                                <h3 >{{trans('main.dr')}}{{ $doctor->name }}</h3>
                                <h6>{{trans('main.hos')}}{{ $doctor->hospital }}<br>{{trans('main.pl')}}{{ $doctor->place }}<br>{{trans('main.ph')}}{{ $doctor->phone }}<br>{{trans('main.c')}}{{ $doctor->doctorCity->city }}</h6>                             
                              @endif
                                @auth
                                <a href="{{ route('edit', ['id'=>$doctor->id]) }}" class="btn btn-info">{{trans('main.edit')}}</a>
                              @if ( app()->getLocale() == 'ar')
                                <form action="{{ route('destroy',['id'=>$doctor->id]) }}" method="post" style="display: inline; padding-right: 100px;">
                              @else
                                <form action="{{ route('destroy',['id'=>$doctor->id]) }}" method="post" style="display: inline; padding-left: 100px;">
                              @endif
                                <input type="submit" value="{{trans('main.delete')}}" class="btn btn-danger">
                                  @csrf
                                @method('DELETE')
                                </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                </div>
                    @if($city)
                      @if ( app()->getLocale() == 'ar')
                       <h2 style="text-align: center; padding-bottom: 0px; margin-bottom: -50px; margin-top: 30px;">{{trans('main.ops')}} <strong style="color: #007bff; font-size:40px;">{{ $city->city_ar }}</strong></h2><br>
                      @else
                       <h2 style="text-align: center; padding-bottom: 0px; margin-bottom: -50px; margin-top: 30px;">{{trans('main.ops')}} <strong style="color: #007bff;">{{ $city->city }}</strong></h2><br>
                      @endif
                       <h2 id="h"><a href="{{ route('contactus') }}" id="h"><u>{{trans('main.help')}}</u></a></h2>
                     @endif
                 @endforelse
            </div>
        <div class="d-flex justify-content-center pt-4" style="margin-bottom: -120px;">
             {{ $doctors->links()}}
        </div>
        </div>
    </section>
    @endsection
   