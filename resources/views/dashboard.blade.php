@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Posts</a>
                    <br><br>
                   <h3>Your Blog Posts</h3>
                   
                   <table class="table table-stripped">
                    @if(count($posts)>0)
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>

                            @foreach($posts as $post)
                                <tr>
                                    <td><h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3></td>
                                    <td><a class="btn btn-default" href="/posts/{{$post->id}}/edit" style="border-color: black">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>     
                            @endforeach
                    @else 
                            You have no post
                    @endif> 
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
