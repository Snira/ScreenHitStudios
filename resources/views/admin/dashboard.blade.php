@extends('layouts.app')

@section('content')

    <ul class="list-group" style="margin-top: 20%">Opties
        <li><a href="{{route('admin.posts')}}">Beheer bestaande posts</a></li>
        <li><a href="{{route('admin.posts.create')}}">Nieuwe post</a></li>
    </ul>
@endsection