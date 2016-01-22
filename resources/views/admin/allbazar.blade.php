@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <a href = "{{ URL::to('/bazars/create') }}" class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span> &nbsp; Create &nbsp;</a>

            @include('admin.bar')
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
                        <td><center><a href = "{{ URL::to('bazars/'.$bazar->id.'/edit') }}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
                                <a href = "{{ action('BazarController@delete', $bazar->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center></td>

                    </tr>

                @endforeach

                </tbody>
            </table>





        </div>

    </div>

@endsection