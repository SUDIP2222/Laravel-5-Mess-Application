@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <a href = "" class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span> &nbsp; Create &nbsp;</a>

            @include('admin.bar')
            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th class="text-center">Bua Bill</th>
                    <th class="text-center">Paper Bill</th>
                    <th class="text-center">Dust Bill</th>
                    <th class="text-center">Electricity Bill</th>
                </tr>

                </thead>
                <tbody>
                @foreach ($bills as $bill)
                    <tr>

                        <td class="text-center">{{$bill->buabill}}</td>
                        <td class="text-center">{{$bill->paperbill}}</td>
                        <td class="text-center">{{$bill->dustbill}}</td>
                        <td class="text-center">{{$bill->electricity}}</td>
                        <td><center><a href = "" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
                                <a href = "{{ action('BillController@delete', $bill->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center></td>

                    </tr>

                @endforeach

                </tbody>
            </table>





        </div>

    </div>

@endsection