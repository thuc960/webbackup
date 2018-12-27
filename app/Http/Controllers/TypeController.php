<?php

namespace App\Http\Controllers;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
  public function index(){
      $type = Type::all();
      return view("type/index")->with('data',$type);
  }

  public function create(){
      return view("type/create");
  }

  public function store(Request $request){
      $data_input = $request->all();

      $type = new Type;
      $type->type = $data_input['type'] ;

      $type->save();

      return redirect("type");
      // return redirect()->back();
  }

  public function edit($id){
      $type = Type::findOrFail($id);
      return view('type/edit',compact('type'));
  }

  public function update($id,Request $request){
      $type = Type::findOrFail($id);
      $type->type=$request->type;

      $type->save();
      return redirect("type");
  }

  public function destroy($id){
      $type = Type::find($id);
      $type->delete();
      return redirect("type");
  }
}
