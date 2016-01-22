<?php

namespace App\Http\Controllers;
use App\Total;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TotalController extends Controller
{
    public function index()
    {

        $total = auth()->user()->mills->sum('totalmill');

        $totalbazar = DB::table('bazars')->sum('amount');

        $totalmill = DB::table('mills')->sum('totalmill');


        if($totalbazar && $totalmill) {

            $mealrate = $totalbazar / $totalmill;

            //dd($mealrate);

            $totalcost = $mealrate * $total;
        }
        $totalcredit=auth()->user()->deposits->sum('credit');
        $totaldebit=auth()->user()->deposits->sum('Debit');

        $deposit=$totalcredit-$totaldebit;

        $totalbuabill = DB::table('totals')->sum('buabill');
        $totalpaperbill = DB::table('totals')->sum('paperbill');
        $totaldustbill = DB::table('totals')->sum('dustbill');
        $totalelectricitybill = DB::table('totals')->sum('electricity');
        $totaluser = DB::table('users')->count();

        if($totalbuabill) {
            $buabill = number_format($totalbuabill / $totaluser,2);
        }
        if($totalpaperbill) {
            $paperbill =number_format($totalpaperbill / $totaluser,2);
        }
        if($totaldustbill) {
            $dustbill =number_format( $totaldustbill / $totaluser,2);
        }
        if($totalelectricitybill) {
            $electricitybill =number_format( $totalelectricitybill / $totaluser,2);
        }

        $totalamount=floor($deposit-($totalcost+$buabill+$paperbill+$dustbill+$electricitybill));

        $remaining=$deposit-$totalcost;




        return view('mill.total', compact('total','mealrate','totalcost','deposit','buabill','paperbill','dustbill','electricitybill','totalamount','remaining'));
    }


}

