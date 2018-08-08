@php ($title = $post->title)
@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/posts">Go Back</a>
    <div style="height:10px"></div>
    <div class="jumbotron">
    <div class="container">{{$post->body}}</div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    </div>
@endsection