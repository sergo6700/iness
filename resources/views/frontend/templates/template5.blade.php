@extends('layouts.app')
@section('main')
    <div id="dsn-scrollbar">
        <header>
            <div class="headefr-fexid" data-dsn-header="project">
                <div class="bg w-100" id="dsn-hero-parallax-img" data-dsn-ajax="img">
                    <div class="bg-image  cover-bg" data-overlay="4"
                         data-image-src="{{asset($project->project_image)}}"></div>
                </div>

                <div class="scroll" data-dsn-animate="ajax">
                    <span class="background"></span>
                    <span class="triangle"></span>
                </div>
                <div class="project-title" id="dsn-hero-parallax-title">

                    <div class="title-text-header">
                        <div class="cat">
                            <span>{{$project->category->name}}</span>
                        </div>
                        <span class="title-text-header-inner">
                                <span data-dsn-animate="ajax">{{$project->project_title}}</span>
                            </span>
                    </div>

                    <div class="sub-text-header" data-dsn-animate="ajax">
                        <h5>Published</h5>
                        <span>- {{$project->created_at->format('Y-m-d')}}</span>
                    </div>
                </div>

                <div class="project-page__inner">
                    <div class="h-100">
                        <div class="row justify-content-center align-items-end h-100">
                            <div id="descover-holder" class="col-lg-12 project-meta__content">
                                <div class="link">
                                    <a target="_blank"
                                       href="{{json_decode($project->data)->link}}">View
                                        Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-project">
                <div class="container intro-project section-margin" data-dsn="color">
                    <div class="intro-text">
                        <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                             data-dsn-duration="170%" data-dsn-move="0%">
                            {{$project->project_title}}
                        </div>
                        <div class="inner">
                            <h2 data-dsn-animate="text">A whole new brand</h2>
                            <p data-dsn-animate="up">
                                {!! json_decode($project->data)->section_1_description !!}
                            </p>
                            <a class="bottom-link" data-dsn-animate="up"
                               href="{{json_decode($project->data)->link}}" target="_blank">
                                <span></span>
                                <span></span>
                                <div class="content">
                                    <div class="inner">
                                        <p>VISIT SITE</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container project-image-collage section-margin">
                    @foreach(json_decode($project->data)->section_1_images as $image)
                        <img src="{{asset($image)}}" alt="">
                    @endforeach
                </div>

                <div class=" box-gallery-vertical section-margin section-padding" data-dsn="color">
                    <div class="mask-bg"></div>
                    <div class="container">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-6 ">
                                <div class="box-im" data-dsn-grid="move-up">
                                    <img class="has-top-bottom" src="{{asset(json_decode($project->data)->section_2_image[0])}}" alt=""
                                         data-dsn-move="20%">
                                </div>
                            </div>

                            <div class="col-lg-6">


                                <div class="box-info">

                                    <div class="vertical-title">
                                        <h2 data-dsn-animate="up">IT STARTS WITH US.</h2>
                                    </div>
                                    <p data-dsn-animate="up">{!! json_decode($project->data)->section_2_description !!}</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container-fluid section-margin">
                    <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up">
                        <img src="{{asset(json_decode($project->data)->section_2_image[1])}}" alt="" data-dsn-y="30%" data-dsn-scale="1">
                        <div class="cap">
                            <span>{{$project->category->name}}</span>
                        </div>
                    </div>
                </div>

            </div>

            <footer>
                <div class="info">
                    <div class="contact-footer">
                        <a href="tel:+37493852929" class="phone image-zoom" data-dsn="parallax">+(374)93 85-29-29</a>
                        <a href="tel:+37491852925" class="phone image-zoom" data-dsn="parallax">+(374)91 85-29-25</a>
                        <a href="mailto:info@nessa.am" class="email image-zoom" data-dsn="parallax">info@nessa.am</a>
                    </div>
                    <div class="copyright-social">
                        <p>© 2020 NESSA Design Studio</p>
                        <ul>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.instagram.com/nessadesignstudio/" target="_blank">Instagram</a></li>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.instagram.com/nessa_art_/" target="_blank">Instagram</a></li>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.facebook.com/profile.php?id=100010628236933" target="_blank">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
