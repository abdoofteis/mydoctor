<!DOCTYPE html>
<html lang="{{   app()->getLocale() }}">

<head>
    <title>{{trans('main.main_contact')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    @if ( app()->getLocale() == 'ar')
         <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactus-css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/contactus-css/contact-us.css') }}">
</head>

<body>
@if ( app()->getLocale() == 'ar')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light text-right" style="margin-right: -50px; id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" style="font-size: 35px; margin: -7px 0px; margin-right: 50px" href="{{ route('page') }}">{{trans('main.main_mydoctor')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"  style="font-size: 23px; padding-top: 15px;"></span>{{trans('main.menu')}}
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a  style="font-size: 25px;" href="{{ route('page') }}" class="nav-link">{{trans('main.main_home')}}</a></li>
                    <li class="nav-item"><a  style="font-size: 25px;" href="{{ route('page') }}#department" class="nav-link">{{trans('main.main_department')}}</a></li>
                    <li class="nav-item"><a  style="font-size: 25px;" href="{{ route('page') }}#Quotes" class="nav-link">{{trans('main.main_q')}}</a></li>
                    <li class="nav-item"><a style="font-size: 25px;"  href="http://localhost/hyper_team/public/hyperteam" class="nav-link">{{trans('main.main_about')}}</a></li>
                    <li class="nav-item active"><a style="font-size: 25px;" href="{{ route('contactus') }}" class="nav-link">{{trans('main.main_contact')}}</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
@else
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('page') }}">{{trans('main.main_mydoctor')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>{{trans('main.menu')}}
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('page') }}" class="nav-link">{{trans('main.main_home')}}</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#department" class="nav-link">{{trans('main.main_department')}}</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#Quotes" class="nav-link">{{trans('main.main_q')}}</a></li>
                    
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" class="nav-link">{{trans('main.main_about')}}</a></li>
                    <li class="nav-item active"><a href="{{ route('contactus') }}" class="nav-link">{{trans('main.main_contact')}}</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
@endif

       @yield('content')
       @yield('br')

@if ( app()->getLocale() == 'ar')
     <!-- footer -->
       <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-12 marb20 text-right">
                        <div class="ftr-tle">
                            <h3 class="white pr-4" style="font-size: 35px;"><b>{{trans('main.main_contactus')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li class="oo pt-2">Libya, Tripoli, Tec Camp</li>
                                <li class="oo pt-2">+218912345678</li>
                                <li class="oo pt-2">Hyper-Team@gmail.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 marb20 text-right">
                        <div class="ftr-tle">
                            <h3 class="white pr-4" style="font-size: 35px;"><b>{{trans('main.main_my')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li class="li"><a style="font-size: 17px;" href="{{ route('page') }}"><i></i>{{trans('main.main_home')}}</a></li>
                                <li class="li"><a style="font-size: 17px;" href="{{ route('page') }}#department"><i></i>{{trans('main.main_department')}}</a></li>
                                <li class="li"><a style="font-size: 17px;" href="http://localhost/hyper_team/public/hyperteam"><i></i>{{trans('main.main_about')}}</a></li>
                                <li class="li"><a style="font-size: 17px;" href="{{ route('contactus') }}"><i></i>{{trans('main.main_contact')}}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 marb20 text-right">
                        <div class="ftr-tle">
                            <h3 class="white pr-4" style="font-size: 35px;"><b>{{trans('main.main_aboutus')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <p>MY DOCTOR website has created & designed by "Hyper Team" web developers to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        © Copyright Hyper Team. All Rights Reserved
                        <div class="credits">
                            Designed by::<a href="http://localhost/hyper_team/public/hyperteam">Hyper Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@else
 <!-- footer -->
       <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="margin-left: 120px;"><b>{{trans('main.main_aboutus')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <p>MY DOCTOR website has created & designed by "Hyper Team" web developers to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="margin-left: 120px;"><b>{{trans('main.main_my')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li class="li"><a href="{{ route('page') }}"><i></i>{{trans('main.main_home')}}</a></li>
                                <li class="li"><a href="{{ route('page') }}#department"><i></i>{{trans('main.main_department')}}</a></li>
                                <li class="li"><a href="http://localhost/hyper_team/public/hyperteam"><i></i>{{trans('main.main_about')}}</a></li>
                                <li class="li"><a href="{{ route('contactus') }}"><i></i>{{trans('main.main_contact')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white"style="margin-left: 100px;"><b>{{trans('main.main_contactus')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li class="oo">Libya, Tripoli, Tec Camp</li>
                                <li class="oo">+218912345678</li>
                                <li class="oo">Hyper-Team@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        © Copyright Hyper Team. All Rights Reserved
                        <div class="credits">
                            Designed by::<a href="http://localhost/hyper_team/public/hyperteam">Hyper Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endif



        <!-- loader -->
    <script src="{{ asset('js/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>



</body>
</html>
