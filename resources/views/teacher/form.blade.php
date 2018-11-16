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
				{!! Form::label('address','Address') !!}
		    	{!! Form::text('address',null,['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('area','Area') !!}
		    	{!! Form::text('area',null,['class' => 'form-control']) !!}
			</div>
			<div class="form-row">
			    <div class="form-group col-md-6">
			      {!! Form::label('city','City') !!}
		    	  {!! Form::text('city',null,['class' => 'form-control']) !!}	
			    </div>
			    <div class="form-group col-md-2">
			      {!! Form::label('phone','Phone') !!}
		    	  {!! Form::text('phone',null,['class' => 'form-control']) !!}
			    </div>
			</div>
			<fieldset class="form-group">
			    <div class="row">
			      <legend class="col-form-label col-sm-2 pt-0">Sex</legend>
			      <div class="col-sm-10">
			        <div class="form-check">
			          {!! Form::radio('radio','feminine') !!}
			          {!! Form::label('feminine','Feminine') !!}
			        </div>
			        <div class="form-check">
			          {!! Form::radio('radio','masculine') !!}
			          {!! Form::label('masculine','Masculine') !!}
			        </div>
			        <div class="form-check">
			          {!! Form::radio('radio','nobinary') !!}
			          {!! Form::label('nobinary','No Binary') !!}
			        </div>
			      </div>
			    </div>
			</fieldset>
			<div>
			  	<label for="">Teacher's photo</label>
			  	<input type="file" name="avatar">
			</div>