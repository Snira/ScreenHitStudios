@extends('layouts.app')

@section('content')
    <h1 style="margin-top: 20%">Beheer posts</h1>
    <ul class="list-group" >
        @foreach($posts as $post)
            <li>
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
                <a class="btn btn-primary" href="{{route('admin.posts.edit',['id' => $post->id])}}">Aanpassen</a>
                <a class="btn btn-primary"  href="{{route('admin.posts.delete',['id' => $post->id])}}">Verwijder</a>
            </li>
        @endforeach
    </ul>
@endsection