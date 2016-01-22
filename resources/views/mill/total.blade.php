@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th class="text-center">Total</th>
                    <th class="text-center">Amount</th>
                </tr>

                </thead>
                <tbody>

                <tr>
                    <td class="text-center">Total Meal</td>
                    <td class="text-center">{{$total or 'Default'}}</td>
                </tr>
                <tr>
                    <td class="text-center">Meal Rate</td>
                    <td class="text-center">{{$mealrate or 'Default'}}</td>
                </tr>

                <tr>
                    <td class="text-center">Total Cost</td>
                    <td class="text-center">{{$totalcost or 'Default'}}</td>
                </tr>

                <tr>
                    <td class="text-center">Deposit</td>
                    <td class="text-center">{{$deposit or 'Default'}}</td>
                </tr>
                <tr>
                    <td class="text-center">Bua Bill</td>
                    <td class="text-center">{{$buabill or 'Default'}}</td>
                </tr>
                <tr>
                    <td class="text-center">Paper Bill</td>
                    <td class="text-center">{{$paperbill or 'Default'}}</td>
                </tr>
                <tr>
                    <td class="text-center">Dust Bill</td>
                    <td class="text-center">{{$dustbill or 'Default'}}</td>
                </tr>
                <tr>
                    <td class="text-center">Electricity Bill</td>
                    <td class="text-center">{{$electricitybill or 'Default'}}</td>

                </tr>

                <tr>
                    <td class="text-center">Remaining</td>
                    <td class="text-center">{{$remaining or 'Default'}}</td>

                </tr>


                </tbody>
            </table>


            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th class="text-center"> Total => &nbsp;&nbsp;{{$totalamount or 'Default'}}</th>
                    </tr>

                </thead>
            </table>


        </div>

    </div>

@endsection