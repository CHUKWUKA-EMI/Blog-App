@extends('layouts.app')

@section('content')
     <a href="/posts" class="btn btn-secondary mt-2 mb-2">Go back</a>
    <h1>{{$post->title}}</h1>
    <img style="width: 100%" height="600" src="/storage/cover_images/{{$post->cover_image}}">
    <p>{!!$post->body!!}</p>
    {{-- the double exclamation mark helps ckeditor to parse the html --}}
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
       @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=>'POST', 'class'=>'float-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
       @endif
    @endif
@endsection
