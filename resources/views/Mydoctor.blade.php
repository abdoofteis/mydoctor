
   @extends('layouts.main')

   @section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('img/bg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center pl-5" style="padding-right: 80px;">
                        @if ( app()->getLocale() == 'ar')
                              <h1 class="mb-4" style="font-size: 80px;">{{trans('main.find')}}<br></h1><h1 style="font-size: 80px;">{{trans('main.we')}}</h1>
                        @else
                              <h1 class="mb-4">{{trans('main.find')}}<br></h1><h1 style="font-size: 55px;">{{trans('main.we')}}</h1>
                        @endif
                        <form action="{{ URL('/mydoctor/search') }}" method="POST" class="search-location mt-md-5">
                         @csrf 
                            <div class="row justify-content-center">
                                <div class="col-lg-10 align-items-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                    @if ( app()->getLocale() == 'ar')
                                            <input type="text" class="form-control mr-4" name="search" placeholder="{{trans('main.search')}}">
                                    @else
                                            <input type="text" class="form-control" name="search" placeholder="{{trans('main.search')}}">
                                    @endif         
                                            <button><span class="ion-ios-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mouse">
            <a href="#department" class="mouse-icon">
                <div class="mouse-wheel" style="margin: 2px auto 0; font-size: 30px;"><span class="ion-ios-arrow-down"></span></div>
            </a>
        </div>
    </div>

    <!-- slide start-->
    <a name="department"></a>
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-0 element-animate">
                <div class="col-md-8 text-center mb-2">
                    <h2 class="text-uppercase heading border-bottom mb-4"><b>{{trans('main.departments')}}</b></h2>
                    <p class="mb-0 lead">{{trans('main.des')}}</p>
                </div>
            </div>
            @if ( app()->getLocale() == 'ar')
               <div class="row element-animate" style="direction: ltr;">
            @else
                <div class="row element-animate">
            @endif
                  <div class="major-caousel js-carousel-2 owl-carousel">
                    
                @foreach($departments as $department)
                    <div>
                      @if ( app()->getLocale() == 'ar')
                        <div class="media d-block media-custom text-right">
                            <a href="{{ route('all',['id' => $department->id])}}"><img src="{{ asset(Storage::url($department->img)) }}" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">
                             <h3 class="mt-0 text-black"><a href="{{ route('all',['id' => $department->id])}}" class="text-black">{{trans('main.department')}} {{ $department->department_ar }}</a></h3>
                              <p>{{trans('main.spe')}}</p>
                              <p class="clearfix">
                              <a href="{{ route('all',['id' => $department->id])}}" class="float-right" style="margin-top: -10px;">{{trans('main.read')}}</a><br>
                      @else
                             <div class="media d-block media-custom text-left">
                            <a href="{{ route('all',['id' => $department->id])}}"><img src="{{ asset(Storage::url($department->img)) }}" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">
                            <h3 class="mt-0 text-black"><a href="{{ route('all',['id' => $department->id])}}" class="text-black">{{ $department->department }}<br>{{trans('main.department')}}</a></h3>
                             <p>{{trans('main.spe')}}</p>
                             <p class="clearfix">
                             <a href="{{ route('all',['id' => $department->id])}}" class="float-left" style="margin-top: -10px;">{{trans('main.read')}}</a><br>
                       @endif
                                </p>
                                @auth
                                <a href="{{ route('edit-section', ['id'=>$department->id]) }}" class="btn btn-info" >{{trans('main.edit')}}</a>
                                <form action="{{ route('destroy-section',['id'=>$department->id]) }}" method="post" style="display: inline; padding-left: 100px;">
                                        <input type="submit" value="{{trans('main.delete')}}" class="btn btn-danger">
                                         @csrf
                                         @method('DELETE')
                                </form>
                                @endauth


                            </div>
                        </div>
                    </div>
                @endforeach

                   
                </div>
                <!-- END slider -->
            </div>
        </div>
    </section>


 
    <!-- slide end-->
    
    <a name="Quotes"></a>
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                  @if ( app()->getLocale() == 'ar')

                    <div class="col-md-6 p-md-5 img d-flex justify-content-center align-items-center" style="background-image: url(img/bbgg.jpg) ;">
                    </div>
                    <div class="col-md-6 wrap-about py-md-5 ftco-animate text-right">                   
                    <div class="heading-section p-md-5">
                        <h2 class="mb-4 pr-3">{{trans('main.main_q')}}</h2>
                        <ul>
                            <li>"{{trans('main.q1')}}" <br><strong style="margin-left: 300px;">Francis Bacon</strong>
                            </li>
                            <li>"{{trans('main.q2')}}" <br><strong style="margin-left: 300px;">Chinese</strong>
                            </li>
                            <li>"{{trans('main.q3')}}" <br><strong style="margin-left: 130px;">Buddha</strong>
                            </li>
                            <li>"{{trans('main.q4')}}" <br><strong style="margin-left: 50px;">Anne Wilson Schaef</strong>
                            </li>
                            <li>"{{trans('main.q5')}}"<br><strong style="margin-left: 400px;">Publilius Syrus</strong>
                            </li>
                            <li>"{{trans('main.q6')}}" <br><strong style="margin-left: 390px;">Albert Schweitzer</strong>
                            </li>
                            <li>"{{trans('main.q7')}}" <br><strong style="margin-left: 450px;">P.T.Barnum</strong>
                            </li>
                        </ul>
                    </div>

                    @else

                    <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(img/bbgg.jpg);">
                    </div>
                    <div class="col-md-6 wrap-about py-md-5 ftco-animate">                   
                    <div class="heading-section p-md-5">
                        <h2 class="mb-4">{{trans('main.main_q')}}</h2>
                        <ul>
                            <li>"{{trans('main.q1')}}" <br><strong style="margin-left: 300px;">Francis Bacon</strong>
                            </li>
                            <li>"{{trans('main.q2')}}" <br><strong style="margin-left: 300px;">Chinese</strong>
                            </li>
                            <li>"{{trans('main.q3')}}" <br><strong style="margin-left: 130px;">Buddha</strong>
                            </li>
                            <li>"{{trans('main.q4')}}" <br><strong style="margin-left: 50px;">Anne Wilson Schaef</strong>
                            </li>
                            <li>"{{trans('main.q5')}}"<br><strong style="margin-left: 400px;">Publilius Syrus</strong>
                            </li>
                            <li>"{{trans('main.q6')}}" <br><strong style="margin-left: 390px;">Albert Schweitzer</strong>
                            </li>
                            <li>"{{trans('main.q7')}}" <br><strong style="margin-left: 450px;">P.T.Barnum</strong>
                            </li>
                        </ul>
                    </div>
                    @endif                    
                </div>
            </div>
        </div>
    </section>
    <br>
   

  @endsection
