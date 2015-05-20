@extends('...app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('flash::message')
                <div class="col-md-offset-4">
                    <h1 class="title">{{Lang::get('user_overview.title')}}</h1>
                </div>
                <br>
                @include('errors.list')
                <div class="row">
                    <div class="col-xs-6 col-sm-4">
                        <a href="{{url('users/create')}}" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-plus"></span>{{Lang::get('user_overview.createbtn')}}</a>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="panel panel-default ">
                            <div class="panel-heading">
                                {{Lang::get('participation_overview.filteroptions')}}
                            </div>
                            <div class="panel-body">
                                {!! Form::open(['method' => 'POST', 'id' => 'searchform' ]) !!}
                                    <div class="form-group">
                                        {!! Form::text('filterinput', null, ['class' => 'form-control', 'id' => 'filterinput']) !!}
                                    </div>
                                    <div class="input-group" id="adv-search">
                                        <div class="input-group-btn">
                                            <div class="btn-group" role="group">
                                                <div class="form-group">
                                                    {!! Form::select('filteropt', array('firstName' => Lang::get('users.firstname'), 'name' => Lang::get('users.name'), 'dateOfBirth' => Lang::get('users.dateofbirth'),
                                                        'emailAddress' => Lang::get('users.email'), 'address' => Lang::get('users.address'), 'city' => Lang::get('users.city'), 'clubD' => Lang::get('users.club')),'firstName', array('class' => 'form-control', 'id' => 'filteropt'));!!}
                                                    {!! Form::close() !!}
                                                    <button type="button" id="search" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-xs-6 col-sm-4">
                        <a href="{{url('csv/export/users')}}" class="btn btn-sm btn-dark pull-right"><span class="glyphicon glyphicon-floppy-save"></span> {{Lang::get('buttons.exportbtn')}}</a>
                    </div>
                </div>
                <div id="table">
                    @include('users.table', ['users' => $users])
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    {!! Html::script('/javascript/searchAjax.js')!!}
    {!! Html::script('/javascript/jquery.tablesorter.js') !!}
@endsection
