<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Mill;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MillController extends Controller
{
    public function index()
    {
        $mills=auth()->user()->mills;

       $total= auth()->user()->mills->sum('totalmill');

        return view('mill.home', compact('mills','total'));
    }

    public function mill(){

        $meals=Mill::all();

        return view('admin.allmill', compact('meals'));
    }

    public function create(){

        $users=User::lists('name','id');

        return view('admin.mealform',compact('users'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'date' => 'required',
            'daymill' => 'required',
            'nightmill' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //dd($request->all());

        $mill=new Mill();
        $mill->user_id=$request->get('name');
        $mill->date=$request->get('date');
        $mill->daymill=$request->get('daymill');
        $mill->nightmill=$request->get('nightmill');
        $mill->totalmill=$request->get('daymill')+$request->get('nightmill');
        $mill->save();

        return redirect('/meals');

    }


    public function edit($id){

        $mill=Mill::find($id);
        $users=User::lists('name','id');
        // dd($user);
        return view('admin.mealedit', compact('mill','users'));
    }


    public function update(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'date' => 'required',
            'daymill' => 'required',
            'nightmill' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mill= Mill::findOrFail($id);;
        $mill->user_id=$request->get('name');
        $mill->date=$request->get('date');
        $mill->daymill=$request->get('daymill');
        $mill->nightmill=$request->get('nightmill');
        $mill->totalmill=$request->get('daymill')+$request->get('nightmill');
        $mill->save();
        return redirect('/meals');

    }

    public function delete($id){
        $mill=Mill::find($id);
        $mill->delete();
        return redirect('/meals');
    }
}
