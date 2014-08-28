<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Course Homepage</title>

	{{HTML::style('css/bootstrap.min.css')}}

	<!-- Font Awesome -->
	{{ HTML::style('font-awesome/css/font-awesome.min.css'); }}

	<!-- Custom CSS -->
	<!-- {{ HTML::style('css/custom.css'); }} -->

	<!-- Google Fonts -->
	{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Slab:700'); }}

</head>
<body>
	<!-- Menubar -->

	<!-- Menubar End -->

	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-right">
				<img src="{{asset('images/courses/course-01/header.png')}}" alt="HTML5 & CSS3" title="HTML5 & CSS3">
			</div>

			<div class="col-sm-6">
				<h1>HTML5 & CSS3</h1>
				<p>Fundamentals of HTML5 mark up language and CSS3 cascading style sheet</p>
				<a href="" class="btn btn-warning">Start Now</a>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 text-center">
				<span style="display:inline-block;margin:0px 1em;">
					<i class="fa fa-caret-square-o-right fa-3x"></i>
					<p>23</p>
				</span>
				<span style="display:inline-block;margin:0px 1em;">
					<i class="fa fa-edit fa-3x"></i>
					<p>24</p>
				</span>
				<span style="display:inline-block;margin:0px 1em;">
					<i class="fa fa-check-square fa-3x"></i>
					<p>24</p>
				</span>
			</div>
		</div>

		<div class="row">
			<h1 class="text-center">Course Curriculumn</h1>
			<div class="col-sm-8 col-sm-offset-2 text-center">
				<p class="lead">
					<i class="fa fa-long-arrow-right"></i>
					Chapter 1: The Basics
				</p>
				<p>
					<ul style="list-style-type:none">
						<li>What is CSS?</li>
						<li>CSS3</li>
						<li>What is HTML?</li>
						<li>HTML5</li>
					</ul>
				</p>
				<br/>
				<p class="lead">
					<i class="fa fa-long-arrow-right"></i>
					Chapter 2: Get Started
				</p>
				<p>
					<ul style="list-style-type:none">
						<li>Start Coding HTML</li>
						<li>Using CSS to style the elements</li>
					</ul>
				</p>
				<br/>
				<p class="lead">
					<i class="fa fa-long-arrow-right"></i>
					Chapter 3: Security
				</p>
				<p>
					<ul style="list-style-type:none">
						<li>HTML5 and Security</li>
						<li>Using proper styles</li>
						<li>Vulnerabalities</li>
						<li>Troubleshooting</li>
					</ul>
				</p>
			</div>
		</div>

		<hr />

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h1>About the Author:</h1>
				<img src="{{asset('images/courses/course-01/author.png')}}" class="pull-left" style="width:150px;padding-right:2em;">
				<p class="lead">Mark Zuckerberg</p>
				<p>Facebook</p>
				<a href="#" class="btn btn-success btn-sm">More</a>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
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