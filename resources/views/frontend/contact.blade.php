@extends('layouts.app')
@section('main')
    <div id="dsn-scrollbar">
        <header>
            <div class="container header-hero">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contenet-hero">
                            <h5>Lat's Tock</h5>
                            <h1>Contact</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-contact">
                <div class="container-fluid">
                    <div class="map-custom" id="map" data-dsn-lat="30.0489206" data-dsn-len="31.258553" data-dsn-zoom="14">
                    </div>
                </div>

                <div class="container section-margin">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-info-contact">
                                <h3>Start a new project?</h3>
                                <h5>Visit our studio at</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit vo
                                    luptatem accusantium natus error sit omnis iste natus</p>

                                <ul>
                                    <li>
                                        <span>Phone</span>
                                        <a href="tel:+37493852929">+(374)93 85-29-29</a>
                                        <a href="tel:+37491852925">+(374)91 85-29-25</a>
                                    </li>
                                    <li>
                                        <span>Email</span>
                                        <a href="mailto:info@nessa.am">info@nessa.am</a>
                                    </li>
                                    <li>
                                        <span>Address</span>
                                        <a href="#">Armenia, Yerevan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-box">
                                <h3>Write A Comment</h3>
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <form id="contact-form" class="form" method="post" action="{{route('contact-us')}}" data-toggle="validator">
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">
                                        <div class="form-group">

                                            <div class="entry">
                                                <label>What's your name?</label>
                                                <input id="name" type="text" name="name" placeholder="Type your name" required="required"
                                                       data-error="name is required.">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="entry">
                                                <label>What's your email address?</label>
                                                <input id="email" type="email" name="email" placeholder="Type your Email Address"
                                                       required="required" data-error="Valid email is required.">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="entry">
                                                <label>What's up?</label>
                                                <textarea id="form_message" class="form-control" name="subject"
                                                          placeholder="Tell us about you and the world" required="required"
                                                          data-error="Please,leave us a message."></textarea>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="image-zoom" data-dsn="parallax">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            <section class="contact-up section-margin section-padding">--}}
{{--                <div class="container">--}}
{{--                    <div class="c-wapp">--}}
{{--                        <a href="work.html" class="effect-ajax">--}}
{{--                <span class="hiring">--}}
{{--                  portfolio--}}
{{--                </span>--}}
{{--                            <span class="career">--}}
{{--                  See More Works--}}
{{--                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

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
