<?php

namespace App\Http\Controllers;

use App\Total;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BillController extends Controller
{
    public function index(){
        $bills=Total::all();

        return view('admin.allbill',compact('bills'));

    }

    public function create(){

        return view('admin.billform');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'buabill'=>'required',
            'paperbill' => 'required',
            'dustbill' => 'required',
            'electricity'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //dd($request->all());
        $total=new Total();
        $total->buabill=$request->get('buabill');
        $total->paperbill=$request->get('paperbill');
        $total->dustbill=$request->get('dustbill');
        $total->electricity=$request->get('electricity');
        $total->save();

        return redirect('/bills');

    }

    public function edit($id){
        $bill=Total::find($id);
        return view('admin.billedit', compact('bill'));
    }

    public function update(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'buabill'=>'required',
            'paperbill' => 'required',
            'dustbill' => 'required',
            'electricity'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $bill=Total::findOrFail($id);
        $bill->buabill=$request->get('buabill');
        $bill->paperbill=$request->get('paperbill');
        $bill->dustbill=$request->get('dustbill');
        $bill->electricity=$request->get('electricity');
        $bill->save();
        return redirect('/bills');
    }

    public function delete($id){

        $bill=Total::findOrFail($id);

        $bill->delete();

        return redirect()->back();
    }
}
