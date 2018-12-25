@extends('templates.main')

@section('title')
    Đây là trang xem user
@stop

@section('content')

{{-- <ul>
    @foreach($data as $user)
    <li> Name: {{ $user->name }} - Email: {{ $user->email }} ----- <a href="{{ route('user.edit', $user->id) }}">edit</a>-
      {{ Form::open(["method" => "DELETE","route" => ["user.destroy", $user->id]]) }}
      {{ Form::submit('Delete') }}
      {{ Form::close() }}
    </li>
    @endforeach
</ul> --}}

<div class="row">

  <div class="table-responsive">
    <table id="example" class="display" cellspacing="0" width="100%" style="white-space: nowrap">
        <thead>
          <tr>
            <th>STT</th>
            <th>name</th>
            <th>email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $stt=0 ?>
          @foreach($data as $user)
          <?php $stt=$stt+1 ?>
          <tr>
            <td>{{ $stt }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <a class="btn btn-small btn-primary pull-right" href="{{ route('user.edit', $user->id) }}">Edit</a>
              {{ Form::open(["method" => "DELETE","route" => ["user.destroy", $user->id]  ,'class' => 'pull-right']) }}
                {{ Form::submit('Delete', ["class" => "btn btn-danger", "style" => "margin-left: 50px;"]) }}
                {{ Form::close() }}
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>
</div>

@stop
