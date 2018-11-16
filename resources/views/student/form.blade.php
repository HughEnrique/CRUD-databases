<div class="form-row">
    <div class="form-group col-md-6">
      {!! Form::label('name','Name') !!}
      {!! Form::text('name',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('lastname','Last Name') !!}
      {!! Form::text('lastname',null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
      {!! Form::label('ci','C. I.') !!}
      {!! Form::text('ci',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
      {!! Form::label('address','Address') !!}
      {!! Form::text('address',null,['class' => 'form-control']) !!}
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      {!! Form::label('city','City') !!}
      {!! Form::text('city',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('phone','Phone') !!}
      {!! Form::text('phone',null,['class' => 'form-control']) !!}
    </div>
</div>