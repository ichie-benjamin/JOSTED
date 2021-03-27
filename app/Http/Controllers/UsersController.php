<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function all(Request $request){
        if(!auth()->user()->is_admin){
            return redirect()->route('home');
        }
        if($request->get('admin')){
            $users = User::where('email','!=',env('developer'))->whereIsAdmin(true)->paginate(50);
            $title = "All Admins";
        }else{
            $users = User::where('email','!=',env('developer'))->whereIsAdmin(false)->paginate(50);
            $title = "All Users";
        }
        return view('admin.users',compact('users','title'));
    }
    public function makeAdmin($id){
        if(!auth()->user()->is_admin){
            return redirect()->route('home');
        }
        $user = User::findOrFail($id);
        $user->is_admin = !$user->is_admin;
        if(Auth()->id() != $id){
            $user->save();
        }
        return redirect()->route('admin.users')->with('success','User role updated');
    }
    public function delete($id){
        if(!auth()->user()->is_admin){
            return redirect()->route('home');
        }
        $user = User::findOrFail($id);
        if(Auth()->id() != $id){
            $user->delete();
        }
        return redirect()->route('admin.users')->with('success','User successfully deleted');
    }
}
