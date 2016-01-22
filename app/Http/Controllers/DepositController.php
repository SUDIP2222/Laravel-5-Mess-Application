<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Deposit;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function index(){
        $deposits=auth()->user()->deposits;

        $totalcredit=auth()->user()->deposits->sum('credit');
        $totaldebit=auth()->user()->deposits->sum('Debit');

        $totaldeposit=$totalcredit-$totaldebit;

       // dd($deposits);

        return view('mill.deposite', compact('deposits','totaldeposit'));
    }

    public function deposit(){
        $deposits=Deposit::all();

        return view('admin.alldeposit', compact('deposits'));
    }

    public function createcredit(){
        $users=User::lists('name','id');
        return view('admin.creditform',compact('users'));

    }
    public function createdebit(){
        $users=User::lists('name','id');
        return view('admin.debitform',compact('users'));

    }

    public function storecredit(Request $request){


        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'date' => 'required',
            'credit' => 'required',


        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //dd($request->all());

        $deposit=new Deposit();
        $deposit->user_id=$request->get('name');
        $deposit->date=$request->get('date');
        $deposit->credit=$request->get('credit');
        $deposit->save();
        return redirect('/deposits');

    }

    public function storedebit(Request $request){



        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'date' => 'required',
            'debit' => 'required',


        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //dd($request->all());

        $deposit=new Deposit();
        $deposit->user_id=$request->get('name');
        $deposit->date=$request->get('date');
        $deposit->Debit=$request->get('debit');
        $deposit->save();
        return redirect('/deposits');
    }

    public function edit($id){

        $deposit=Deposit::find($id);
        $users=User::lists('name','id');
        // dd($user);
        return view('admin.depositedit', compact('deposit','users'));
    }

    public function update(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'date' => 'required',

        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       // dd($request->all());

        $deposit=Deposit::find($id);
        $deposit->user_id=$request->get('name');
        $deposit->date=$request->get('date');
        $deposit->credit=$request->get('credit');
        $deposit->Debit=$request->get('Debit');
        $deposit->save();
        return redirect('/deposits');
    }


    public function delete($id){

        $deposit=Deposit::findOrFail($id);

        $deposit->delete();

        return redirect()->back();

    }
}
