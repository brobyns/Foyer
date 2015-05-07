@extends('...app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-offset-4">
                    <h1 class="title">{{Lang::get('results_show.title') . $race->nameOfTheRace }}</h1>
                </div>
                <br>
               @include('results.form', ['users' => $users])
            </div>
        </div>
    </div>
@stop