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
</div>
@endsection
