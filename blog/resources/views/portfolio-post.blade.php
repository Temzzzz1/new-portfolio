@extends('layouts.app')




@section('title-block')

    Rusanov | {{ $post['title'] }}

@endsection

@section('content')



    <div id="fh5co-main">
        <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">

            <h2 class="fh5co-heading  post-title" >{{ $post['title']}}</h2>

            <div class="row">

                <div class="col-md-8">
                    <p class="post-under-title">
                        Here you can find activities to practise your reading skills. Reading will help you to improve your understanding of the language and build your vocabulary.
                    </p>
                    <form action="{{ route('back-portfolio') }}" class="" method="post">
                        @csrf
                        <input type="submit"  class="btn btn-outline-light lead animate-box" data-animate-effect="fadeInLeft" value="Back">
                    </form>
                </div>

                <div class="col-md-4 d-flex flex-container">
                    <img class=" img-responsive" src="{{ $post['url'] }}">
                    <br>
                    <div class="d-flex text-center">
                        <a class="btn btn-primary btn-demo popup-vimeo" href="https://github.com/Temzzzz1"> <i class="icon-github"></i> Visit Github</a>
                    </div>
                </div>
            </div>







        </div>
    </div>

@endsection
