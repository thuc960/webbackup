@extends('templates.main')

@section('title')
    Create Type
@stop

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
     <h1>Create New Type</h1>
     <hr>

  {!! Form::open(['route' => 'type.store', 'data-parsley-validate' => '', 'files' => true, 'class'=>'form form-horizontal','style'=>'margin-top:50px']) !!}
    <div class="form-group">
      {{ Form::label('type','Type:',['class'=>'col-sm-2 control-label']) }}
      <div class="col-sm-8">
        {{ Form::text('type', null ,['class'=>'form-control']) }}
      </div>
    </div>


    <div class="text-center">
      {{ Form::submit('Add type', ['class' => 'btn btn-success', 'style' => 'margin-top: 20px;']) }}

    </div>
  {!! Form::close() !!}

  </div>
</div>
@stop
