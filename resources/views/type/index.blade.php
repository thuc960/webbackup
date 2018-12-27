@extends('templates.main')

@section('title')
    This is list type of backup
@stop

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>Type List</h1>
    </div>

    <div class="col-md-2">
      <a href="{{ route('type.create') }}" class="btn btn-primary btn-lg btn-block btn-h1-spacing">Add Type</a>
    </div>
  </div>

  <hr>

  <div class="row">

    <div class="table-responsive">
      <table id="example" class="display" cellspacing="0" width="100%" style="white-space: nowrap">
          <thead>
            <tr>
              <th>No.</th>
              <th>Type</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $number=0 ?>
            @foreach($data as $type)
            <?php $number=$number+1 ?>
            <tr>
              <td>{{ $number }}</td>
              <td>{{ $type->type }}</td>

              <td>

                {{ Form::open(["method" => "DELETE","route" => ["type.destroy", $type->id]  ,'class' => 'pull-right']) }}
                  {{ Form::submit('Delete', ["class" => "btn btn-danger", "style" => "margin-left: 50px;"]) }}
                  {{ Form::close() }}
                  <a class="btn btn-small btn-primary pull-right" href="{{ route('type.edit', $type->id) }}">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
@stop
