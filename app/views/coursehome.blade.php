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
	
	<style type="text/css">
		.icons {
			width:30px;display:inline-block;margin-right:10px;margin: 10px 0px;
		}
		.fixed-menu a {color: black;opacity: 0.6;text-decoration: none;}
		.fixed-menu a:hover {color: black;opacity: 1;}
	</style>
</head>
<body>
	<!-- Menubar -->
	<div class="fixed-menu" style="position:fixed;top:20%;left:20px;z-index:9999;">
		<a href="#">
			<span class="icons"><i class="fa fa-home fa-lg"></i></span> Home
		</a><br/>
		<a href="#">
			<span class="icons"><i class="fa fa-bullhorn fa-lg"></i></span> Announcements
		</a><br/>
		<a href="#">
			<span class="icons"><i class="fa fa-bell fa-lg"></i></span> Lessons
		</a><br/>
		<a href="#">
			<span class="icons"><i class="fa fa-globe fa-lg"></i></span> Resources
		</a><br/>
		<a href="#">
			<span class="icons"><i class="fa fa-comments fa-lg"></i></span> Discussion
		</a><br/>
		<a href="#">
			<span class="icons"><i class="fa fa-graduation-cap fa-lg"></i></span> Certificate
		</a><br/>
		<a href="#">
			<span class="icons"><i class="fa fa-cloud-download fa-lg"></i></span> Download
		</a><br/>
		<a href="#">
			<span class="icons"><i class="fa fa-users fa-lg"></i></span> Students
		</a>
	</div>
	<!-- Menubar End -->

	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-right">
				<img src="{{asset('images/courses/course-01/header.png')}}" alt="HTML5 & CSS3" title="HTML5 & CSS3">
			</div>

			<div class="col-sm-6">
				<h1>Fundamentals of Computer Programing</h1>
				<p>This course is intended to make you familiar with the basics of computer programing. It goes throught the Security risks that a program might face with and shows you have to remove those security attacks.</p>
				<p><strong>By:</strong> Hamid Reza Sepehr</p>
				<a href="" class="btn btn-warning">Start Now</a>
			</div>
		</div>
		<hr/>
		<div class="row">
			<h3 class="text-center">This course contains:</h3>
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
						<li>What is a PROGRAM?</li>
						<li>10 reasons you should learn it</li>
						<li>What is a compiler?</li>
						<li>Interpretors</li>
					</ul>
				</p>
				<br/>
				<p class="lead">
					<i class="fa fa-long-arrow-right"></i>
					Chapter 2: Get Started
				</p>
				<p>
					<ul style="list-style-type:none">
						<li>Start Coding</li>
						<li>Programing Languages</li>
						<li>Java</li>
						<li>PHP</li>
						<li>Phyton</li>
					</ul>
				</p>
				<br/>
				<p class="lead">
					<i class="fa fa-long-arrow-right"></i>
					Chapter 3: Security
				</p>
				<p>
					<ul style="list-style-type:none">
						<li>Vulnerabalities and Security</li>
						<li>3 step methode</li>
						<li>Give less info</li>
						<li>Whitelisting</li>
					</ul>
				</p>
			</div>
		</div>

		<hr />

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h1>About the Author:</h1>
				<img src="{{asset('images/courses/course-01/author.png')}}" class="pull-left" style="width:150px;padding-right:2em;">
				<p class="lead">Hamid Reza Sepehr</p>
				<p>BAHAR Organization</p>
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