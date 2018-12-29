@extends('templates.main')

@section('title')
    This is list server
@stop

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>Server List</h1>
    </div>

    <div class="col-md-2">
      <a href="{{ route('server.create') }}" class="btn btn-primary btn-lg btn-block btn-h1-spacing">Add server</a>
    </div>
  </div>

  <hr>

  <div class="row">

    <div class="table-responsive">
      <table id="example" class="display" cellspacing="0" width="100%" style="white-space: nowrap">
          <thead>
            <tr>
              <th>No.</th>
              <th>IP</th>
              <th>Describe</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $number=0 ?>
            @foreach($data as $server)
            <?php $number=$number+1 ?>
            <tr>
              <td>{{ $number }}</td>
              <td>{{ $server->ip }}</td>
              <td>{{ $server->describe }}</td>
              <td>

                {{ Form::open(["method" => "DELETE","route" => ["server.destroy", $server->id]  ,'class' => 'pull-right']) }}
                  {{ Form::submit('Delete', ["class" => "btn btn-danger", "style" => "margin-left: 50px;"]) }}
                  {{ Form::close() }}
                  <a class="btn btn-small btn-primary pull-right" href="{{ route('server.edit', $server->id) }}">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
@stop
