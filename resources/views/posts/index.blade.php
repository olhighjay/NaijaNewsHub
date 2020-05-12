@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
    <hr>

    @if(count($posts)>0)
        @foreach($posts as $post)
               <div class="well"> 
                   <div class="row">
                       <div class="col-dm-4 col-sm-4">
                       <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image">
                       </div>

                       <div class="col-dm-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written  {{$post->created_at->diffForHumans()}} by {{$post->user->name}}</small>
                            <hr><br>
                       </div>
                   </div>
               </div>
        @endforeach
            
               {{ # Adding links to next and back page to pagination;
               $posts->links()}}
    @else
        {{'No post found'}}
    @endif


@endsection

