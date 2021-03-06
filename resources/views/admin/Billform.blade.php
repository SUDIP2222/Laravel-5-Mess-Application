@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/bills') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('buabill') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Bua Bill</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="buabill">

                                    @if ($errors->has('buabill'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('buabill') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('paperbill') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Paper Bill</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="paperbill">

                                    @if ($errors->has('paperbill'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('paperbill') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('dustbill') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Dust</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="dustbill">

                                    @if ($errors->has('dustbill'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('dustbill') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('electricity') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Electricity</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="electricity">

                                    @if ($errors->has('electricity'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('electricity') }}</strong>
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