@extends('layouts.app')

@section('content')
         <h1 style="margin-top: 15px">Create Post</h1>
         {!! Form::open(['action' => 'PostsController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
              <div class="form-group">
                  {{Form::label('title', 'Title')}}
                  {{Form::text('title','', ['class'=>'form-control', 'placeholder'=>'title'])}}
              </div>
              <div class="form-group">
                  {{Form::label('body', 'Body')}}
                  {{Form::textarea('body','', ['id'=>'body','class'=>'form-control','name'=>'body', 'placeholder'=>'body text'])}}
              </div>
              <div class="form-group">
                  {{Form::file('cover_image')}}
              </div>
              {{Form::submit('submit',['class'=>"btn btn-primary"])}}
         {!! Form::close() !!}
@endsection
