@extends('layouts.app')




@section('title-block')

    Rusanov | Contact

@endsection

@section('content')

    <div id="fh5co-main">
        <div class="fh5co-more-contact">
            <div class="fh5co-narrow-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-globe"></i>
                            </div>
                            <div class="fh5co-text">
                                <p><a><h4>artem.rusanov.02@gmail.com</h4></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-map"></i>
                            </div>
                            <div class="fh5co-text">
                                <p><a href="https://www.google.com/maps/d/embed?mid=1NQIWNBWpJP8tl4fQqhzgSMv41Wo&msa=0&ie=UTF8&t=m&ll=56.490173999999996%2C84.97306799999998&spn=0.170588%2C0.385208&z=11&output=embed"><h4>Tomsk, Russia</h4></a></p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="fh5co-text">
                                <p><a href="tel://"><h4>+79969388131</h4></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">

            <div class="row">
                <div class="col-md-4">
                    <h2>Contact me</h2>
                </div>
            </div>
            <form action="{{ route('contact-form') }}" method="post">

                @include('inc.messages')

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Name*" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Email*" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea id="message" cols="30" rows="7" class="form-control" placeholder="Message*" name="message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-md" value="Send Message">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
