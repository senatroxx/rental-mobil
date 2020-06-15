<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Rental Mobil</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="{{ asset('css/plugins/vegas.min.css') }}" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{ asset('css/plugins/slicknav.min.css') }}" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{ asset('css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{ asset('css/plugins/owl.carousel.min.css') }}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{ asset('css/plugins/gijgo.css') }}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <!-- <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div> -->
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Bogor, Indonesia
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +62 813 8662 0000
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{asset('img/logo.png')}}" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                <li class="nav-item dropdown"><a href="{{ route('booking.create') }}">Sewa Mobil</a>
                                    <ul>
                                        <li><a href="{{ route('booking.index') }}" class="dropdown-item">List Booking</a></li>
                                        <li><a href="{{ route('booking.create') }}" class="dropdown-item">Buat Booking</a></li>
                                    </ul>
                                </li>
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul>
                                            @if(Auth::user()->is_admin == 1)
                                            <li><a class="dropdown-item" href="{{ route('admin.home') }}">Admin Dashboard</a></li>
                                            @endif
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a></li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    @yield('content')
    <!--== Articles Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="{{ asset('img/scroll-top.png') }}" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('js/app.js') }}"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{ asset('js/plugins/gijgo.js') }}"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{ asset('js/plugins/vegas.min.js') }}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('js/plugins/isotope.min.js') }}"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{ asset('js/plugins/owl.carousel.min.js') }}"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{ asset('js/plugins/waypoints.min.js') }}"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{ asset('js/plugins/counterup.min.js') }}"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{ asset('js/plugins/mb.YTPlayer.js') }}"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{ asset('js/plugins/magnific-popup.min.js') }}"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{ asset('js/plugins/slicknav.min.js') }}"></script>

    <!--=== Mian Js ===-->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
    function getDiff() { 
      let polos1 = document.getElementById("tgl_sewa").value.replace(/-/g,'/');
      let polos2 = document.getElementById("tgl_selesai").value.replace(/-/g,'/');
      let date1 = new Date(polos1);
      let date2 = new Date(polos2);
      let diff = Math.abs(date2.getTime() - date1.getTime());
      let diff2 = diff / (1000 * 3600 * 24);
      if (isNaN(diff2)) {
        diff2 = '0';
      }
      $('#jml_sewa').val(diff2+' Hari');
      $('#jml_sewaHidden').val(diff2);
      var envelope = {};
      envelope.id= $('#mobil_id').val();
      $.ajax({
          type:'GET',
          url:'{{url("getHarga")}}',
          data: envelope,
          success:function(data) {
            $("#total").val(parseInt(diff2) * data.harga);
            $("#totalHidden").val(parseInt(diff2) * data.harga);
          }
      });
    }
    </script>
</body>
