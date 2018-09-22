@extends('layouts.master')
@section('content')
    <div class="jumbotron text-center mt-4">
        <h3>Dashboad perso</h3>
        <a href="/posts/create" class="btn btn-primary">create post</a>
    </div>

    <div class="row">
        <div class="col">
            <div class="container">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
                @if(count($posts) > 0)
            <table class="table table-striped table-light">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Date Début</th>
                    <th scope="col">Date Fin</th>
                    <th scope="col">Statut</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                    <th scope="row"><a a href="/posts/{{$post->id}}">{{$post->title}}</a></th>
                    <td>{!!$post->description!!}</td>
                    <td>{{$post->prix}}</td>
                    <td>{{$post->datedebut}}</td>
                    <td>{{$post->datefin}}</td>
                    <td>STATUT</td>
                    <td><a  class="btn btn-success" href="/posts/{{$post->id}}/edit">EDIT</a></th>
                    <td>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id],'method' =>'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @else
                <p>You have no posts</p>
            @endif
    </div>
</div>
@endsection
