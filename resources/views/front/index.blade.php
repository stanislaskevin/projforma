@extends('layouts.master')
    @section('content')
        <div class="jumbotron text-center mt-4">
            <h1>{{$title}}</h1>
            <p>Affiche les dernieres formations/stages</p>
        </div>

        <ul class="list-group">
            <li class="list-group-item">
                <div class="card">
                    <div class="row ">
                        <div class="col-md-5 mt-3">
                            <img width="171" height="171" src="" alt="">
                            <ul class="text-left mt-3">
                                <li class="card-text">prix</li>
                                <li class="card-text">nbr eleve</li>
                                <li class="card-text">Date de debut</li>
                                <li class="card-text">Date de fin</li>
                            </ul>
                        </div>
                        <div class="col-md-7 px-3 text-left mt-3">
                            <div class="card-block px-3">
                                <h4 class="card-title"><a href="/posts">title</a></h4>
                                <p class="card-text">description</p>
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
    @endsection