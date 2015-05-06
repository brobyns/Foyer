<div class="form-group">
    {!! Form::label('nameOfTheRace', Lang::get('race_form.nameOfTheRace'), ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nameOfTheRace', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('firstRaceNumber', Lang::get('race_form.firstRaceNumber'), ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('firstRaceNumber', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('distance', Lang::get('race_form.distance'), ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('number', 'distance', null, ['class' => 'form-control', 'min' => '0']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class='btn btn-primary btn-success'><span class='glyphicon glyphicon-{{$iconBtn}}'></span>{{$submitBtnText}}</button>
        <a href="{{url('races')}}" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-ban-circle"></span> {{Lang::get('race_form.cancelbtn')}}</a>
    </div>
</div>