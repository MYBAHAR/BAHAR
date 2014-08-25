@extends('layouts.default')

@section('content')
	<!-- Introductory -->
	<div class="introductory">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">
					<h1>Elearning Made Easy!</h1>
					<p>Learning has been easier than always, hurry up don't waste the time it only takes 2 minutes to register.</p>
					<a href="/user/register" class="btn btn-primary" data-toggle="" data-target="#signUpModal">Start learning now</a>
					<p>Or Search the content for your favourite course online</p>
					<form action="#" method="POST" role="form">
						<div id="custom-search-input"> <!--I didn't get what is this for Musfafa-->
							<div class="input-group">
							  	<input type="text" class="search-query form-control" placeholder="Keyword to search">
							  	<!-- <button type="submit" class="btn btn-primary">Search</button> -->
							  	<!-- <span class="input-group-addon glyphicon glyphicon-search"></span>	 -->
							  	<span class="input-group-btn">
							        <button class="btn btn-default" type="button">Go!</button>
							    </span>
							</div>
						</div>	
					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- End Introductory -->
	
	<!-- Why BAHAR? -->
	<div class="container">
		<div class="row text-center">
			<h1 class="heading">Why BAHAR?</h1>
			<p>We have a handful of reasons for you, but BAHAR users say these</p>
			<div class="col-sm-4 top-margin">
				<i class="fa fa-group fa-2x"></i>
				<h3>World wide users</h3>
				<p>With BAHAR, you'll join a community of thousands of students and instructors</p>
			</div>
			<div class="col-sm-4 top-margin">
				<i class="fa fa-child fa-2x"></i>
				<h3>Access anywhere, anytime</h3>
				<p>Either if you are in United States or Afghanistan, it makes no difference. You have access anytime anywhere!</p>
			</div>
			<div class="col-sm-4 top-margin">
				<i class="fa fa-mobile fa-2x"></i>
				<h3>Use BAHAR on any device</h3>
				<p>Whether if you are a tablet user, mobile, iphone or PC. Don't worry BAHAR is available on all those devices</p>
			</div>
		</div>
	</div>
	<!-- End why BAHAR -->

	<!-- Featured Courses -->
	<div class="featured-courses">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h1 class="text-center heading">Featured Courses</h1>
					<p class="text-center">Courses that are developed by experts and are suggested by BAHAR</p>

					<div class="row course-holder bottom-margin">
						<div class="col-sm-4 top-margin">
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
						<div class="col-sm-4 top-margin">
							<div class="image">
								<a href="#">
									<img src="{{asset('images/courses/2.jpg')}}" title="Entreprenurship" class="img-responsive">
									<span class="price nofree">10$</span>
								</a>
							</div>
							<h4>Entreprenurship</h4>
							<p>By Murtaza Zargar</p>
							<p>March 2014</p>
						</div>
						<div class="col-sm-4 top-margin">
							<div class="image">
								<a href="#">
									<img src="{{asset('images/courses/3.jpg')}}" title="Effective time management" class="img-responsive">
									<span class="price free">Free</span>
								</a>
							</div>
							<h4>Effective time management</h4>
							<p>By Mustafa Aloko</p>
							<p>June 2014</p>
						</div>
					</div>
					<p class="text-center">
						<a href="#" class="btn btn-warning">More Courses</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End featured courses -->

	<!-- Testimonial -->
	<div class="testimonials">
		<div class="container">
			<div class="row">
			<h1 class="heading text-center">What our users say</h1>
				<div class="col-sm-8 col-sm-offset-2">
					
					<div id="mytestimonial" class="carousel slide" data-ride="carousel">
					    <ol class="carousel-indicators">
					        <li data-target="#mytestimonial" data-slide-to="0" class=""></li>
					        <li data-target="#mytestimonial" data-slide-to="1" class=""></li>
					        <li data-target="#mytestimonial" data-slide-to="2" class="active"></li>
					    </ol>
					    <div class="carousel-inner text-center">
					        <div class="item active">							                    
			                    <p><i class="fa fa-quote-left fa-lg"></i> BAHAR has extremely changed my life, without it I would never be able to reach here. I always feel indebted to BAHAR! <i class="fa fa-quote-right fa-lg"></i></p>

								<p class="text-center">
									<img src="{{asset('images/testimonials/1.jpg')}}" class="testimonials"> 
								</p>
								<p class="text-center">Maya Angelo / Harvard</p>             				
					        </div>

					        <div class="item">
					         
								<p><i class="fa fa-quote-left fa-lg"></i> It's <strong>Awesome</strong> when you've just learned your favourite course by the world's most eminent instructors! <i class="fa fa-quote-right fa-lg"></i></p>

									<p class="text-center">
										<img src="{{asset('images/testimonials/2.jpg')}}" class="testimonials"> 
									</p>
									<p class="text-center">Maria Luna / UNICEF</p>   
				     
					        </div>

					        <div class="item">

				                    <p><i class="fa fa-quote-left fa-lg"></i> My life has been great since, I first met BAHAR! <i class="fa fa-quote-right fa-lg"></i></p>

									<p class="text-center">
										<img src="{{asset('images/testimonials/3.jpg')}}" class="testimonials"> 
									</p>
									<p class="text-center">Reina Emerson / ACUC Ltd.</p>   
			
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End testimonials -->

	<!-- Partners -->
	<div class="partners">
		<div class="container">
			<div class="row text-center">
				<h1 class="heading">Our Partners</h1>
				<p>We have partnership with the world's top Institutes</p>
				<div class="col-sm-4">
					<a href="#" target="_blank">
						<img src="{{asset('images/partners/1.png')}}" title="Partner">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" target="_blank">
						<img src="{{asset('images/partners/2.png')}}" title="Partner">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" target="_blank">
						<img src="{{asset('images/partners/3.png')}}" title="Partner">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Partners End -->




@stop