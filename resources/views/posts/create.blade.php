@extends('layouts.master')
@section('content')
    <div class="jumbotron text-center mt-4">
        <h1>Create Post</h1>
    </div>
    {!! Form::open(['action' => 'PostsController@store', 'method' =>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=> 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('datedebut', 'Date début')}}
        {{Form::text('datedebut', '', ['class'=> 'form-control', 'placeholder' => 'Date début'])}}
    </div>
    <div class="form-group">
        {{Form::label('datefin', 'Date de fin')}}
        {{Form::text('datefin', '', ['class'=> 'form-control', 'placeholder' => 'Date de fin'])}}
    </div>
    <div class="form-group">
        {{Form::label('nbreleves', 'Nombre Eleves')}}
        {{Form::text('nbreleves', '', ['class'=> 'form-control', 'placeholder' => 'Nombre Eleves'])}}
    </div>
    <div class="form-group">
        {{Form::label('prix', 'Prix')}}
        {{Form::text('prix', '', ['class'=> 'form-control', 'placeholder' => 'Prix'])}}
    </div>

    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['id' =>'article-ckeditor', 'class'=> 'form-control', 'placeholder' => 'description'])}}
    </div>
    <div class="form-group col mt-4">
        {{Form::file('cover_image')}}
    </div>
    <div class="mt-3">
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection