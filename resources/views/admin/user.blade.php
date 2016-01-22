@extends('layouts.app')

@section('content')

    <div class="container">



        <div class="row">

            <a href = "{{ URL::to('/users/create') }}" class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span> &nbsp; Create &nbsp;</a>

            @include('admin.bar')
            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Role</th>



                </tr>

                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>

                        <td class="text-center">{{$user->name}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        @if($user->active)
                            <td class="text-center">Active</td>
                        @else
                            <td class="text-center">Not Active</td>
                        @endif
                        <td class="text-center">{{$user->is_a}}</td>

                        <td><center><a href = "{{ URL::to('users/'.$user->id.'/edit') }} " class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a> <a href = "{{ action('UserController@delete', $user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center></td>

                    </tr>

                @endforeach

                </tbody>
            </table>





        </div>

    </div>

@endsection