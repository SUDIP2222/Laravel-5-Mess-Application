@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create</div>
                    <div class="panel-body">
                        {!! Form::model($bazar,['method'=>'PATCH','action'=>['BazarController@update',$bazar->id],'class'=>'form-horizontal']) !!}
                            {!! csrf_field() !!}



                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Date</label>

                                <div class="col-md-6">
                                    {!! Form::text('date',null,['class'=>'form-control']) !!}

                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

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

                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Amount</label>

                                <div class="col-md-6">

                                    {!! Form::number('amount',null,['class'=>'form-control','placeholder'=>'name']) !!}

                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Create
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