<?php

namespace App\Http\Controllers;
use DB;
use App\Bazar;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BazarController extends Controller
{
    public function index(){

        $bazars=Bazar::all();

        $totalbazar=DB::table('bazars')->sum('amount');



        return view('mill.bazar', compact('bazars','totalbazar'));
    }

    public function bazar(){

        $bazars=Bazar::all();

        return view('admin.allbazar',compact('bazars'));
    }

    public function create(){
        return view('admin.bazarform');

    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'date'=>'required',
            'name' => 'required',
            'amount' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $bazar=new Bazar();
        $bazar->date=$request->get('date');
        $bazar->name=$request->get('name');
        $bazar->amount=$request->get('amount');
        $bazar->save();
        return redirect('/bazars');
    }

    public function edit($id){

        $bazar=Bazar::find($id);
        // dd($user);
        return view('admin.bazaredit', compact('bazar'));
    }

    public function update(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'date'=>'required',
            'name' => 'required',
            'amount' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $bazar=Bazar::findOrFail($id);
        $bazar->date=$request->get('date');
        $bazar->name=$request->get('name');
        $bazar->amount=$request->get('amount');
        $bazar->save();
        return redirect('/bazars');
    }


    public function delete($id){

        $bazar=Bazar::findOrFail($id);

        $bazar->delete();

        return redirect()->back();

    }
}
