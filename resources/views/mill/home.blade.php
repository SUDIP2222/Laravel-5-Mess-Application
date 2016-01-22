@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <table class="table table-bordered ">
            <thead>
            <tr>
                <th class="text-center">Date</th>
                <th class="text-center">Day-Meal</th>
                <th class="text-center">Night-Meal</th>
                <th class="text-center">Total-Meal</th>

            </tr>

            </thead>
            <tbody>
            @foreach ($mills as $mill)
            <tr>

                <td class="text-center">{{$mill->date}}</td>
                <td class="text-center">{{$mill->daymill}}</td>
                <td class="text-center">{{$mill->nightmill}}</td>
                <td class="text-center">{{$mill->totalmill}}</td>


            </tr>

            @endforeach

            </tbody>
        </table>


        <table class="table table-bordered ">
            <thead>
            <tr>
                <th class="text-center"> Total => &nbsp;&nbsp;{{$total or 'Default'}}</th>
            </tr>

            </thead>
        </table>


    </div>

</div>

@endsection