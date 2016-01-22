@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <a href = "{{ URL::to('/meals/create') }}" class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span> &nbsp; Create &nbsp;</a>

            @include('admin.bar')
            <table class="table table-bordered ">
                <thead>
                <tr>

                    <th class="text-center">Name</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Day-Meal</th>
                    <th class="text-center">Night-Meal</th>
                    <th class="text-center">Total-Meal</th>

                </tr>

                </thead>
                <tbody>
                @foreach ($meals as $meal)
                    <tr>

                        <td class="text-center">{{$meal->user->name}}</td>
                        <td class="text-center">{{$meal->date}}</td>
                        <td class="text-center">{{$meal->daymill}}</td>
                        <td class="text-center">{{$meal->nightmill}}</td>
                        <td class="text-center">{{$meal->totalmill}}</td>

                        <td><center><a href = "{{ URL::to('meals/'.$meal->id.'/edit') }}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
                                <a href = "{{ action('MillController@delete', $meal->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center></td>

                    </tr>

                @endforeach

                </tbody>
            </table>





        </div>

    </div>

@endsection