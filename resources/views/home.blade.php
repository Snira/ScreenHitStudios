@extends('layouts.app')

@section('content')

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

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
    </div>
</div>

<div class="intro">
    <div class="videopane contain-width">
        <video id="bg" autoplay="autoplay" loop="loop" muted="muted">
            <source src="{{asset('video/HoltBackground.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
        </video>
    </div>
    <div class="intro-heading contain-width">
        <h1>{{trans('content.home.title')}}</h1>
        <p>{{trans('content.home.description')}} </p>
    </div>

    <div class="news-content contain-width">
        <h2>Latest Updates & News</h2>


        <div class="posts">
            @foreach($posts as $post)
            <div class="col-md-2 postpreview" style="background-image: url({{asset('img/'.$post->imagepath)}})">
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
</div>

<div class="about-us contain-width">
    <h3>Meet the team</h3>
    <div class="people">

        <div class="person">
            <img src="{{asset('img/Daney.png')}}" alt="person">
            <div class="info">
                <h3>Daney</h3>
                <p>Producer</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/Maarten.jpg')}}" alt="person">
            <div class="info">
                <h3>Maarten</h3>
                <p>Lead Marketing</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/Boy.jpg')}}" alt="person">
            <div class="info">
                <h3>Boy</h3>
                <p>Marketing</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/sarah.png')}}" alt="person">
            <div class="info">
                <h3>Sarah</h3>
                <p>Lead Artist</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/Saskia.png')}}" alt="person">
            <div class="info">
                <h3>Saskia</h3>
                <p>Artist</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/JJ.jpg')}}" alt="person">
            <div class="info">
                <h3>Jayjay</h3>
                <p>Artist</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/Wesley.jpg')}}" alt="person">
            <div class="info">
                <h3>Wesley</h3>
                <p>Lead Designer</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/Alex.jpg')}}"  alt="person">
            <div class="info">
                <h3>Alex</h3>
                <p>Designer</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/Kevin.jpeg')}}" alt="person" style="width: auto; height: 100%;">
            <div class="info">
                <h3>Kevin</h3>
                <p>Designer</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/Holt_v2.png')}}" alt="person">
            <div class="info">
                <h3>Rianne</h3>
                <p>Designer</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/martijn-rietveld.jpg')}}" alt="person">
            <div class="info">
                <h3>Martijn</h3>
                <p>Lead Developer</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/bram.png')}}" alt="person">
            <div class="info">
                <h3>Bram</h3>
                <p>Developer</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/florian.jpg')}}" alt="person">
            <div class="info">
                <h3>Florian</h3>
                <p>Developer</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/Jesse.jpg')}}" alt="person">
            <div class="info">
                <h3>Jesse</h3>
                <p>Developer</p>
            </div>
        </div>
        <div class="person">
            <img src="{{asset('img/roy.jpeg')}}" alt="person">
            <div class="info">
                <h3>Roy</h3>
                <p>Developer</p>
            </div>
        </div>
    </div>
</div>

<div class="contact contain-width">
    <h2>Let us keep you up to date!</h2>
    <form method="post" enctype="multipart/form-data" action="{{ route('home.signup') }}">
        <label for="email"></label>
        <input type="email" id="email" name="email">
        <button>Subscribe!</button>
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
</div>



@endsection
