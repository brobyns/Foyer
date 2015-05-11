@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                    <h1>{{Lang::get('import.title')}}</h1>
                {!! Form::open(['method' => 'POST', 'action' => ['CsvController@import'] , 'files' => true]) !!}
                    <div class="form-group">
                            {!! Form::label('file','File',array('id'=>'','class'=>'')) !!}
                            {!! Form::file('file','',array('id'=>'','class'=>'form-control btn btn-primary')) !!}
                    </div>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-open"></span> {{ Lang::get('buttons.importbtn') }}</button>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
