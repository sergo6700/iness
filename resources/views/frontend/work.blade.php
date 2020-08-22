@extends('layouts.app')
@section('main')
    <div id="dsn-scrollbar">
        <header>
            <div class="container header-hero">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contenet-hero">
                            <h5>Our WOrk</h5>
                            <h1>portfolio</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-work">
                <div class="container ">
                    <div class="box-title" data-dsn-title="cover">
                        <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Projets</h2>
                    </div>

                    <div class="filterings">
                        <div class="filtering-wrap">
                            <div class="filtering">
                                <div class="selector"></div>
                                <button type="button"
                                        data-filter="*"
                                        class="active">
                                    All
                                </button>
                                @foreach($categories as $category)
                                    <button type="button"
                                            data-filter="{{'.'.str_replace('/','',$category->name)}}">
                                        {{$category->name}}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="projects-list gallery">
                        @foreach($works as $work)
                            <div class="item {{str_replace('/','',$work->category->name)}}">
                                <a href="{{route('template',$work->id)}}" class="effect-ajax" data-dsn-ajax="work"
                                   data-dsn-grid="move-up">
                                    <img class="has-top-bottom" src="{{asset($work->project_image)}}" alt=""/>
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <h5 class="cat">{{$work->category->name}}</h5>
                                        <h4>{{$work->project_title}}</h4>
                                        <span><span>Veiw Project</span></span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

{{--            <section class="contact-up section-margin section-padding">--}}
{{--                <div class="container">--}}
{{--                    <div class="c-wapp">--}}
{{--                        <a href="{{route('contact')}}" class="effect-ajax">--}}
{{--                                <span class="hiring">--}}
{{--                                    We are hiring--}}
{{--                                </span>--}}
{{--                            <span class="career">--}}
{{--                                    Dare and contact us immediately!--}}
{{--                                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

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

@endsection
