@extends('...app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-offset-4">
                    <h1 class="title">{{Lang::get('participation_show.title') . $user->firstName . ' ' . $user->name}}</h1>
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
                        <th>{{Lang::get('participations.year')}}</th>
                        <th>{{Lang::get('participations.racenumber')}}</th>
                        <th>{{Lang::get('participations.chipnumber')}}</th>
                        <th>{{Lang::get('participations.time')}}</th>
                        <th>{{Lang::get('participations.distance')}}</th>
                        <th>{{Lang::get('participation_show.race')}}</th>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($participations as $participation)
                        <tr>
                            <td>{{ $participation->year }}</td>
                            <td>{{ $participation->raceNumber }}</td>
                            <td>{{ $participation->chipNumber }}</td>
                            <td>{{ $participation->time  }}</td>
                            <td>{{ $participation->race->distance  }}</td>
                            <td>
                                <a href="{{url('races/'.$participation->race->id).'/edit'}}">{{ $participation->race->nameOfTheRace }}</a>
                            </td>
                            <td>
                                <div class="form-group">
                                    <a href="{{url('participations/'.$participation->id).'/edit'}}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-wrench"></span>{{Lang::get('buttons.editbtn')}}</a>
                                </div>
                                
                            </td>

                         </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{url('/users')}}" class="btn btn-lg btn-primary"></span>{{Lang::get('buttons.useroverviewbtn')}}</a>
            </div>
        </div>
    </div>
@stop