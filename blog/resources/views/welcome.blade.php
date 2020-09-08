@extends('layouts.app')




@section('title-block')

    Rusanov | Home

@endsection


@section('content')

    <div id="fh5co-main">
        <aside id="fh5co-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1>Back-end developer, <strong></strong> guitar player<br> and parrot lover</h1>
                                        <h2>My name is Artiom Rusanov and I am developer from Russia</h2>
                                        <p>
                                            <a class="btn btn-primary btn-demo popup-vimeo" href="https://github.com/Temzzzz1"> <i class="icon-github"></i> Github</a>
                                            <a class="btn btn-primary btn-learn" href="/contact">Contact me</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </aside>

        <div class="fh5co-narrow-content">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Services</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-settings"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Versatile</h3>
                            <p>-dawdawdawdaw</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-search4"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Exploping</h3>
                            <p>awdawdaw</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-paperplane"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Purposeful</h3>
                            <p> I set myself big goals, I started learning programming even before entering the university. I started with bots in discord, studying Javascript. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-params"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Versatile</h3>
                            <p>Coding for me is one of the most important parts in life. I am also interested in design, working in Figma.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fh5co-narrow-content">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Recent Blog</h2>
            <div class="row row-bottom-padded-md">

                @foreach($blog as $el)

                    <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="#" class="blog-img"><img src="{{ $el['url'] }}" class="img-responsive"></a>
                            <div class="desc">
                                <h3><a href="#">{{ $el['title'] }}</a></h3>
                                <span><small>by {{ $el['author'] }} </small> / <small> {{ $el['genre'] }} </small> / <small> <i class="icon-comment"></i> 14</small></span>
                                <p>{{ $el['description'] }}</p>

                                {{--<i class="icon-arrow-right3"></i>--}}
                                <a href="{{ route('post', $el->id)}}" class="lead">Read More <i class="icon-arrow-right3"></i></a>


                            </div>
                        </div>
                    </div>


                @endforeach

            </div>
        </div>


    </div>

@endsection
