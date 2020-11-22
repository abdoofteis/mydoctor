<!DOCTYPE html>
<html lang="{{   app()->getLocale() }}">

<head>
    <title>{{trans('main.info')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if ( app()->getLocale() == 'ar')
         <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/section-css/slidecss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/section-css/bootstrap-4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/section-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/section-css/style.css') }}">
    @yield('style')
</head>

<body style="background-repeat: no-repeat !important;">
    @if ( app()->getLocale() == 'ar')

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light text-right" style="margin-right: -10px;" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" style="font-size: 35px; margin-right: 10px !important; margin: -7px 0px;" href="{{ route('page') }}">{{trans('main.main_mydoctor')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu" style="font-size: 23px; padding-top: 15px;"></span>{{trans('main.menu')}}
                  </button>


            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a style="font-size: 25px;" href="{{ route('page') }}" class="nav-link">{{trans('main.main_home')}}</a></li>
                    <li class="nav-item  active"><a style="font-size: 25px;" href="{{ route('page') }}#department" class="nav-link">{{trans('main.main_department')}}</a></li>
                    <li class="nav-item"><a style="font-size: 25px;" href="{{ route('page') }}#Quotes" class="nav-link">{{trans('main.main_q')}}</a></li>
                    <li class="nav-item"><a style="font-size: 25px;" href="http://localhost/hyper_team/public/hyperteam" class="nav-link">{{trans('main.main_about')}}</a></li>
                    <li class="nav-item"><a style="font-size: 25px;" href="{{ route('contactus') }}" class="nav-link">{{trans('main.main_contact')}}</a></li>
                     <li class="nav-item"><a style="font-size: 25px;" class="nav-link dropdown-toggle " href="" id="navbardrop" data-toggle="dropdown">
                            {{trans('main.city')}}
                          </a>
                    @yield('drop')

                    </li>
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
                    <span class="oi oi-menu"></span> Menu
                  </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('page') }}" class="nav-link">{{trans('main.main_home')}}</a></li>
                    <li class="nav-item  active"><a href="{{ route('page') }}#department" class="nav-link">{{trans('main.main_department')}}</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#Quotes" class="nav-link">{{trans('main.main_q')}}</a></li>
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" class="nav-link">{{trans('main.main_about')}}</a></li>
                    <li class="nav-item"><a href="{{ route('contactus') }}" class="nav-link">{{trans('main.main_contact')}}</a></li>
                     <li class="nav-item"><a class="nav-link dropdown-toggle " href="" id="navbardrop" data-toggle="dropdown">
                            {{trans('main.city')}}
                          </a>
                    @yield('drop')

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    @endif

 <!-- Specialist Area Starts -->

@yield('content')
    <!-- footer -->
    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
    @if ( app()->getLocale() == 'ar')

                    <div class="col-md-4 col-sm-12 marb20 text-right">
                        <div class="ftr-tle">
                            <h3 class="white"style="font-size: 35px !important; margin-left: 90px;"><b>{{trans('main.main_contactus')}}</b></h3>
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
                            <h3 class="white" style="font-size: 35px !important; margin-left: 120px;"><b>{{trans('main.main_my')}}</b></h3>
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
                            <h3 class="white" style="font-size: 35px !important; margin-left: 120px;"><b>{{trans('main.main_aboutus')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <p>MY DOCTOR website has created & designed by "Hyper Team" web developers to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
                        </div>
                    </div>

    @else
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="font-size: 25px !important; margin-left: 120px;"><b>{{trans('main.main_aboutus')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <p>MY DOCTOR website has created & designed by "Hyper Team" web developers to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="font-size: 25px !important; margin-left: 120px;"><b>{{trans('main.main_my')}}</b></h3>
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
                            <h3 class="white"style="font-size: 25px !important; margin-left: 90px;"><b>{{trans('main.main_contactus')}}</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li class="oo">Libya, Tripoli, Tec Camp</li>
                                <li class="oo">+218912345678</li>
                                <li class="oo">Hyper-Team@gmail.com</li>
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


    <!-- footer end -->
    <script src="{{ asset('js/section-js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/section-js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/section-js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/section-js/jquery.easing.1.3.js') }}"></script>
    <!--سهم الي ينزل -->
    <script src="{{ asset('js/section-js/jquery.waypoints.min.js') }}"></script>
    <!--search-->
    <script src="{{ asset('js/section-js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/section-js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/section-js/aos.js') }}"></script>
    <script src="{{ asset('js/section-js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/section-js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/section-js/main.js') }}"></script>



</body>

</html>