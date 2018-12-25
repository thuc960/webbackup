@extends('templates.mastertest')

@section('title')

    Đây là trang tạo User

@stop

@section('content')

    {!! Form::open(['url' => 'user']) !!}
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name') !!}
    {!! Form::label('email','Email:') !!}
    {!! Form::text('email') !!}
    {!! Form::label('password','Password:') !!}
    {!! Form::text('password') !!}
    {!! Form::submit('create') !!}
    {!! Form::close() !!}

@stop
