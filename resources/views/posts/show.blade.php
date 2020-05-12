@extends('layouts.app')

@section('content')

       <a href="/posts" class="btn btn-default" style="margin-top: 10px; background-color:cornflowerblue; color:cornsilk; border-radius=30px"> << Go Back </a>
       <h2 style="margin-top: 20px">{{$post->title}}</h2>
       <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image">
    <div>
        {{$post->body}}
    </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
            <br>
        @if(!Auth::guest())
            @if(Auth::user()->id==$post->user_id)
                <span><a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="border-color: greenyellow">Edit</a></span>
                <div  class="pull-right" style="float: right;">
                    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                    {!!Form::close()!!}
                </div>
            @endif
    @else 

        @endif
@endsection