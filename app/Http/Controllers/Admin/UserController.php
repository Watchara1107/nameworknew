<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function edit($id){
        $users = User::find($id);
        return view('admin.user.edit',compact('users'));
    }

    public function update(Request $request,$id){
        $users = User::find($id);
        $users->name = $request->name;
        $users->phone = $request->phone;
        $users->update();
        return redirect()->route('user.index');
    }

    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->route('user.index');
    }

}
