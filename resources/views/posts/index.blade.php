@extends('layouts.app')
@section('content')
<h1>Post</h1>
@if(count($posts) > 1)
    @foreach($posts as $post)
    <div class="well">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written On: {{$post->created_at}} by {{$post->user->name}}</small></div>
@endforeach
@else
    <p>No Posts Fount</p>
@endif


@endsection