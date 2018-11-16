<div class="form-group">
      {!! Form::label('name','Name') !!}
      {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
      {!! Form::label('description','Description') !!}
      {!! Form::textarea('description',null,['class' => 'form-control']) !!}
</div>
<div>
	  <label for="">Teacher's photo</label>
	  <input type="file" name="avatar">
</div>