<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="76x76" href="{{('admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{('admin/assets/img/favicon.png')}}">
    <title>
        Black Dashboard by Creative Tim
    </title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/black-dashboard"/>
    <!--  Social tags      -->
    <meta name="keywords"
          content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, Black dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, free dashboard, free admin dashboard, free bootstrap 4 admin dashboard">
    <meta name="description"
          content="Black Dashboard is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Black Dashboard by Creative Tim">
    <meta itemprop="description"
          content="Black Dashboard is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta itemprop="image"
          content="https://s3.amazonaws.com/creativetim_bucket/products/93/original/opt_bd_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Black Dashboard by Creative Tim">
    <meta name="twitter:description"
          content="Black Dashboard is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
          content="https://s3.amazonaws.com/creativetim_bucket/products/93/original/opt_bd_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Black Dashboard by Creative Tim"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="http://demos.creative-tim.com/black-dashboard/examples/dashboard.html"/>
    <meta property="og:image"
          content="https://s3.amazonaws.com/creativetim_bucket/products/93/original/opt_bd_thumbnail.jpg"/>
    <meta property="og:description"
          content="Black Dashboard is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you."/>
    <meta property="og:site_name" content="Creative Tim"/>
    <!--  -->
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Nucleo Icons -->
    <link href="{{asset("admin/assets/css/nucleo-icons.css")}}" rel="stylesheet"/>
    <!-- CSS Files -->
    <link href="{{asset("admin/assets/css/black-dashboard.min.css?v=1.0.0")}}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset("admin/assets/demo/demo.css")}}" rel="stylesheet"/>
{{--    datatable css--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <script src="https://cdn.tiny.cloud/1/958er1fsibancdqa1pluqb16705ubn068bjgtke20n0o3hjs/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body class="">
<!-- Extra details for Live View on GitHub Pages -->
<div class="wrapper">
    <div class="sidebar">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
      -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">
                    N
                </a>
                <a href="{{route('index')}}" class="simple-text logo-normal">
                    NESSA
                </a>
            </div>
            <ul class="nav">
                <li class="active ">
                    <a href="{{route('index')}}">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('category.index')}}">
                        <i class="tim-icons icon-atom"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('post.index')}}">
                        <i class="tim-icons icon-atom"></i>
                        <p>Post</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle d-inline">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="search-bar input-group">
                            <button class="btn btn-link" id="search-button" data-toggle="modal"
                                    data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                                <span class="d-lg-none d-md-block">Search</span>
                            </button>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <div class="notification d-none d-lg-block d-xl-block"></div>
                                <i class="tim-icons icon-sound-wave"></i>
                                <p class="d-lg-none">
                                    Notifications
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                                <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to
                                        your email</a></li>
                                <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You
                                        have 5 more tasks</a></li>
                                <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your
                                        friend Michael is in town</a></li>
                                <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another
                                        notification</a></li>
                                <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another
                                        one</a></li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <div class="photo">
                                    <img src="{{asset('admin/assets/img/anime3.png')}}" alt="Profile Photo">
                                </div>
                                <b class="caret d-none d-lg-block d-xl-block"></b>
                                <p class="d-lg-none">
                                    Log out
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-navbar">
                                <li class="nav-link"><a href="javascript:void(0)"
                                                        class="nav-item dropdown-item">Profile</a></li>
                                <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log
                                        out</a></li>
                            </ul>
                        </li>
                        <li class="separator d-lg-none"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->
        <div class="content">
            @include('sweetalert::alert')
            @yield('main')
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            Creative Tim
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            Blog
                        </a>
                    </li>
                </ul>
                <div class="copyright">
                    ©
                    2020 made with <i class="tim-icons icon-heart-2"></i> by
                    <a href="javascript:void(0)" target="_blank">Sergey Grigoryan</a>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('admin/assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!-- Chart JS -->
<script src="{{asset('admin/assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('admin/assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('admin/assets/js/black-dashboard.min.js?v=1.0.0')}}"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('admin/assets/demo/demo.js')}}"></script>
<!-- Sharrre libray -->
<script src="{{asset('admin/assets/demo/jquery.sharrre.js')}}"></script>
{{--<script>--}}
{{--    $(document).ready(function () {--}}

{{--        $('#facebook').sharrre({--}}
{{--            share: {--}}
{{--                facebook: true--}}
{{--            },--}}
{{--            enableHover: false,--}}
{{--            enableTracking: false,--}}
{{--            enableCounter: false,--}}
{{--            click: function (api, options) {--}}
{{--                api.simulateClick();--}}
{{--                api.openPopup('facebook');--}}
{{--            },--}}
{{--            template: '<i class="fab fa-facebook-f"></i> Facebook',--}}
{{--            url: 'https://demos.creative-tim.com/black-dashboard/examples/dashboard.html'--}}
{{--        });--}}

{{--        $('#google').sharrre({--}}
{{--            share: {--}}
{{--                googlePlus: true--}}
{{--            },--}}
{{--            enableCounter: false,--}}
{{--            enableHover: false,--}}
{{--            enableTracking: true,--}}
{{--            click: function (api, options) {--}}
{{--                api.simulateClick();--}}
{{--                api.openPopup('googlePlus');--}}
{{--            },--}}
{{--            template: '<i class="fab fa-google-plus"></i> Google',--}}
{{--            url: 'https://demos.creative-tim.com/black-dashboard/examples/dashboard.html'--}}
{{--        });--}}

{{--        $('#twitter').sharrre({--}}
{{--            share: {--}}
{{--                twitter: true--}}
{{--            },--}}
{{--            enableHover: false,--}}
{{--            enableTracking: false,--}}
{{--            enableCounter: false,--}}
{{--            buttons: {--}}
{{--                twitter: {--}}
{{--                    via: 'CreativeTim'--}}
{{--fixed-plugin--}}
{{--            },--}}
{{--            click: function (api, options) {--}}
{{--                api.simulateClick();--}}
{{--                api.openPopup('twitter');--}}
{{--            },--}}
{{--            template: '<i class="fab fa-twitter"></i> Twitter',--}}
{{--            url: 'https://demos.creative-tim.com/black-dashboard/examples/dashboard.html'--}}
{{--        });--}}


{{--        // Facebook Pixel Code Don't Delete--}}
{{--        !function (f, b, e, v, n, t, s) {--}}
{{--            if (f.fbq) return;--}}
{{--            n = f.fbq = function () {--}}
{{--                n.callMethod ?--}}
{{--                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)--}}
{{--            };--}}
{{--            if (!f._fbq) f._fbq = n;--}}
{{--            n.push = n;--}}
{{--            n.loaded = !0;--}}
{{--            n.version = '2.0';--}}
{{--            n.queue = [];--}}
{{--            t = b.createElement(e);--}}
{{--            t.async = !0;--}}
{{--            t.src = v;--}}
{{--            s = b.getElementsByTagName(e)[0];--}}
{{--            s.parentNode.insertBefore(t, s)--}}
{{--        }(window,--}}
{{--            document, 'script', '//connect.facebook.net/en_US/fbevents.js');--}}

{{--        try {--}}
{{--            fbq('init', '111649226022273');--}}
{{--            fbq('track', "PageView");--}}

{{--        } catch (err) {--}}
{{--            console.log('Facebook Track Error:', err);--}}
{{--        }--}}


{{--        //--}}
{{--        //--}}

{{--    });--}}
{{--</script>--}}
{{--<noscript>--}}
{{--    <img height="1" width="1" style="display:none"--}}
{{--         src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"/>--}}
{{--</noscript>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $().ready(function () {--}}
{{--            $sidebar = $('.sidebar');--}}
{{--            $navbar = $('.navbar');--}}
{{--            $main_panel = $('.main-panel');--}}

{{--            $full_page = $('.full-page');--}}

{{--            $sidebar_responsive = $('body > .navbar-collapse');--}}
{{--            sidebar_mini_active = true;--}}
{{--            white_color = false;--}}

{{--            window_width = $(window).width();--}}

{{--            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();--}}


{{--            $('.fixed-plugin a').click(function (event) {--}}
{{--                if ($(this).hasClass('switch-trigger')) {--}}
{{--                    if (event.stopPropagation) {--}}
{{--                        event.stopPropagation();--}}
{{--                    } else if (window.event) {--}}
{{--                        window.event.cancelBubble = true;--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}

{{--            $('.fixed-plugin .background-color span').click(function () {--}}
{{--                $(this).siblings().removeClass('active');--}}
{{--                $(this).addClass('active');--}}

{{--                var new_color = $(this).data('color');--}}

{{--                if ($sidebar.length != 0) {--}}
{{--                    $sidebar.attr('data', new_color);--}}
{{--                }--}}

{{--                if ($main_panel.length != 0) {--}}
{{--                    $main_panel.attr('data', new_color);--}}
{{--                }--}}

{{--                if ($full_page.length != 0) {--}}
{{--                    $full_page.attr('filter-color', new_color);--}}
{{--                }--}}

{{--                if ($sidebar_responsive.length != 0) {--}}
{{--                    $sidebar_responsive.attr('data', new_color);--}}
{{--                }--}}
{{--            });--}}

{{--            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function () {--}}
{{--                var $btn = $(this);--}}

{{--                if (sidebar_mini_active == true) {--}}
{{--                    $('body').removeClass('sidebar-mini');--}}
{{--                    sidebar_mini_active = false;--}}
{{--                    blackDashboard.showSidebarMessage('Sidebar mini deactivated...');--}}
{{--                } else {--}}
{{--                    $('body').addClass('sidebar-mini');--}}
{{--                    sidebar_mini_active = true;--}}
{{--                    blackDashboard.showSidebarMessage('Sidebar mini activated...');--}}
{{--                }--}}

{{--                // we simulate the window Resize so the charts will get updated in realtime.--}}
{{--                var simulateWindowResize = setInterval(function () {--}}
{{--                    window.dispatchEvent(new Event('resize'));--}}
{{--                }, 180);--}}

{{--                // we stop the simulation of Window Resize after the animations are completed--}}
{{--                setTimeout(function () {--}}
{{--                    clearInterval(simulateWindowResize);--}}
{{--                }, 1000);--}}
{{--            });--}}

{{--            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function () {--}}
{{--                var $btn = $(this);--}}

{{--                if (white_color == true) {--}}

{{--                    $('body').addClass('change-background');--}}
{{--                    setTimeout(function () {--}}
{{--                        $('body').removeClass('change-background');--}}
{{--                        $('body').removeClass('white-content');--}}
{{--                    }, 900);--}}
{{--                    white_color = false;--}}
{{--                } else {--}}

{{--                    $('body').addClass('change-background');--}}
{{--                    setTimeout(function () {--}}
{{--                        $('body').removeClass('change-background');--}}
{{--                        $('body').addClass('white-content');--}}
{{--                    }, 900);--}}

{{--                    white_color = true;--}}
{{--                }--}}


{{--            });--}}

{{--            $('.light-badge').click(function () {--}}
{{--                $('body').addClass('white-content');--}}
{{--            });--}}

{{--            $('.dark-badge').click(function () {--}}
{{--                $('body').removeClass('white-content');--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();


    });
</script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        branding: false,
        height: 500,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
        },
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ],
        image_title: true,
        automatic_uploads: false,
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        }
    });
</script>
@stack('scripts')
</body>

</html>
