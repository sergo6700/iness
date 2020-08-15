<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword"
          content="agency, business, corporate, creative, freelancer, interior, joomla template, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple" />

    <!--  Title -->
    <title>Droow - Creative Showcase Portfolio Template</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="icon" href="{{asset('/img/favicon.ico')}}" type="image/x-icon" />

    <!-- custom styles (optional) -->
    <link href="{{asset('/css/plugins.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" />

</head>

<body class="hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">

<div class="preloader">
    <div class="preloader-after"></div>
    <div class="preloader-before"></div>
    <div class="preloader-block">
        <div class="title">Nessa</div>
        <div class="percent">0</div>
        <div class="loading">loading...</div>
    </div>
    <div class="preloader-bar">
        <div class="preloader-progress"></div>
    </div>
</div>

<!-- Nav Bar -->
<div class="dsn-nav-bar">
    <div class="site-header">
        <div class="extend-container">
            <div class="inner-header">
                <div class="main-logo">
                    <a href="{{route('home')}}">
                        <img class="dark-logo" src="{{asset('/img/logo-dark.png')}}" alt="" />
                        <img class="light-logo" src="{{asset('/img/logo.png')}}" alt="" />
                    </a>
                </div>
            </div>
            <nav class=" accent-menu main-navigation">
                <ul class="extend-container">
                    <li class="custom-drop">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li class="custom-drop">
                        <a href="{{route('work')}}">Work</a>
                    </li>
{{--                    <li class="custom-drop">--}}
{{--                        <a href="#">Blog</a>--}}
{{--                    </li>--}}
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header-top header-top-hamburger">
        <div class="header-container">
            <div class="logo main-logo">
                <a href="{{route('home')}}">
                    <img class="dark-logo" src="{{asset('/img/logo-dark.png')}}" alt="" />
                    <img class="light-logo" src="{{asset('/img/logo.png')}}" alt="" />
                </a>
            </div>

            <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                <div class="icon-m">
                    <i class="menu-icon-close fas fa-times"></i>
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>

                <div class="text-menu">
                    <div class="text-button">Menu</div>
                    <div class="text-open">Opefn</div>
                    <div class="text-close">Close</div>
                </div>
            </div>

            <div class="nav">
                <div class="inner">
                    <div class="nav__content">

                    </div>
                </div>
            </div>
            <div class="nav-content">
                <div class="inner-content">
                    <address class="v-middle">
                        <span>Egypt</span>
                        <span>Damietta,El-Mahalla El-Kubra,</span>
                        <span>01024552406 , 01004392260</span>
                    </address>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Nav Bar -->

<main class="main-root">
    @yield('main')
</main>

<!-- Wait Loader -->
<div class="wait-loader">
    <div class="loader-inner">
        <div class="loader-circle">
            <div class="loader-layer"></div>
        </div>
    </div>
</div>
<!-- // Wait Loader -->


<!-- cursor -->
<div class="cursor">

    <div class="cursor-helper cursor-view">
        <span>VIEW</span>
    </div>

    <div class="cursor-helper cursor-close">
        <span>Close</span>
    </div>

    <div class="cursor-helper cursor-link"></div>
</div>
<!-- End cursor -->

<!-- Optional JavaScript -->
<script src="{{asset('/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('/js/plugins.js')}}"></script>
<script src="{{asset('/js/dsn-grid.js')}}"></script>
<script src="{{asset('/js/custom.js')}}"></script>
</body>

</html>
