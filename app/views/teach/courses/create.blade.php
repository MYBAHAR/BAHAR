@extends('layouts.default')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Create a new Course</h1>
				<hr>
				<!-- Show errors if there are any issues while creating the course -->
				@if($errors->any())
				<div class="alert alert-danger">
					{{ HTML::ul($errors->all()) }}
				</div>
				@endif

				<!-- Course adding form -->
				<form action="/teach/courses" method="post" enctype="multipart/form-data">

					<div class="form-group">
						{{ Form::label('title', 'Title') }}
						{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('description', 'Description') }}
						{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('fee', 'Fee') }}
						{{ Form::text('fee', Input::old('fee'), array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('image', 'Image') }}
						{{ Form::file('image', Input::old('image'), array('class' => 'form-control')) }}
					</div>
					<?php 
					$author_id = Auth::user()->id;
					?>
					<div class="form-group">
						{{ Form::text('author_id', $author_id, array('class' => 'hidden')) }}
					</div>
				
					{{ Form::submit('Create!', array('class' => 'btn btn-primary')) }}
				{{ Form::close() }}
				</div>
		</div>
	</div>
	<br/><br/><br/>
@stop