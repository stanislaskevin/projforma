@extends('layouts.master')
@section('content')
    <div class="jumbotron text-center mt-4">
        <h1>Edit Post</h1>
    </div>
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' =>'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class'=> 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $post->description, ['id' =>'article-ckeditor', 'class'=> 'form-control', 'placeholder' => 'description'])}}
    </div>
    <div class="mt-3">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection