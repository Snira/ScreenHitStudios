@extends('layouts.app')

@section('content')

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thank you for subscribing!</h4>
                </div>
                <div class="modal-body">
                    <p>You will now be frequently updated.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

<div class="intro contain-width">
    <div class="videopane">
        <video id="bg" autoplay="autoplay" loop="loop" muted="muted">
            <source src="{{asset('video/HoltBackground.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
        </video>
    </div>


    <div class="intro contain-width">
        <div class="videopane">
            <video id="bg" autoplay="autoplay" loop="loop" muted="muted">
                <source src="{{asset('video/Placeholder Video.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="intro-heading">
            <!-- <div class="row"> -->
        <!-- <h1 class="h1">{{trans('content.home.title')}}</h1> -->
            <h1>{{trans('content.home.title')}}</h1>
            <p>{{trans('content.home.description')}} </p>
            <!-- </div> -->
        </div>



        <div class="news-content">
            <h2>Latest Updates & News</h2>


            <div class="posts">
                @foreach($posts as $post)
                    <div class="col-md-2 postpreview">
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->body}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="the-game contain-width">
        <h3>{{trans('content.home.USP1.title')}}</h3>
        <p>
            {{trans('content.home.USP1.description')}}
        </p>
        <h3>{{trans('content.home.USP2.title')}}</h3>
        <p>
            {{trans('content.home.USP2.description')}}
        </p>
        <h3>{{trans('content.home.USP3.title')}}</h3>
        <p>
            {{trans('content.home.USP3.description')}}
        </p>
    </div>

    <div class="about-us contain-width">
        <h3>Meet the team</h3>
        <div class="people">
            @for($i = 0; $i < 15; $i++)
                <div class="person">
                    <img src="{{asset('img/Holt_v2.png')}}" alt="person">
                </div>
            @endfor
        </div>
    </div>

    <!--
    <div class="container-fluid">
        <div class="row intro">
            <div class="videopane">
                <video id="bg" autoplay="autoplay" loop="loop" muted="muted">
                    <source src="{{asset('video/Placeholder Video.mp4')}}" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="videopaneheading">
                <div class="row">
                    <h1 class="h1">{{trans('content.home.title')}}</h1>
                    <p class="h3">{{trans('content.home.description')}} </p>
                </div>
            </div>

            <div class="videopanecontent">
                <div class="row">
                    <h2>Latest Updates & News</h2>
                </div>

                <div class="row">
                    @foreach($posts as $post)
        <div class="col-md-2 postpreview">
            <h3>{{$post->title}}</h3>
                            <p>{{$post->body}}</p>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
    <div class="row">

        <div class="panel1content panel1bg col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2>{{trans('content.home.USP1.title')}}</h2>
                        <p>{{trans('content.home.USP1.description')}}</p>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="panel2">
                <div class="col-md-6 col-sm-12 square1 img-responsive">
                    <h2>{{trans('content.home.USP2.title')}}</h2>
                    <div class="col-md-4"><p>{{trans('content.home.USP2.description')}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 square2 img-responsive">
                    <h2>{{trans('content.home.USP3.title')}}</h2>
                    <p>{{trans('content.home.USP3.description')}}</p>
                </div>
            </div>
        </div>

    </div>

 -->
    <form method="post" enctype="multipart/form-data" action="{{ route('home.signup') }}">
        <label for="email"></label>
        <input type="email" id="email" name="email">
        <button>Schrijf mij in!</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    @if(session('status'))
        <button type="button" class=" hidden" data-toggle="modal" data-target="#myModal">Open Modal</button>
        <script>
            $( document ).ready( function() {
                $('#myModal').modal( 'toggle' );
            });
        </script>
    @endif


@endsection
