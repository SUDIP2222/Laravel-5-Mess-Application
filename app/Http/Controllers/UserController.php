<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){

        $users=User::all();

        return view('admin.user',compact('users'));
    }

    public function create(){

        return view('admin.userform');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user=new User();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->is_a=$request->get('is_a');
        $user->active=$request->get('active');
        $user->password= bcrypt($request->get('password'));
        $user->save();

        return redirect('/users');

    }

    public function edit($id){

        $user=User::find($id);
        // dd($user);
        return view('admin.useredit', compact('user'));
    }

    public function update(Request $request,$id){

       // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user=User::findOrFail($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->is_a=$request->get('is_a');
        $user->active=$request->get('active');
        $user->password= bcrypt($request->get('password'));
        $user->save();

        return redirect('/users');

    }

    public function delete($id){

        $user=User::findOrFail($id);

        $user->delete();

        return redirect()->back();

    }
}
