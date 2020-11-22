<!DOCTYPE html>
<html lang="{{   app()->getLocale() }}">

<head>
    <title>{{trans('main.main_mydoctor')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    @if ( app()->getLocale() == 'ar')
         <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
    @endif

    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/slide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>

                 .oo:hover,
                .li a:hover,
               .info-sec p:hover {
               color: black;
          }
          .info-sec li a{
              color: white;
          }

    </style>
</head>

<body>
      <ul class="mr-auto" style="margin: -10px 0px;">
           <li class="nav-link"><a href="http://localhost/my-doctor/public/lang/en"><img src="{{ asset('img/img.png') }}" alt="English"></a>  
          <a href="http://localhost/my-doctor/public/lang/ar"><img src="{{ asset('img/img2.png') }}" alt="Arabic"></a></li> 
      </ul>
@if( app()->getlocale() == 'ar')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light text-right" style="margin-right: -50px;" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand text-right" style="font-size: 35px; margin-right: 50px !important; margin: -7px 0px;" href="{{ route('page') }}">{{trans('main.main_mydoctor')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span><p style="font-size: 23px; padding-top: 15px;">{{trans('main.menu')}}</p>
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="{{ route('page') }}" class="nav-link" style="font-size: 25px;">{{trans('main.main_home')}}</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#department" class="nav-link" style="font-size: 25px;">{{trans('main.main_department')}}</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#Quotes" class="nav-link" style="font-size: 25px;">{{trans('main.main_q')}}</a></li>
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" target="_blank" class="nav-link" style="font-size: 25px;">{{trans('main.main_about')}}</a></li>
                    <li class="nav-item"><a href="{{ route('contactus') }}" class="nav-link" style="font-size: 25px;">{{trans('main.main_contact')}}</a></li>
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}" style="font-size: 25px;">{{trans('main.main_login')}}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}" style="font-size: 25px;">{{trans('main.main_reg')}}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 20px; padding-top: 20px;">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right"style="background: linear-gradient(#6caae9, transparent);">
              <ul style="margin-right: -40px;">
                 <li class="dropdown-item"><a href="{{ route('create-doctor') }}" style="color: black;">{{trans('main.main_add-doc')}}</a></li>
                <li class="dropdown-item"><a href="{{ route('create-section') }}" style="color: black;">{{trans('main.main_add-dep')}}</a></li>
                <li class="dropdown-item"><a href="{{ route('create-city') }}" style="color: black;">{{trans('main.main_add-cit')}}</a></li>

                  <a class="dropdown-item" style="color: black;" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{trans('main.main_logout')}}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>      
              </ul>
           </div>
           </li>
      @endguest                                 
                </ul>
            </div>
        </div>
    </nav>

@else

</top-nav>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('page') }}">{{trans('main.main_mydoctor')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>{{trans('main.menu')}}
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('page') }}" class="nav-link">{{trans('main.main_home')}}</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#department" class="nav-link">{{trans('main.main_department')}}</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#Quotes" class="nav-link">{{trans('main.main_q')}}</a></li>
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" target="_blank" class="nav-link">{{trans('main.main_about')}}</a></li>
                    <li class="nav-item"><a href="{{ route('contactus') }}" class="nav-link">{{trans('main.main_contact')}}</a></li>
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{trans('main.main_login')}}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{trans('main.main_reg')}}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right"style="background: linear-gradient(#6caae9, transparent);">
              <ul style="margin-left: -40px;">
                 <li class="dropdown-item"><a href="{{ route('create-doctor') }}" style="color: black;">{{trans('main.main_add-doc')}}</a></li>
                <li class="dropdown-item"><a href="{{ route('create-section') }}" style="color: black;">{{trans('main.main_add-dep')}}</a></li>
                <li class="dropdown-item"><a href="{{ route('create-city') }}" style="color: black;">{{trans('main.main_add-cit')}}</a></li>

                  <a class="dropdown-item" style="color: black;" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{trans('main.main_logout')}}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>      
              </ul>
           </div>
           </li>
      @endguest                                 
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    @endif

    @yield('content')

    
    <!-- footer -->
    <footer id="footer" style="background: linear-gradient(#2f7cc9, transparent);">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                @if( app()->getlocale() == 'ar')

                    <div class="col-md-4 col-sm-12 marb20 text-right">
                        <div class="ftr-tle">
                            <h3 class="white pr-4"><b style="font-size: 35px;">{{trans('main.main_contactus')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li style="margin-left: 75px; margin-bottom: -10px; color: white;"><p>Libya, Tripoli, Tec Camp</p></li>
                                <li style="margin-left: 75px; margin-bottom: -10px; color: white;"><p>+218912345678</p></li>
                                <li style="margin-left: 75px; margin-bottom: -10px; color: white;"><p>Hyper-Team@gmail.com</p></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 marb20 text-right">
                        <div class="ftr-tle">
                            <h3 class="white pr-4" ><b style="font-size: 35px;">{{trans('main.main_my')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li class="li" style="margin-left: 95px; color: white; margin-top: -5px;"><a style="font-size: 17px;" href="{{ route('page') }}"><i></i>{{trans('main.main_home')}}</a></li>
                                <li class="li" style="margin-left: 95px; color: white; margin-top: -5px;"><a style="font-size: 17px;" href="{{ route('page') }}#department"><i></i>{{trans('main.main_department')}}</a></li>
                                <li class="li" style="margin-left: 95px; color: white; margin-top: -5px;"><a style="font-size: 17px;" href="http://localhost/hyper_team/public/hyperteam"><i></i>{{trans('main.main_about')}}</a></li>
                                <li class="li" style="margin-left: 95px; color: white; margin-top: -5px;"><a style="font-size: 17px;" href="{{ route('contactus') }}"><i></i>{{trans('main.main_contact')}}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 marb20 text-right">
                        <div class="ftr-tle">
                            <h3 class="white pr-4"><b style="font-size: 35px;">{{trans('main.main_aboutus')}}</b></h3>
                        </div>
                        <div class="info-sec" style="color: white;">
                            <p>MY DOCTOR website has created & designed by "Hyper Team" web developers to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
                        </div>
                    </div>

                @else
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="margin-left: 120px;"><b>{{trans('main.main_aboutus')}}</b></h3>
                        </div>
                        <div class="info-sec" style="color: white;">
                            <p>MY DOCTOR website has created & designed by "Hyper Team" web developers to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="margin-left: 120px;"><b>{{trans('main.main_my')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li class="li" style="margin-left: 95px; color: white;"><a href="{{ route('page') }}"><i></i>{{trans('main.main_home')}}</a></li>
                                <li class="li" style="margin-left: 95px; color: white;"><a href="{{ route('page') }}#department"><i></i>{{trans('main.main_department')}}</a></li>
                                <li class="li" style="margin-left: 95px; color: white;"><a href="http://localhost/hyper_team/public/hyperteam"><i></i>{{trans('main.main_about')}}</a></li>
                                <li class="li" style="margin-left: 95px; color: white;"><a href="{{ route('contactus') }}"><i></i>{{trans('main.main_contact')}}</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white"style="margin-left: 100px;"><b>{{trans('main.main_contactus')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li style="margin-left: 75px; margin-bottom: -10px; color: white;"><p>Libya, Tripoli, Tec Camp</p></li>
                                <li style="margin-left: 75px; margin-bottom: -10px; color: white;"><p>+218912345678</p></li>
                                <li style="margin-left: 75px; margin-bottom: -10px; color: white;"><p>Hyper-Team@gmail.com</p></li>
                            </ul>
                        </div>
                    </div>
                    @endif


                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" style="color: black;">
                        © Copyright Hyper Team. All Rights Reserved
                        <div class="credits">
                            Designed by::<a href="http://localhost/hyper_team/public/hyperteam"target="_blank">Hyper Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <script src="{{ asset('js/js/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ asset('js/js/owl.carousel.min.js') }}"></script>
   
    <script src="{{ asset('js/js/main.js') }}"></script>


    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--سهم الي ينزل -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!--search-->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <!--footer-->
    <script src="{{ asset('js/main.js') }}"></script>



</body>

</html>