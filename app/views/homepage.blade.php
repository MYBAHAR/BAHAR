@extends('layouts.default')

@section('content')
	<div class="jumbotron" style="text-align: center;">
		<div class="container">
			<h1>Welcome to BAHAR!</h1>
			<p>eLearning made easy...<p>
			<p>
				<a href="/user/register" class="btn btn-primary btn-lg" data-toggle="" data-target="#signUpModal">Start learning now</a>
			</p>
			<div class="row">
				<h2></h2>
			  <div id="custom-search-input">
		      <div class="input-group col-md-12">
		        <input type="text" class="  search-query form-control" placeholder="Search for our courses..." />
		          <span class="input-group-btn">
		            <button class="btn btn-danger" type="button">
		                <span class=" glyphicon glyphicon-search"></span>
		            </button>
		          </span>
		      </div>
		    </div>
			</div>
		</div>
	</div>
@stop