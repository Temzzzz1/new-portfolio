@extends('layouts.app')




@section('title-block')

    Rusanov | Blog

@endsection

@section('content')

    <div id="fh5co-main">
        <div class="fh5co-narrow-content">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Read My Blog</h2>
            <div class="row row-bottom-padded-md">

                @foreach($data as $el)

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
