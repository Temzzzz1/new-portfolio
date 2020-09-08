@extends('layouts.app')




@section('title-block')

    Rusanov | Portfolio

@endsection

@section('content')

    <div id="fh5co-main">
        <div class="fh5co-narrow-content">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Portfolio</h2>
            <div class="row row-bottom-padded-md">

                @foreach($data as $el)

                    <div class="col-md-3 col-sm-6 col-padding text-center animate-box">

                        <a href="{{ route('portfolio-post', $el->id)}}" class="work image-popup" style="background-image: url({{ $el['url'] }});">
                            <div class="desc">
                                <h3>{{ $el['title'] }}</h3>
                                <span>{{ $el['description'] }}</span>
                            </div>
                        </a>
                    </div>

                @endforeach


            </div>
        </div>


    </div>

@endsection
