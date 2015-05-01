@extends('...app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-offset-4">
                    <h1 class="title">{{Lang::get('race_form.title')}}</h1>
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
                {!! Form::model($race, ['method' => 'PATCH', 'action' => ['RacesController@update', $race->id], 'class' =>'form-horizontal']) !!}
                @include('races.form',['submitBtnText' => Lang::get('race_form.savebtn'), 'iconBtn' => 'floppy-disk'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
