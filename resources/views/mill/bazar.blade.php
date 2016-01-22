@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th class="text-center">Date</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Amount</th>


                </tr>

                </thead>
                <tbody>
                @foreach ($bazars as $bazar)
                    <tr>

                        <td class="text-center">{{$bazar->date}}</td>
                        <td class="text-center">{{$bazar->name}}</td>
                        <td class="text-center">{{$bazar->amount}}</td>



                    </tr>

                @endforeach

                </tbody>
            </table>


            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th class="text-center"> Total => &nbsp;&nbsp;{{$totalbazar or 'Default'}}</th>
                </tr>

                </thead>
            </table>


        </div>

    </div>

@endsection