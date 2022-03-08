<!DOCTYPE html>
<html>
    <head>
        <style>
           .well{
               margin-left:5px;
               margin-right:5px;
           }
            </style>
</head>

@extends('layouts.app')

@section('content')
      
<h1 >Showcase</h1>
@if(count($posts) > 0)
    @foreach($posts as $post)
        <div class="well col-lg-5">
            <div class="row">
     
                <div class="col-md-4 col-sm-4">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <div>      <img src="{{$post->body}}" alt=""></div>
                    <img style="width:55%" src="{{$post->cover_image}}">
                    <br>
                    <small>Written on {{$post->created_at}}</small>
                </div>
                
              
            </div>
        </div>
    @endforeach
    {{$posts->links()}}
@else
    <p>No posts found</p>
@endif
@endsection