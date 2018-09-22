@extends('layouts.master')
@section('content')
    <div class="jumbotron text-center mt-4">
        <h1>Contact</h1>
    </div>
        <div class="col text-left">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            {!! Form::open(['route'=>'contact.store', 'method'=>'POST']) !!}
                {{csrf_field()}}
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('Name:') !!}
                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('Email:') !!}
                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                {!! Form::label('Message:') !!}
                {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Envoyez</button>
            </div>

            {!! Form::close() !!}

        </div>

@endsection

