@extends('layouts.default')

@section('content')
	
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-6 col-sm-offset-3">
				<h1 class="heading">Browse All Courses</h1>
				<p>Here are all the courses that BAHAR provides for you</p>

				<form action="#" method="POST" role="form">
				
					<div class="input-group">
					  	<span class="input-group-addon"><i class="fa fa-search"></i></span>
					  	<input type="text" class="form-control" placeholder="Search">
					</div>
				
					
				</form>
			</div>
		</div>

		<div class="row top-margin">
			<div class="col-sm-3 browse">
				<p class="lead text-center">Browse Courses</p>
				<div class="form-group">
					<label for="all">All</label>
					<input type="checkbox" id="all" name="all" checked="checked" class="pull-right">
				</div>
				
				<div class="form-group">
					<label for="priced">Priced</label>
					<input type="checkbox" id="priced" name="priced" class="pull-right">
				</div>
				
				<div class="form-group">
					<label for="free">Free</label>
					<input type="checkbox" id="free" name="free" class="pull-right">
				</div>

				<p class="lead text-center">Category</p>

				<div class="form-group">
					<label for="art">Art</label>
					<input type="checkbox" id="art" name="art" class="pull-right">
				</div>

				<div class="form-group">
					<label for="medical">Medical</label>
					<input type="checkbox" id="medical" name="medical" class="pull-right">
				</div>

				<div class="form-group">
					<label for="social">Social</label>
					<input type="checkbox" id="social" name="social" class="pull-right">
				</div>

				<div class="form-group">
					<label for="toefl">TOEFL</label>
					<input type="checkbox" id="toefl" name="toefl" class="pull-right">
				</div>

				<div class="form-group">
					<label for="ielts">IELTS</label>
					<input type="checkbox" id="ielts" name="ielts" class="pull-right">
				</div>

				<div class="form-group">
					<label for="science">Science</label>
					<input type="checkbox" id="science" name="science" class="pull-right">
				</div>

				<div class="form-group">
					<label for="spanish">Spanish</label>
					<input type="checkbox" id="spanish" name="spanish" class="pull-right">
				</div>

				<div class="form-group">
					<label for="farsi">Farsi</label>
					<input type="checkbox" id="farsi" name="farsi" class="pull-right">
				</div>

				<div class="form-group">
					<label for="technology">Technology</label>
					<input type="checkbox" id="technology" name="technology" class="pull-right">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="image">
					<a href="#">
						<img src="{{asset('images/courses/1.jpg')}}" title="Principles of computer programing" class="img-responsive">
						<span class="price free">Free</span>
					</a>
				</div>
				<h4>Principles of computer programing</h4>
				<p>By Hamid Reza Sepehr</p>
				<p>August 2014</p>
			<br/>
				<div class="image">
					<a href="#">
						<img src="{{asset('images/courses/3.jpg')}}" title="Principles of computer programing" class="img-responsive">
						<span class="price free">Free</span>
					</a>
				</div>
				<h4>Principles of computer programing</h4>
				<p>By Hamid Reza Sepehr</p>
				<p>August 2014</p>
			</div>
			<div class="col-sm-3">
				<div class="image">
					<a href="#">
						<img src="{{asset('images/courses/2.jpg')}}" title="Principles of computer programing" class="img-responsive">
						<span class="price free">Free</span>
					</a>
				</div>
				<h4>Principles of computer programing</h4>
				<p>By Hamid Reza Sepehr</p>
				<p>August 2014</p>
			<br/>
				<div class="image">
					<a href="#">
						<img src="{{asset('images/courses/1.jpg')}}" title="Principles of computer programing" class="img-responsive">
						<span class="price free">Free</span>
					</a>
				</div>
				<h4>Principles of computer programing</h4>
				<p>By Hamid Reza Sepehr</p>
				<p>August 2014</p>
			</div>
			<div class="col-sm-3">
				<div class="image">
					<a href="#">
						<img src="{{asset('images/courses/3.jpg')}}" title="Principles of computer programing" class="img-responsive">
						<span class="price free">Free</span>
					</a>
				</div>
				<h4>Principles of computer programing</h4>
				<p>By Hamid Reza Sepehr</p>
				<p>August 2014</p>
			<br/>
				<div class="image">
					<a href="#">
						<img src="{{asset('images/courses/2.jpg')}}" title="Principles of computer programing" class="img-responsive">
						<span class="price free">Free</span>
					</a>
				</div>
				<h4>Principles of computer programing</h4>
				<p>By Hamid Reza Sepehr</p>
				<p>August 2014</p>
			</div>
		</div>


		<div class="row text-center">
			<div class="col-sm-9 col-sm-offset-3">
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>

@stop

