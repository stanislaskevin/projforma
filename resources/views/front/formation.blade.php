@extends('layouts.master')
@section('content')
    <div class="jumbotron text-center mt-4">
        <h1>{{$title}}</h1>
    </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
    <ul class="list-group mb-3">
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
                            <li class="card-text">{{$post->post_type}}</li>
                        </ul>
                    </div>
                    <div class="col-md-7 px-3 text-left mt-3">
                        <div class="card-block px-3">
                            <h4 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                            <p class="card-text">{!!$post->description!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
        @endforeach
    <div class="container mt-3">
        <div class="offset-5">
        </div>
    </div>
    @endif
    {{$posts->links()}}
@endsection