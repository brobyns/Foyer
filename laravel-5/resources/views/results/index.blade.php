@extends('...app')
 <div class="col-md-offset-10">
    <a href="{{url('/csv/export/results')}}" class="btn btn-sm btn-dark"><span class="glyphicon glyphicon-floppy-save"></span> {{Lang::get('buttons.exportbtn')}}</a>
 </div>
 <br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-offset-4">
                    <h1 class="title">{{Lang::get('results_show.title') . $race->nameOfTheRace }}</h1>
                </div>
                <br>
               @include('table', ['users' => $users, 'race' => $race])
            </div>
        </div>
    </div>
@stop