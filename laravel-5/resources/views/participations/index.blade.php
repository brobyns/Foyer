@extends('...app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-offset-2">
                    <h1 class="title">{{Lang::get('participation_overview.title')}}</h1>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-lg-5 col-lg-offset-3">
                        <div class="panel panel-default ">
                            <div class="panel-heading">
                                {{Lang::get('participation_overview.filteroptions')}}
                            </div>
                            <div class="panel-body"  style="padding: 5px">
                                {!! Form::open(['method' => 'POST', 'id' => 'searchform', 'class' => 'form-horizontal' ]) !!}
                                <ul class="list-group" style="margin-bottom: 0px">
                                    <li class="list-group-item"  style="padding: 0px 15px">
                                        {!! Form::label('year', Lang::get('participations.year'), ['class' =>'control-label', 'style' => 'float:left']) !!}
                                        <ul class="list-inline">
                                            @foreach($years as $year)
                                                <li>
                                                    {!! Form::label('year', $year, ['class' =>'control-label', 'style' => 'padding:7px']) !!}
                                                    {!! Form::checkbox('year', $year, null, ['class' => 'filter']) !!}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="list-group-item" style="padding: 0px 15px">
                                        {!! Form::label('distance', Lang::get('participations.distance'), ['class' =>'control-label', 'style' => 'float:left']) !!}
                                        <ul class="list-inline">
                                            @foreach($distances as $distance)
                                                <li>
                                                    {!! Form::label('distance', $distance, ['class' =>'control-label', 'style' => 'padding:7px']) !!}
                                                    {!! Form::checkbox('distance', $distance, null, ['class' => 'filter']) !!}
                                                </li>
                                            @endforeach
                                        </ul>

                                    </li>
                                     <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="input-group">
                                                {!! Form::text('filterinput', null, ['class' => 'form-control', 'id' => 'filterinput']) !!}
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="input-group" id="adv-search">
                                                        <div class="btn-group" role="group" style="display: inline-flex">
                                                            {!! Form::select('filteropt', array('firstName' => Lang::get('users.firstname'), 'name' => Lang::get('users.name'), 'dateOfBirth' => Lang::get('users.dateofbirth'),
                                                                    ),'firstName', array('class' => 'form-control', 'id' => 'filteropt'));!!}
                                                                {!! Form::close() !!}
                                                            <button type="button" id="search" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                     </li>
                                </ul>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-4">
                        <a href="{{url('csv/export/participations')}}" class="btn btn-sm btn-dark pull-right"><span class="glyphicon glyphicon-floppy-save"></span> {{Lang::get('buttons.exportbtn')}}</a>
                    </div>
                </div>
                <div id="table">
                    @include('participations.table', ['participations' => $participations])
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    {!! Html::script('/javascript/jquery.tablesorter.js') !!}
    {!! Html::script('/javascript/searchAjax.js')!!}
    {!! Html::script('/javascript/filterAjax.js') !!}
@endsection