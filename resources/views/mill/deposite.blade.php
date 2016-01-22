@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th class="text-center">Date</th>
                    <th class="text-center">Credit</th>
                    <th class="text-center">Debit</th>


                </tr>

                </thead>
                <tbody>
                @foreach ($deposits as $deposit)
                    <tr>

                        <td class="text-center">{{$deposit->date}}</td>
                        <td class="text-center">{{$deposit->credit}}</td>
                        <td class="text-center">{{$deposit->Debit}}</td>

                    </tr>

                @endforeach

                </tbody>
            </table>

            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th class="text-center"> Total => &nbsp;&nbsp;{{$totaldeposit or 'Default'}}</th>
                </tr>

                </thead>
            </table>

        </div>

    </div>

@endsection