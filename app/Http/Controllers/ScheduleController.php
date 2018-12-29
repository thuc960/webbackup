<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
  public function index(){
      $schedule = Schedule::all();
      return view("schedule/index")->with('data',$schedule);
  }

  public function create(){
      return view("schedule/create");
  }

  public function store(Request $request){
      $data_input = $request->all();

      $schedule = new Schedule;
      $schedule->id_type = $data_input['id_type'] ;
      $schedule->id_server_src = $data_input['id_server_src'] ;
      $schedule->id_server_des = $data_input['id_server_des'] ;
      $schedule->repeat = $data_input['repeat'] ;
      $schedule->time_begin = $data_input['time_begin'] ;
      $schedule->time_end = $data_input['time_end'] ;
      $schedule->keep = $data_input['keep'] ;
      $schedule->save();

      return redirect("schedule");
      // return redirect()->back();
  }

  public function edit($id){
      $schedule = Schedule::findOrFail($id);
      return view('schedule/edit',compact('schedule'));
  }

  public function update($id,Request $request){
      $schedule = Schedule::findOrFail($id);
      $schedule->id_type = $data_input['id_type'] ;
      $schedule->id_server_src = $data_input['id_server_src'] ;
      $schedule->id_server_des = $data_input['id_server_des'] ;
      $schedule->repeat = $data_input['repeat'] ;
      $schedule->time_begin = $data_input['time_begin'] ;
      $schedule->time_end = $data_input['time_end'] ;
      $schedule->keep = $data_input['keep'] ;

      $schedule->save();
      return redirect("schedule");
  }

  public function destroy($id){
      $schedule = Schedule::find($id);
      $schedule->delete();
      return redirect("schedule");
  }
}
