@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update</div>
                    <div class="panel-body">

                            {!! Form::model($user,['method'=>'PATCH','action'=>['UserController@update',$user->id],'class'=>'form-horizontal']) !!}
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'name']) !!}

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">

                                    {!! Form::text('email',null,['class'=>'form-control from-width','placeholder'=>'email']) !!}

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('is_a') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">User Role </label>

                                <div class="col-md-6">

                                    {!! Form::select('is_a',array('admin'=>'admin','user'=>'user'),null,['class'=>'form-control from-width']) !!}

                                    @if ($errors->has('is_a'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('is_a') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">User Active </label>

                                <div class="col-md-6">

                                    {!! Form::select('active',array('Not Active','Active'),null,['class'=>'form-control from-width']) !!}

                                    @if ($errors->has('active'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('active') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Update
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection