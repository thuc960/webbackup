@extends('templates.main')

@section('title')
    Create Schedule
@stop

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
     <h1>Create New Schedule</h1>
     <hr>

  {!! Form::open(['route' => 'server.store', 'data-parsley-validate' => '', 'files' => true, 'class'=>'form form-horizontal','style'=>'margin-top:50px']) !!}
    <div class="form-group">
      {{ Form::label('ip','IP:',['class'=>'col-sm-2 control-label']) }}
      <div class="col-sm-8">
        {{ Form::text('ip', null ,['class'=>'form-control']) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('describe','describe:',['class'=>'col-sm-2 control-label']) }}
      <div class="col-sm-8">
        {{ Form::text('describe', null ,['class'=>'form-control']) }}
      </div>
    </div>

    <div class="text-center">
      {{ Form::submit('Add server', ['class' => 'btn btn-success', 'style' => 'margin-top: 20px;']) }}

    </div>
  {!! Form::close() !!}

  </div>
</div>
@stop
