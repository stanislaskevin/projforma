@extends('layouts.master')
@section('content')
    <div class="jumbotron text-center mt-4">
        <a href="/posts" class="btn btn-block" >go back</a>
    </div>

    <ul class="list-group">
        <li class="list-group-item">
            <div class="card">
                <div class="row ">
                    <div class="col-md-5 mt-3">
                    @if($post->cover_image)
                        <img width="171" height="171" src="{{asset('images/public/images/'.$post->cover_image)}}">
                    @elseif(($post->picture))
                        <img width="171" height="171" src="{{asset('images/'.$post->picture->link)}}" alt="{{$post->picture->title}}">
                    @endif
                        <ul class="text-left mt-3">
                            <li class="card-text">{{$post->datedebut}}</li>
                            <li class="card-text">{{$post->datefin}}</li>
                            <li class="card-text">{{$post->nbreleves}}</li>
                            <li class="card-text">{{$post->prix}} €</li>
                        </ul>
                    </div>
                    <div class="col-md-7 px-3 text-left mt-3">
                        <div class="card-block px-3">
                            <h4 class="card-title">{{$post->title}}</h4>
                            <p class="card-text">{!!$post->description!!}</p>
                            <small>{{$post->created_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    @if(!Auth::guest())
        <div class="container mt-4">
            <div class="row">
                <div class="col-6">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-success mr-4">Edit</a>
                </div>
                <div class="col-6">
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id],'method' =>'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>' btn btn-danger'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endif
@endsection