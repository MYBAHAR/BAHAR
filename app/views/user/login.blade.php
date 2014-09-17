@extends('layouts.default')

@section('content')

<div class="container">
    

    <div class="omb_login">
    	<h3 class="omb_authTitle">Login</h3>
		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-6 col-sm-3">
		        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook visible-xs"></i>
			        <span class="hidden-xs">Login with Facebook</span>
		        </a>
	        </div>	
        	<div class="col-xs-6 col-sm-3">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs">Login with Google</span>
		        </a>
	        </div>	
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>
		{{ Form::open(array('url' => 'user/login')) }}
		@if($errors->any())
		<div class="alert alert-danger col-md-6 col-md-offset-3">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Error!</strong><br> {{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</div>
		@endif
		@if(Session::has('message'))
		<div class="alert alert-danger col-md-6 col-md-offset-3">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			{{ Session::get('message') }}
		</div>
		@endif
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						{{ Form::email('email', '', array('Placeholder' => 'Email address', 'class' => 'form-control','required')) }}
					</div>
					<span class="help-block"></span>
										
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						{{ Form::Password('password', array('Placeholder' => 'Password', 'class' => 'form-control','required')) }}
					</div><br>
					{{ Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')) }}
				</form>
			</div>
    	</div>
    {{ Form::close() }}
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">Remember Me
				</label>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					<a href="#">Forgot password?</a>
				</p>
			</div>
		</div>	    	
	</div>



        </div>
@stop