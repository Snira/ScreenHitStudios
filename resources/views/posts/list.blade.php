@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="margin-top: 20%">Beheer posts</h1>
        <ul class="list-group" >
            @foreach($posts as $post)
                <li>
                    <div>
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->body}}</p>
                        <img src="{{asset('img/'.$post->imagepath)}}" alt="thumbnail" height="5%" width="10%">
                    </div>
                    <div style="margin-top: 5%">
                        <a class="btn btn-primary" href="{{route('admin.posts.edit',['id' => $post->id])}}">Aanpassen</a>
                        <a class="btn btn-primary"  href="{{route('admin.posts.delete',['id' => $post->id])}}">Verwijder</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection