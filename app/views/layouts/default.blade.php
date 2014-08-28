<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAHAR | Elearning Made Easy</title>

    <!-- Bootstrap -->
		{{ HTML::style('css/bootstrap.min.css'); }}

		<!-- Font Awesome -->
		{{ HTML::style('font-awesome/css/font-awesome.min.css'); }}

		<!-- Bootsnip CSS -->
		{{ HTML::style('css/bootsnip.css'); }}

		<!-- Custom CSS -->
		{{ HTML::style('css/custom.css'); }}

		<!-- Google Fonts -->
		{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Slab:700'); }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<!-- Image holder -->
	<div class="top-image">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<!-- Carousel Start -->
					<div id="intro-carousel" class="carousel slide" data-ride="carousel">
					    <div class="carousel-inner text-center">
					        <div class="item active">
					            <i class="fa fa-2x fa-road"></i>
			                    <h1>Take a course</h1>
			                    <p>Feel free to browse through our wide range of courses and find your favourite course.</p>
			                    <p><a class="btn btn-primary" href="#" role="button">Learn More</a></p>
					        </div>
					        <div class="item">
					            <i class="fa fa-2x fa-graduation-cap"></i>	                
			                    <h1>Graduate</h1>
			                    <p>After finishing your course, you'll receive a test. Based apon your scores in the exam you'll receive a certificate showing that you've successfully finished the course.</p>
			                    <p><a class="btn btn-primary" href="#" role="button">Learn more</a></p>
					        </div>
					        <div class="item">
					            <i class="fa fa-2x fa-briefcase"></i>
			                    <h1>Find a job</h1>
			                    <p>Our courses are thought by the best and most exprienced instructors around the world. Thus after graduating from our courses you'd have enough knowledge and skills to easily be hired!</p>
			                    <p><a class="btn btn-primary" href="#" role="button">Learn More</a></p>
					        </div>
					    </div>
					    <a class="left carousel-control" href="#intro-carousel" data-slide="prev"><i class="fa fa-long-arrow-left car-arrow"></i></a>
					    <a class="right carousel-control" href="#intro-carousel" data-slide="next"><i class="fa fa-long-arrow-right car-arrow"></i></a>
					</div>
					<!-- Carousel End -->
				</div>
			</div>
		</div>
	</div>

	
	<!-- Menubar -->
	<div class="menubar">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-chevron-down"></span> 
					<a id="menu">Courses</a>
					
					<div class="dropdown" title="Change Language">
					  	<button class="btn dropdown-toggle transparent" type="button" id="dropdownMenu1" data-toggle="dropdown">
					  	<span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;
					    En&nbsp;&nbsp;
					    <span class="caret"></span>
					  	</button>
					  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					    	<li role="presentation"><a role="menuitem" href="#">Dari</a></li>
					    	<li role="presentation"><a role="menuitem" href="#">Spanish</a></li>
					  	</ul>
					</div>		
				</div>
				<div class="col-sm-4 text-center">
					<h1><i class="fa fa-leaf logo"></i> BAHAR</h1>
				</div>
				<div class="col-sm-4 text-right">
					<a href="#">How it works?</a>
					<a class="btn transparent" data-toggle="modal" href='#modal-in'>Sign in / Sign up</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Menubar -->
	
    
    
	<nav class="navbar" role="navigation">
	<div class="container">
    	<a class="navbar-brand" href="/">BAHAR</a>
    	<ul class="nav navbar-nav">
    		<li class="">
    			<a href="#">Teach</a>
    		</li>
    		<li>
    			<a href="#">About</a>
    		</li>
    	</ul>
    	<ul class="nav navbar-nav pull-right">
    		@if(!Auth::user())
    		<li>
    			<a href="/user/register" data-toggle="" data-target="#signUpModal"><i class="fa fa-user"></i> Sign Up</a>
    		</li>
    		<li>
    			<a href="/user/login"><i class="fa fa-sign-in"></i> Login</a>
    		</li>
    		@else
		      <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <span class="glyphicon glyphicon-user"></span> 
		              <strong>Welcome</strong>
		              <span class="glyphicon glyphicon-chevron-down"></span>
		          </a>
		          <ul class="dropdown-menu user-login-dropdown">
		              <li>
		                  <div class="navbar-login">
		                      <div class="row">
		                          <div class="col-lg-4">
		                              <p class="text-center">
		                                  <span class="glyphicon glyphicon-user icon-size"></span>
		                              </p>
		                          </div>
		                          <div class="col-lg-8">
		                              <p class="text-left"><strong>Nombre Apellido</strong></p>
		                              <p class="text-left small">correoElectronico@email.com</p>
		                              <p class="text-left">
		                                  <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
		                              </p>
		                          </div>
		                      </div>
		                  </div>
		              </li>
		              <li class="divider"></li>
		              <li>
		                  <div class="navbar-login navbar-login-session">
		                      <div class="row">
		                          <div class="col-lg-12">
		                              <p>
		                                  <a href="/user/logout" class="btn btn-danger btn-block"><i class="fa fa-sign-out"></i> Logout</a>
		                              </p>
		                          </div>
		                      </div>
		                  </div>
		              </li>
		          </ul>
		      </li>
		      @endif
    	</ul>
    </div>
	</nav>
    

    
    @yield('content')
  	
  	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">
					<p class="lead">Follwo Us</p>
					<i class="fa social fa-facebook"></i>
					<i class="fa social fa-twitter"></i>
					<i class="fa social fa-google-plus"></i>
					<i class="fa social fa-youtube"></i>

					<div class="row text-left top-margin">
						<div class="col-sm-4">
							<h4>BAHAR</h4>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact us</a></li>
								<li><a href="#">Careers</a></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<h4>Contribure</h4>
							<ul>
								<li><a href="#">Teach</a></li>
								<li><a href="#">Suggest courses</a></li>
								<li><a href="#">Partners</a></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<h4>Contribute</h4>
							<ul>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Meetups</a></li>
								<li><a href="#">News & Media</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr style="background-color:black;height:1px" />
			<div class="row">
				<div class="col-sm-6">
				<p>
					<a href="#">Privacy Policy</a> |
					<a href="#">Terms</a> |
					<a href="#">Help</a> |
				</p>
				</div>
				<div class="col-sm-6 text-right">				
				<p>
					&copy; Copyright 2014- BAHAR Organization <br/>
					All Rights Reserved
				</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->

  	<!-- Modal-Hamid -->
	<div class="modal fade" id="modal-in">	
		<div class="modal-dialog">
			<div class="tabbable">
			  	<ul class="nav nav-tabs">
			    	<li class="active text-center"><a href="#tab1" data-toggle="tab">Sign in</a></li>
			    	<li class="text-center"><a href="#tab2" data-toggle="tab">Sign up</a></li>
			  	</ul>
			  	<div class="tab-content">
			    	<div class="tab-pane active" id="tab1">
			      		<div class="modal-content">
							<div class="modal-body">
								<form action="#" method="POST" role="form">							
									<div class="form-group">
										<div class="input-group">
										  	<span class="input-group-addon glyphicon glyphicon-user"></span>
										  	<input type="text" class="form-control" placeholder="Username" name="uname" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
										  	<span class="input-group-addon glyphicon glyphicon-lock"></span>
										  	<input type="password" class="form-control" placeholder="Password" name="password" required>
										</div>
									</div>
									<div class="form-group">
										<div class="checkbox">
									  		<label>
									  			<input type="checkbox" value="remember" name="remember" >
									  			Remember me
									  		</label>
									  	</div>
									</div>
									<button type="submit" class="btn btn-primary">Sign in</button><br/>
									<a href="#">forgot your password?</a>
								</form>
							</div>
						</div><!-- /.modal-content -->
			    	</div>
			    	<div class="tab-pane" id="tab2">
			    		<div class="modal-content">
							<div class="modal-body">
								<form action="#" method="POST" role="form">							
									<div class="form-group">
										<div class="input-group">
										  	<span class="input-group-addon glyphicon glyphicon-user"></span>
										  	<input type="text" class="form-control" placeholder="Name" name="name" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
										  	<span class="input-group-addon glyphicon glyphicon-envelope"></span>
										  	<input type="email" class="form-control" placeholder="Email" name="email" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
										  	<span class="input-group-addon glyphicon glyphicon-lock"></span>
										  	<input type="password" class="form-control" placeholder="Password" name="password" required>
										</div>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="agree" name="agree" checked="checked">
											I agree to the <a href="#">Terms</a>
										</label>
									</div>
									<button type="submit" class="btn btn-primary">Create Account</button>
								</form>
							</div>
						</div><!-- /.modal-content -->
			    	</div>
			  	</div>
			</div>
					
		</div>
	</div>
	<!-- End modal-Hamid -->

  	<!-- Modals on this page -->
	<!-- Sign Up modal -->

	<!-- Modal -->
	<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">       
	      <div class="modal-body">
				  <div class="row">
			        <div class="col-md-8 col-md-offset-2">
			            <form style="padding: 10px;" action="r" method="post" accept-charset="utf-8" class="form" role="form">   <legend style="text-align:center">Sign Up Now!</legend>
			                    <h4></h4>
			                    <div class="row">
			                        <div class="col-xs-6 col-md-6">
			                            <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"  />                        </div>
			                        <div class="col-xs-6 col-md-6">
			                            <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  />                        </div>
			                    </div>
			                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  /><input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  /><input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"  />                    <label>Birth Date</label>                    <div class="row">
			                        <div class="col-xs-4 col-md-4">
			                            <select name="month" class = "form-control input-lg">
			<option value="01">Jan</option>
			<option value="02">Feb</option>
			<option value="03">Mar</option>
			<option value="04">Apr</option>
			<option value="05">May</option>
			<option value="06">Jun</option>
			<option value="07">Jul</option>
			<option value="08">Aug</option>
			<option value="09">Sep</option>
			<option value="10">Oct</option>
			<option value="11">Nov</option>
			<option value="12">Dec</option>
			</select>                        </div>
			                        <div class="col-xs-4 col-md-4">
			                            <select name="day" class = "form-control input-lg">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			</select>                        </div>
			                        <div class="col-xs-4 col-md-4">
			                            <select name="year" class = "form-control input-lg">
			<option value="1935">1935</option>
			<option value="1936">1936</option>
			<option value="1937">1937</option>
			<option value="1938">1938</option>
			<option value="1939">1939</option>
			<option value="1940">1940</option>
			<option value="1941">1941</option>
			<option value="1942">1942</option>
			<option value="1943">1943</option>
			<option value="1944">1944</option>
			<option value="1945">1945</option>
			<option value="1946">1946</option>
			<option value="1947">1947</option>
			<option value="1948">1948</option>
			<option value="1949">1949</option>
			<option value="1950">1950</option>
			<option value="1951">1951</option>
			<option value="1952">1952</option>
			<option value="1953">1953</option>
			<option value="1954">1954</option>
			<option value="1955">1955</option>
			<option value="1956">1956</option>
			<option value="1957">1957</option>
			<option value="1958">1958</option>
			<option value="1959">1959</option>
			<option value="1960">1960</option>
			<option value="1961">1961</option>
			<option value="1962">1962</option>
			<option value="1963">1963</option>
			<option value="1964">1964</option>
			<option value="1965">1965</option>
			<option value="1966">1966</option>
			<option value="1967">1967</option>
			<option value="1968">1968</option>
			<option value="1969">1969</option>
			<option value="1970">1970</option>
			<option value="1971">1971</option>
			<option value="1972">1972</option>
			<option value="1973">1973</option>
			<option value="1974">1974</option>
			<option value="1975">1975</option>
			<option value="1976">1976</option>
			<option value="1977">1977</option>
			<option value="1978">1978</option>
			<option value="1979">1979</option>
			<option value="1980">1980</option>
			<option value="1981">1981</option>
			<option value="1982">1982</option>
			<option value="1983">1983</option>
			<option value="1984">1984</option>
			<option value="1985">1985</option>
			<option value="1986">1986</option>
			<option value="1987">1987</option>
			<option value="1988">1988</option>
			<option value="1989">1989</option>
			<option value="1990">1990</option>
			<option value="1991">1991</option>
			<option value="1992">1992</option>
			<option value="1993">1993</option>
			<option value="1994">1994</option>
			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
			<option value="2006">2006</option>
			<option value="2007">2007</option>
			<option value="2008">2008</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			</select>                        </div>
			                    </div>
			                     <label>Gender : </label>                    <label class="radio-inline">
			                        <input type="radio" name="gender" value="M" id=male />                        Male
			                    </label>
			                    <label class="radio-inline">
			                        <input type="radio" name="gender" value="F" id=female />                        Female
			                    </label>
			                    <br />
			              <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
			                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
			                        Create my account</button>
			            </form>          
			          </div>
			</div>            
			</div>
	      </div>
	    </div>
	  </div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('js/bootstrap.min.js'); }}

    <!-- Smoothscroll -->
    {{HTML::script('js/smoothscroll.js');}}

    <!-- Bootsnip JS -->
    {{ HTML::script('js/bootsnip.js'); }}

  </body>
</html>