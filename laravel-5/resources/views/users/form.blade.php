<div class="form-group">
    {!! Form::label('firstName', Lang::get('participation_form.firstname'), ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
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
    {!! Form::label('zipCode', Lang::get('participation_form.zipcode'), ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('number', 'zipCode', null, ['class' => 'form-control', 'min' => '1000', 'max' => '9999', 'step' => '1']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('city', Lang::get('participation_form.city'), ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>
            </div>
            <div class="form-group">
                {!! Form::label('emailAddress', Lang::get('participation_form.email'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('emailAddress', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('dateOfBirth', Lang::get('participation_form.dateofbirth'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('dateOfBirth', null, ['class' => 'form-control', 'id' => 'datepicker']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('isMale', Lang::get('participation_form.sex'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::label('male', Lang::get('participation_form.male')) !!}
                    {!! Form::radio('isMale', 1, ['class' => 'form-control']) !!}
                    {!! Form::label('female', Lang::get('participation_form.female')) !!}
                    {!! Form::radio('isMale', 0, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('clubD', Lang::get('participation_form.club'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('clubD', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('valNr', Lang::get('participation_form.valnr'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::input('number', 'valNr', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('shoeBrand', Lang::get('participation_form.shoebrand'), ['class' =>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('shoeBrand', null, ['class' => 'form-control']) !!}
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