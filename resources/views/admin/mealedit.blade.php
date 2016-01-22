@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create</div>
                    <div class="panel-body">

                            {!! Form::model($mill,['method'=>'PATCH','action'=>['MillController@update',$mill->id],'class'=>'form-horizontal']) !!}
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">

                                    {!!Form::select('name',$users,null,['class'=>'form-control','multiple'])!!}

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Date</label>

                                <div class="col-md-6">

                                    {!! Form::text('date',null,['class'=>'form-control','placeholder'=>'name']) !!}
                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('daymill') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Day Meal</label>

                                <div class="col-md-6">

                                    {!! Form::number('daymill',null,['class'=>'form-control','placeholder'=>'name']) !!}

                                    @if ($errors->has('daymill'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('daymill') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nightmill') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Night Meal</label>

                                <div class="col-md-6">

                                    {!! Form::number('nightmill',null,['class'=>'form-control','placeholder'=>'name']) !!}

                                    @if ($errors->has('nightmill'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nightmill') }}</strong>
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