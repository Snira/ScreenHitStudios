@extends('layouts.app')

@section('content')
    <div class="videopane bgblack">
        <video id="bg" width="480" height="320" autoplay="autoplay" loop="loop" muted="muted">
            <source src="{{asset('video/Placeholder Video.mp4')}}" type="video/mp4">

            Your browser does not support the video tag.
        </video>
    </div>

    <div class="videopanecontent">
        <div class="row">
            <h2>Latest Updates & News</h2>
        </div>
        <div class="row">
            <div class="col-md-2">
                <p>Tekst</p>
            </div>
        </div>


    </div>
    <div class="panel1">

    </div>
    <div class="panel1content">
        <div class="row">
            <div class="col-md-6">
                <h2>Dit spel is de shit</h2>
            </div>

        </div>
    </div>
    <div class="panel2">
        <div class="col-md-6 square1">
        <h2>Als je dit niet speelt ben je niet cool</h2>
        </div>
        <div class="col-md-6 square2">
        <h2>En kost ook nog eens helemaal NIKS</h2>
        </div>
    </div>



@endsection
