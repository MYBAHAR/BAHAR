@extends('layouts.default')

@section('content')
	<div class="row">
			        <div class="col-md-6 col-md-offset-3">
			        <h3 style="text-align: center">Sign Up Now</h3><hr>
			        {{ Form::open(array('url' => 'user/register', 'class' => 'form')) }}
							@if($errors->any())
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Error!</strong><br> {{ implode('', $errors->all('<li class="error">:message</li>')) }}
							</div>
							@endif			                    
							<h4></h4>
              <div class="row">
	              <div class="col-xs-6 col-md-6" style="margin-bottom: 10px">
	              	{{ Form::text('firstname','', array('class' => 'form-control input-lg', 'placeholder' => 'First Name','required')) }}
	              </div>
	              <div class="col-xs-6 col-md-6" style="margin-bottom: 10px">
	              	{{ Form::text('lastname','', array('class' => 'form-control input-lg', 'placeholder' => 'Last Name')) }}
	          		</div>
	             	<div class="col-xs-12 col-md-12" style="margin-bottom: 10px">
	              	{{ Form::email('email','', array('class' => 'form-control input-lg', 'placeholder' => 'Your Email','required')) }}
	              </div>
	              <div class="col-xs-12 col-md-12" style="margin-bottom: 10px">
	              	{{ Form::password('password', array('class' => 'form-control input-lg', 'placeholder' => 'Password','required')) }}
	              </div>
	              <div class="col-xs-12 col-md-12" style="margin-bottom: 10px">
	              	{{ Form::password('password_confirm', array('class' => 'form-control input-lg', 'placeholder' => 'Confirm Password','required')) }}			                    
	              </div>
	              <div class="col-xs-12 col-md-12" style="margin-bottom: 10px">
	              	{{ Form::submit('Create my account',array('class' => 'tn btn-lg btn-primary btn-block signup-btn')) }}
	              </div>
			          	{{ Form::close() }}          
			         </div>
			</div>            
			</div>
	      </div>
	      <br/><br/><br/>
@stop