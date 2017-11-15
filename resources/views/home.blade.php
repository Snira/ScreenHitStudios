@extends('layouts.app')

@section('content')

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
                <div id="usp1" class="row">
                    <div class="col-md-6">
                        <h2>{{trans('content.home.USP1.title')}}</h2>
                        <p>{{trans('content.home.USP1.description')}}</p>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="imagepane">
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




@endsection
