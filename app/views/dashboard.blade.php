<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>

	{{HTML::style('css/bootstrap.min.css')}}

	<!-- Font Awesome -->
	{{ HTML::style('font-awesome/css/font-awesome.min.css'); }}

	<!-- Custom CSS -->
	<!-- {{ HTML::style('css/custom.css'); }} -->

	<!-- Google Fonts -->
	{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Slab:700'); }}

</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">BAHAR</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<i class="fa fa-user fa-3x" style="color:white;"></i>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="display:inline-block;"> Hamid Reza Sepehr <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><i class="fa fa-check"></i><a href="#">Manage Courses</a></li>
						<li><i class="fa fa-folder-open"></i><a href="#">Profile</a></li>
						<li><i class="fa fa-gears"></i><a href="#">Settings</a></li>
						<li><i class="fa fa-graduation-cap"></i><a href="#">Certificates</a></li>
						<li><i class="fa fa-sign-out"></i><a href="#">Sign out</a></li>
					</ul>

					
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<div class="container">
		<div class="row">
			<h2>Course dashboard</h2>
			
			<p class="lead">
			<i class="fa fa-list-ul"></i> View: 
			<a href="#" class="btn btn-success">All</a>
			<a href="#" class="btn btn-success">Completed</a>
			<a href="#" class="btn btn-success">Not Started</a>
			</p>
			<!-- First Row -->
			<div class="row">
				<div class="col-sm-3">
					<a href="#"><img src="{{asset('images/courses/1.jpg')}}" class="img-responsive"></a>
				</div>
				<div class="col-sm-4">
					<h4>Fundamentals of Computer Programing</h4>
					<p><srtong>By:</srtong> Hamid Reza Sepehr</p>
					<p><srtong>Enroll Date:</srtong> August 13 2014</p>
					<a href="#">Abotu course</a>
					<br/>
					<a href="#" class="btn btn-warning">Go to class</a>
				</div>
				<div class="col-sm-5 text-right">
					<p><a href="#">32 Lectures</a></p>
					<p><a href="#">15 Quizes</a></p>
					<p><a href="#">10 Assignments</a></p>
					<br/><br/>
					
					<div class="progress" style="height:20px;">
  						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    						<span class="sr-only">60% Complete</span>
  						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->
			<hr/>
			<!-- Second Row -->
			<div class="row">
				<div class="col-sm-3">
					<a href="#"><img src="{{asset('images/courses/2.jpg')}}" class="img-responsive"></a>
				</div>
				<div class="col-sm-4">
					<h4>Fundamentals of Computer Programing</h4>
					<p><srtong>By:</srtong> Hamid Reza Sepehr</p>
					<p><srtong>Enroll Date:</srtong> August 13 2014</p>
					<a href="#">Abotu course</a>
					<br/>
					<a href="#" class="btn btn-warning">Go to class</a>
				</div>
				<div class="col-sm-5 text-right">
					<p><a href="#">32 Lectures</a></p>
					<p><a href="#">15 Quizes</a></p>
					<p><a href="#">10 Assignments</a></p>
					<br/><br/>
					
					<div class="progress" style="height:20px;">
  						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    						<span class="sr-only">60% Complete</span>
  						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->
			<hr/>
			<!-- Third Row -->
			<div class="row">
				<div class="col-sm-3">
					<a href="#"><img src="{{asset('images/courses/3.jpg')}}" class="img-responsive"></a>
				</div>
				<div class="col-sm-4">
					<h4>Fundamentals of Computer Programing</h4>
					<p><srtong>By:</srtong> Hamid Reza Sepehr</p>
					<p><srtong>Enroll Date:</srtong> August 13 2014</p>
					<a href="#">Abotu course</a>
					<br/>
					<a href="#" class="btn btn-warning">Go to class</a>
				</div>
				<div class="col-sm-5 text-right">
					<p><a href="#">32 Lectures</a></p>
					<p><a href="#">15 Quizes</a></p>
					<p><a href="#">10 Assignments</a></p>
					<br/><br/>
					
					<div class="progress" style="height:20px;">
  						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    						<span class="sr-only">60% Complete</span>
  						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('js/bootstrap.min.js'); }}

    <!-- Smoothscroll -->
    {{HTML::script('js/smoothscroll.js');}}
</body>
</html>