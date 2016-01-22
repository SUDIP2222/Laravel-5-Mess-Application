@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create</div>
                    <div class="panel-body">
                        {!! Form::model($deposit,['method'=>'PATCH','action'=>['DepositController@update',$deposit->id],'class'=>'form-horizontal']) !!}
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
                                    {!! Form::text('date',null,['class'=>'form-control']) !!}

                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('credit') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Credit</label>

                                <div class="col-md-6">

                                    {!! Form::number('credit',null,['class'=>'form-control']) !!}

                                    @if ($errors->has('credit'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('credit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('Debit') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Dedit</label>

                                <div class="col-md-6">

                                    {!! Form::number('Debit',null,['class'=>'form-control']) !!}

                                    @if ($errors->has('Dedit'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('Debit') }}</strong>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection