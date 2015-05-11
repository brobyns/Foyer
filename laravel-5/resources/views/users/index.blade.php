@extends('...app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('flash::message')
                <div class="col-md-offset-4">
                    <h1 class="title">{{Lang::get('user_overview.title')}}</h1>
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
                <div class="col-md-offset-10">
                    <a href="{{url('csv/export/users')}}" class="btn btn-sm btn-dark"><span class="glyphicon glyphicon-floppy-save"></span> {{Lang::get('buttons.exportbtn')}}</a>
                </div>
                <br>
                <table id="myTable" class="table table-striped table-bordered table-responsive tablesorter">
                    <thead>
                    <tr>
                        <th>{{Lang::get('users.firstname')}}</th>
                        <th>{{Lang::get('users.name')}}</th>
                        <th>{{Lang::get('users.email')}}</th>
                        <th>{{Lang::get('users.address')}}</th>
                        <th class="sorter-ddmmyy">{{Lang::get('users.dateofbirth')}}</th>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{ $user->firstName }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->emailAddress }}</td>
                            <td>{{ $user->address . ' ' . $user->zipCode . ' ' . $user->city}}</td>
                            <td>{{Carbon\Carbon::createFromFormat('d/m/Y',$user->dateOfBirth)->format('d/m/Y') . ' (' . Carbon\Carbon::createFromFormat('d/m/Y', $user->dateOfBirth)->diffInYears(Carbon\Carbon::now()) . ')'}}</td>
                            <td>
                                <div class="form-group">
                                    <a href="{{url('users/'.$user->id).'/edit'}}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-wrench"></span>{{Lang::get('buttons.editbtn')}}</a>
                                </div>
                                {!! Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                    {!! Form::button('<span class="glyphicon glyphicon-trash"></span>' . Lang::get("buttons.deletebtn"), ['class'=>'btn btn-danger btn-sm', 'type'=>'submit']) !!}
                                {!! Form::close() !!}

                                <a href="{{url('participations/'.$user->id).'/show'}}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-list-alt"></span>{{Lang::get('buttons.showparticipationsbtn')}}</a>

                            </td>

                         </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{url('users/create')}}" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-plus"></span>{{Lang::get('user_overview.createbtn')}}</a>
            </div>
        </div>
    </div>
@stop
