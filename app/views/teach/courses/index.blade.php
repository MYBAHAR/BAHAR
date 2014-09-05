@extends('layouts.default')

@section('content')
	<div class="container">
    <h3>Courses</h3>
    <hr>
    <p>You can add and maitain your courses here.
    <span class="pull-right"><a class="btn btn-default" href="/teach/courses/create"><i class="fa fa-plus"></i> Create a new Course</a></span>
    </p>
    <!-- will be used to show any messages -->
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Courses</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Title" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Description" disabled></th>
                        <th><input type="text" class="form-control" placeholder="No of Students" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Fee" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Published" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Created At" disabled></th>
                    		<th><input type="text" class="form-control" placeholder="Action" disabled></th>
                    </tr>
                </thead>
                <tbody>
                <?php $count = 1; ?>
                		@foreach($courses as $key => $course)
	                    <tr>
	                    	<td>{{ $count }}</td> 
	                    	<td><a href="{{ URL::to('/teach/courses/' . $course->id) }}">{{ $course->title }}</a></td>
	                    	<td>{{ $course->description }}</td>
	                    	<td>Test 1</td>
	                    	<td>{{ $course->fee }}</td>
	                    	<td>{{ $course->isPublished }}</td>
	                    	<td>{{ date('d/M/Y', strtotime($course->created_at)) }}</td>    
	                    	<td>
	                    		<!-- Delete the course link -->
	                    		<a href="{{ URL::to('/teach/' . $course->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
	                    	</td>
	                    </tr>
	                    <?php $count++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop