@extends('layouts.master')

@section('content')
    <div class="jumbotron text-center mt-4">
        <h1>Voici le(s) résultat(s) de la recherche:</h1>
    </div>
                @forelse($posts as $post)
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
                                            <li class="card-text">{{$post->post_type}}</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-7 px-3 text-left mt-3">
                                        <div class="card-block px-3">
                                            <h4 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                                            <p class="card-text">{!!$post->description!!}</p>
                                            <small>{{$post->created_at}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="container mt-3">
                        <div class="offset-5">
                        </div>
                    </div>
                @empty
                @endforelse
    {{$posts->links()}}
@endsection