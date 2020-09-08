@extends('layouts.app')




@section('title-block')

    Rusanov | {{ $post['title'] }}

@endsection

@section('content')



    <div id="fh5co-main">
        <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">

            <h2 class="fh5co-heading  post-title" >{{ $post['title']}}</h2>
            <div class="post-under-title "  >
                <span>BY {{ $post['author'] }} / {{ $post['genre'] }}  /  <i class="icon-comment"></i> 14</span>
            </div>
            <br>
            <p class="post">
                Here you can find activities to practise your reading skills. Reading will help you to improve your understanding of the language and build your vocabulary.

                The self-study lessons in this section are written and organised according to the levels of the Common European Framework of Reference for languages (CEFR). There are different types of texts and interactive exercises that practise the reading skills you need to do well in your studies, to get ahead at work and to communicate in English in your free time.

                Take our free online English test to find out which level to choose. Select your level, from beginner (CEFR level A1) to advanced (CEFR level C1), and improve your reading skills at your own speed, whenever it's convenient for you.
            </p>
            <br>
            <div class="row ">
                <div class="col-md-9 vcenter">
                    <form action="{{ route('back-blog') }}" class="" method="post">
                        @csrf
                        <input type="submit"  class="btn btn-outline-light lead animate-box" data-animate-effect="fadeInLeft" value="Back">
                    </form>
                </div><!--
                -->{{--<div class="col-md-3 vcenter post-title">{{ $post['likes'] }} <i class="icon-heart-outline ">
                    </i>{{ $post['watched'] }} <i class="icon-eye post-title"></i></div>--}}
            </div>







        </div>
    </div>

@endsection
