@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="col-md-offset-4">
            <h1 class="title">{{Lang::get('user_edit.title')}}</h1>
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
            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id], 'class' =>'form-horizontal']) !!}
            @include('users.form',['submitBtnText' => Lang::get('buttons.savebtn'), 'iconBtn' => 'ok', 'races' => $races, 'user' => $user])
		{!! Form::close() !!}
		</div>
    </div>
</div>
@stop


