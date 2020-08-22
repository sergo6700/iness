@extends('layouts.app')
@section('main')
    <div id="dsn-scrollbar">
        <header>
            <div class="headefr-fexid" data-dsn-header="project">
                <div class="bg" id="dsn-hero-parallax-img" data-dsn-ajax="img">
                    <div class="bg-image cover-bg" data-overlay="0"
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
                        <span>{{$project->created_at->format('Y-m-d')}}</span>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-project">
                <div class="container intro-project section-margin">
                    <div class="intro-text">
                        <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                             data-dsn-duration="170%" data-dsn-move="0%">
                            {{$project->project_title}}
                        </div>
                        <div class="inner">
                            {!!$project->project_description!!}
                        </div>
                    </div>
                    <a class="bottom-link" data-dsn-animate="up"
                       href="{{json_decode($project->data)->link}}"
                       target="_blank">
                        <span></span>
                        <span></span>
                        <div class="content">
                            <div class="inner">
                                <p>VISIT SITE</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="container section-margin">
                    <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src="{{asset(json_decode($project->data)->section_1_image[0])}}" alt="">
                    </div>
                </div>


                <div class="box-seat box-seat-full section-margin">
                    <div class="container-fluid">
                        <div class="inner-img" data-dsn-grid="move-up">
                            <img src="{{asset(json_decode($project->data)->section_2_image[0])}}" alt="" style="transform: scale(1.3)"
                                 data-dsn-scale="1" data-dsn-y="30%">
                        </div>
                        <div class="pro-text" data-dsn-animate="up">
                            {!! json_decode($project->data)->section_2_description !!}
                        </div>
                    </div>
                </div>

                <section class="client-see section-margin" data-dsn-animate="up">
                    <div class="container">
                        <div class="inner">
                            <div class="left">
                                <h2 class="title" data-dsn-grid="move-section" data-dsn-move="-60"
                                    data-dsn-duration="100%" data-dsn-opacity="1">
                                    <span class="text">What they said about us</span>
                                </h2>
                            </div>

                            <div class="items">
                                <div class="bg"></div>
                                <div class="item">
                                    <div class="quote">
                                        {!! json_decode($project->data)->report_text !!}
                                    </div>
                                    <div class="bottom">
                                        <div class="avatar">
                                            <img src="{{asset(json_decode($project->data)->report_owner_image[0])}}" alt="">
                                        </div>
                                        <div class="label">
                                            <div class="cell">- {{json_decode($project->data)->report_owner}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container-fluid section-margin ">
                    <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                        <img class="has-top-bottom" src="{{asset(json_decode($project->data)->gif[0])}}" alt="" data-dsn-y="30%"
                             data-dsn-scale="1.08">
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
