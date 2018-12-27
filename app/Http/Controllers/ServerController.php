<?php

namespace App\Http\Controllers;
use App\Models\ServerModel;
use Illuminate\Http\Request;

class ServerController extends Controller
{
  public function index(){
      $server = ServerModel::all();
      return view("server/index")->with('data',$server);
  }

  public function create(){
      return view("server/create");
  }

  public function store(Request $request){
      $data_input = $request->all();

      $server = new ServerModel;
      $server->ip = $data_input['ip'] ;
      $server->describe = $data_input['describe'] ;
      $server->save();

      return redirect("server");
      // return redirect()->back();
  }

  public function edit($id){
      $server = ServerModel::findOrFail($id);
      return view('server/edit',compact('server'));
  }

  public function update($id,Request $request){
      $server = ServerModel::findOrFail($id);
      $server->ip=$request->ip;
      $server->describe=$request->describe;

      $server->save();
      return redirect("server");
  }

  public function destroy($id){
      $server = ServerModel::find($id);
      $server->delete();
      return redirect("server");
  }


}
