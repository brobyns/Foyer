@extends('...app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('flash::message')
                <div class="col-md-offset-4">
                    <h1 class="title">{{Lang::get('race_overview.title')}}</h1>
                </div>
                <br>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> {{Lang::get('participation_form.error_input')}}<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table id="myTable" class="table table-striped table-bordered table-responsive tablesorter">
                    <thead>
                    <tr>
                        <th>{{Lang::get('races.nameOfTheRace')}}</th>
                        <th>{{Lang::get('races.firstRaceNumber')}}</th>
                        <th>{{Lang::get('races.distance')}}</th>
                        <th>{{Lang::get('race_overview.numberparticipants')}}</th>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($races as $key => $race)
                        <tr>
                            <td>{{ $race->nameOfTheRace }}</td>
                            <td>{{ $race->firstRaceNumber }}</td>
                            <td>{{ $race->distance }}</td>
                            <td>{{ count($race->participations) }}</td>
                            <td>
                                <a href="{{url('races/'.$race->id).'/edit'}}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-wrench"></span>{{Lang::get('buttons.editbtn')}}</a>

                                {!! Form::open(['action' => ['RacesController@destroy', $race->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                    {!! Form::button('<span class="glyphicon glyphicon-trash"></span>' . Lang::get('buttons.deletebtn'), ['class'=>'btn btn-danger btn-sm', 'type'=>'submit']) !!}
                                {!! Form::close() !!}
                                <a href="{{url('results/'.$race->id).'/show'}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-stats"></span>{{Lang::get('buttons.resultsbtn')}}</a>
                            </td>

                         </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{url('races/create')}}" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-plus"></span>{{Lang::get('race_overview.createbtn')}}</a>
            </div>
        </div>
    </div>
@stop
