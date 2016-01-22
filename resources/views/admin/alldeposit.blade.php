@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <a href = "" class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span> &nbsp; Credit &nbsp;</a>
            <a href = "" class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span> &nbsp; Debit &nbsp;</a>
            @include('admin.bar')
            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Credit</th>
                    <th class="text-center">Debit</th>

                </tr>

                </thead>
                <tbody>
                @foreach ($deposits as $deposit)
                    <tr>
                        <td class="text-center">{{$deposit->user->name}}</td>
                        <td class="text-center">{{$deposit->date}}</td>
                        <td class="text-center">{{$deposit->credit}}</td>
                        <td class="text-center">{{$deposit->Debit}}</td>
                        <td><center><a href = "" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
                                <a href = "{{ action('DepositController@delete', $deposit->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center></td>

                    </tr>

                @endforeach

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