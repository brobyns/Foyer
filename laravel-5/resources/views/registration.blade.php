@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="col-md-offset-4">
            <h1 class="title">{{Lang::get('participation_form.title')}}</h1>
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
            {!! Form::open(['url' => 'users', 'class' =>'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('name', Lang::get('participation_form.firstname'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('name', Lang::get('participation_form.name'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('address', Lang::get('participation_form.address'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('zipcode', Lang::get('participation_form.zipcode'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::input('number', 'zipcode', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('emailAddress', Lang::get('participation_form.email'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::email('emailAddress', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('dateOfBirth', Lang::get('participation_form.dateofbirth'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('dateOfBirth', '', ['class' => 'form-control', 'id' => 'datepicker']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('sex', Lang::get('participation_form.sex'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::label('male', Lang::get('participation_form.male')) !!}
                    {!! Form::radio('sex', 'M', ['class' => 'form-control']) !!}
                    {!! Form::label('female', Lang::get('participation_form.female')) !!}
                    {!! Form::radio('sex', 'V', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('club', Lang::get('participation_form.club'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('club', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('valnr', Lang::get('participation_form.valnr'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::input('number', 'valnr', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
            {!! Form::label('distance', Lang::get('participation_form.distance'), ['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::label('1 km', '1 km') !!}
                {!! Form::radio('distance', '1 km', ['class' => 'form-control']) !!}
                {!! Form::label('3 km', '3 km') !!}
                {!! Form::radio('distance', '3 km', ['class' => 'form-control']) !!}
                {!! Form::label('6 km', '6 km') !!}
                {!! Form::radio('distance', '6 km', ['class' => 'form-control']) !!}
                {!! Form::label('9 km', '9 km') !!}
                {!! Form::radio('distance', '9 km', ['class' => 'form-control']) !!}
            </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    {!! Form::submit(Lang::get('participation_form.registerbtn'), ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
		{!! Form::close() !!}
		</div>
    </div>
</div>
@stop
