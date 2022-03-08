<style>
    .test{
font-family:cursive;
color:white;
font-size:18px;
    }
   .btn-default{
       padding-left:10px;
       padding-right:10px;
       padding-top:10px;
       padding-bottom:10px;
       margin-left:520px;
       font-family:Helvetica;
   }
   .postone{
       color:#8FBC8F;
       font-family:cursive;
   }
   .wr{
       color:#F08080;
   }
    </style>

@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn-default">Go Back</a>
    <h1 class="postone">{{$post->title}}</h1>
    <div>      <img src="{{$post->cover_image}}" alt=""></div>
<!--   <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"> -->
    <br><br>
    <div class="test">
        {!!$post->body!!}
    </div>
    <hr>
    <small class="wr">Written on {{$post->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection