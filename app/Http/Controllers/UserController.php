<?php

namespace App\Http\Controllers;
use App\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = UserModel::all();
        return view("test/user")->with('data',$user);
    }

    public function create(){
        return view("test/createuser");
    }

    public function store(Request $request){
        $data_input = $request->all();

        $user = new UserModel;
        $user->name = $data_input['name'] ;
        $user->email = $data_input['email'] ;
        $user->password = $data_input['password'] ;
        $user->save();

        return redirect("user");
    }

    public function edit($id){
        $user = UserModel::findOrFail($id);
        return view('test/edituser',compact('user'));
    }

    public function update($id,Request $request){
        $user = UserModel::findOrFail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return redirect("user");
    }

    public function destroy($id){
        $user = UserModel::find($id);
        $user->delete();
        return redirect("user");
    }
}
