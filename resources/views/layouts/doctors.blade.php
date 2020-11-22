<!DOCTYPE html>
<html lang="{{   app()->getLocale() }}">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if ( app()->getLocale() == 'ar')
         <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactus-css/contact-us.css') }}">
     <style>
          .input{
               margin-bottom: 10px;
          }
          .nav-link:hover{
               color: white !important;
          }
          .navbar-brand:hover{
              color: white !important;
          }
     </style>
    </head>

<body style="background: linear-gradient(#2f7cc9, transparent); background-repeat: no-repeat !important;">
@if ( app()->getLocale() == 'ar')

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light text-right" style="margin-right: -50px; id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" style="font-size: 35px; margin: -7px 0px; margin-right: 50px" href="{{ route('page') }}">{{trans('main.main_mydoctor')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu" style="font-size: 23px; padding-top: 15px;"></span> {{trans('main.menu')}}
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-5 mr-auto">
                    <li class="nav-item"><a style="font-size: 25px;" href="{{ route('page') }}" class="nav-link">{{trans('main.main_home')}}</a></li>
                    <li class="nav-item"><a style="font-size: 25px;" href="{{ route('page') }}#department" class="nav-link">{{trans('main.main_department')}}</a></li>
                    <li class="nav-item"><a style="font-size: 25px;" href="{{ route('page') }}#Quotes" class="nav-link">{{trans('main.main_q')}}</a></li>
                    <li class="nav-item"><a style="font-size: 25px;" href="http://localhost/hyper_team/public/hyperteam" class="nav-link">{{trans('main.main_about')}}</a></li>
                    <li class="nav-item"><a style="font-size: 25px;" href="{{ route('contactus') }}" class="nav-link">{{trans('main.main_contact')}}</a></li>
                    
                              @guest
          <li class="nav-item">
              <a class="nav-link" style="font-size: 25px;" href="{{ route('login') }}">{{trans('main.main_login')}}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" style="font-size: 25px;" href="{{ route('register') }}">{{trans('main.main_reg')}}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" style="font-size: 22px;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right text-right"style="background: linear-gradient(#2f7cc9, transparent); !important;">
              <ul style="margin-right: -40px;">
                 <li class="dropdown-item"><a href="{{ route('create-doctor') }}" style="color: black;">{{trans('main.main_add-doc')}}</a></li>
                <li class="dropdown-item"><a href="{{ route('create-section') }}" style="color: black;">{{trans('main.main_add-dep')}}</a></li>
                <li class="dropdown-item"><a href="{{ route('create-city') }}" style="color: black;">{{trans('main.main_add-cit')}}</a></li>

                  <a style="color: black;" class="dropdown-item" href="{{ route('logout') }}"
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
    @yield('cont')
    <!-- END nav -->

@else

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('page') }}">{{trans('main.main_mydoctor')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> {{trans('main.menu')}}
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="{{ route('page') }}" class="nav-link">{{trans('main.main_home')}}</a></li>
                    <li class="nav-item "><a href="{{ route('page') }}#department" class="nav-link">{{trans('main.main_department')}}</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#Quotes" class="nav-link">{{trans('main.main_q')}}</a></li>
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" class="nav-link">{{trans('main.main_about')}}</a></li>
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

              <div class="dropdown-menu dropdown-menu-right"style="background: linear-gradient(#2f7cc9, transparent); !important; margin-left: 300px;">
              <ul style="margin-left: -40px;">
                 <li class="dropdown-item"><a href="{{ route('create-doctor') }}" style="color: black;">{{trans('main.main_add-doc')}}</a></li>
                <li class="dropdown-item"><a href="{{ route('create-section') }}" style="color: black;">{{trans('main.main_add-dep')}}</a></li>
                <li class="dropdown-item"><a href="{{ route('create-city') }}" style="color: black;">{{trans('main.main_add-cit')}}</a></li>

                  <a class="dropdown-item" href="{{ route('logout') }}"
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
    @yield('cont')
    <!-- END nav -->

@endif

    <div style="margin-top:200px;"></div>

@yield('content')

        <!-- loader -->
    <script src="{{ asset('js/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>