@extends('templates.mastertest')

@section('title')

    Đây là trang sửa User

@stop

@section('content')
<h1>Ma so bai viet : {!! $user->id !!}</h1>
    {!! Form::model($user,['method'=>'PUT','route'=>['user.update', $user->id] ]) !!}
      {{-- Form::model($user, ['route' => ['user.update', $user->id]]) --}}
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name') !!}
    {!! Form::label('email','Email:') !!}
    {!! Form::text('email') !!}
    {!! Form::label('password','Password:') !!}
    {!! Form::text('password') !!}
    {!! Form::submit('update') !!}
    {!! Form::close() !!}

@stop
