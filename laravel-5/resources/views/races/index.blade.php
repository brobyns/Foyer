@extends('...app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                    <tr>
                        <td>{{Lang::get('race_overview.nameOfTheRace')}}</td>
                        <td>{{Lang::get('race_overview.firstRaceNumber')}}</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($races as $key => $race)
                        <tr>
                            <td>{{ $race->nameOfTheRace }}</td>
                            <td>{{ $race->firstRaceNumber }}</td>
                            <td>
                                <a href="{{url('races/'.$race->id).'/edit'}}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-wrench"></span>{{Lang::get('buttons.editbtn')}}</a>

                                {!! Form::open(['action' => ['RacesController@destroy', $race->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                    {!! Form::button('<span class="glyphicon glyphicon-trash"></span>' . Lang::get('buttons.deletebtn'), ['class'=>'btn btn-danger btn-sm', 'type'=>'submit']) !!}
                                {!! Form::close() !!}
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
