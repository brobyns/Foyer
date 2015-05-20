@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{Lang::get('contact.title')}}</div>

				<div class="panel-body">
					{!! Form::open(['method' => 'POST', 'class' =>'form-horizontal', 'id' => 'timeform']) !!}
                    <div class="form-group">
                        {!! Form::label('shoe Brand', 'Tijdregistratie', ['class' =>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('userid', null, ['class' => 'form-control', 'id' => 'userid', 'autofocus']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
    <table id="myTable" class="table table-striped table-bordered table-responsive tablesorter">
        <thead>
            <tr>
                <th>{{Lang::get('races.nameOfTheRace')}}</th>
                <th>{{Lang::get('races.firstRaceNumber')}}</th>
                <th>{{Lang::get('races.distance')}}</th>
                <th>{{Lang::get('race_overview.numberparticipants')}}</th>
                <th>{{Lang::get('races.startTime')}}</th>
                <td><b>{{Lang::get('races.status')}}</b></td>
                <td></td>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach($races as $key => $race)
                <tr>
                    <td>{{ $race->nameOfTheRace }}</td>
                    <td>{{ $race->firstRaceNumber }}</td>
                    <td>{{ $race->distance }}</td>
                    <td>{{ count($race->participations) }}</td>
                    <td id={{"startTime" . $key}}>{{ Carbon\Carbon::createFromFormat("Y-m-d H:i:s",$race->startTime) }}</td>
                    <td id={{"timeDiff" . $key}}></td>
                    <td>
                        {!! Form::open(['action' => ['RacesController@start', $race->id], 'method' => 'patch', 'style' => 'display:inline']) !!}
                        {!! Form::button('<span class="glyphicon glyphicon-play"></span>' . Lang::get('buttons.startbtn'), ['class'=>'btn btn-primary btn-sm', 'type'=>'submit']) !!}
                        {!! Form::close() !!}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    {!! Html::script('/javascript/jquery.tablesorter.js') !!}
    {!! Html::script('/javascript/countup.js') !!}
    {!! Html::script('/javascript/registertimeAjax.js')!!}
@endsection