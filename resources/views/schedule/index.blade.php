@extends('templates.main')

@section('title')
    This is list server
@stop

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>Schedule List</h1>
    </div>

    <div class="col-md-2">
      <a href="{{ route('schedule.create') }}" class="btn btn-primary btn-lg btn-block btn-h1-spacing">Add Schedule</a>
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
              <th>From Server</th>
              <th>To Server</th>
              <th>Repeat</th>
              <th>Keep</th>
              <th>Begin</th>
              <th>End</th>
            </tr>
          </thead>
          <tbody>
            <?php $number=0 ?>
            @foreach($data as $schedule)
            <?php $number=$number+1 ?>
            <tr>
              <td>{{ $number }}</td>
              <td>{{ $schedule->id_type }}</td>
              <td>{{ $schedule->id_server_src }}</td>
              <td>{{ $schedule->id_server_des }}</td>
              <td>{{ $schedule->repeat }}</td>
              <td>{{ $schedule->keep }}</td>
              <td>{{ $schedule->time_begin }}</td>
              <td>{{ $schedule->time_end }}</td>
              <td>

                {{ Form::open(["method" => "DELETE","route" => ["schedule.destroy", $schedule->id]  ,'class' => 'pull-right']) }}
                  {{ Form::submit('Delete', ["class" => "btn btn-danger", "style" => "margin-left: 50px;"]) }}
                  {{ Form::close() }}
                  <a class="btn btn-small btn-primary pull-right" href="{{ route('schedule.edit', $schedule->id) }}">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
@stop
