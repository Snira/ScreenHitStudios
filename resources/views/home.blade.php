@extends('layouts.app')

@section('content')
    <div class="videopane bgblack">
        <video id="bg" width="480" height="320" autoplay loop muted>
            <source src="{{asset('video/Placeholder Video.mp4')}}" type="video/mp4">

            Your browser does not support the video tag.
        </video>
    </div>

    <div class="videopanecontent">
        <h1>Deze site is kanker lauw doei</h1>

    </div>

    <div class="" style="margin-top: 90%">
        <h1>test</h1>
    </div>

@endsection
