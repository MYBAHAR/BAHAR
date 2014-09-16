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

		<!-- Flexslider/css -->
		{{HTML::style('css/flexslider.css');}}

		<!-- Jquery -->
		{{HTML::script('js/jquery.js');}}

		<!-- Flexslider/Javascript -->
		{{HTML::script('js/jquery.flexslider-min.js');}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('header')
  </head>
  <body>
<<<<<<< HEAD

  <div class="top-menu">
  	<div class="container">
  		<div class="row">
  			<div class="col-xs-3">
  				<h3><a href="/">BAHAR</a></h3>
  			</div>
  			<div class="col-xs-9">
  				<ul class="navbar-right menu">
  					<li><a data-toggle="modal" href='#modal-in'>Create Account</a></li>
  					<li><a data-toggle="modal" href='#modal-in'>Log in</a></li>
  					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">English</a></li>
							<li><a href="#">Dari</a></li>
							<li><a href="#">Spanish</a></li>
						</ul>
					</li>
					<li><a href="#">Courses <i class="fa fa-caret-square-o-down"></i></a></li>
  				</ul>
  			</div>
  		</div>
=======
    <nav class="navbar navbar-default" role="navigation">
    	<div class="container">
	    	<a class="navbar-brand" href="/">BAHAR</a>
	    	<ul class="nav navbar-nav">
	    		<li class="">
	    			<a href="/teach/courses">Teach</a>
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
    <div class="container">
    	@yield('content')
>>>>>>> 9d3ca1e736bc73f7712919dc58138e73d40a60f3
  	</div>
  </div>
  	

	
	<!-- Menubar 
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
	 End Menubar -->

	<div class="courses" id="courses">
		<div class="list-group">
	  	<a href="#" class="list-group-item">
		    <span class="menu-item-1">Computer Science</span> 
		    <i class="fa fa-angle-right"></i>
		</a>
	    <div class="list-group sub">
	    	<p class="lead first">Computer Science</p>
	    	<a href="#" class="list-group-item">Programming</a>
	    	<a href="#" class="list-group-item">Information Technology</a>
	    	<a href="#" class="list-group-item">Artificial Intelligence</a>
	    </div>
	  	
	  	<a href="#" class="list-group-item">
	  		<span class="menu-item-1">Medical Science</span> 
		  	<i class="fa fa-angle-right"></i>
		</a>
		<div class="list-group sub">
			<p class="lead first">Medical Science</p>
	    	<a href="#" class="list-group-item">Stomatology</a>
	    	<a href="#" class="list-group-item">Mental</a>
	    </div>

	  	<a href="#" class="list-group-item">
	  		<span class="menu-item-1">Math</span> 
	  		<i class="fa fa-angle-right"></i>
	 	</a>
  		<div class="list-group sub">
  			<p class="lead first">Math</p>
	    	<a href="#" class="list-group-item">Analasys Mathematics</a>
	    </div>

	  	<a href="#" class="list-group-item">
	  		<span class="menu-item-1">Economics</span> 
	  		<i class="fa fa-angle-right"></i>
	 	</a>
 		<div class="list-group sub">
 			<p class="lead first">Economics</p>
	    	<a href="#" class="list-group-item">Statistics</a>
	    	<a href="#" class="list-group-item">Capital</a>
	    	<a href="#" class="list-group-item">Innovative ideas</a>
	    </div>

	  	<a href="#" class="list-group-item">
	  		<span class="menu-item-1">TOEFL Preparations</span> 
	  		<i class="fa fa-angle-right"></i>
	 	</a>
  		<div class="list-group sub">
	    	<p class="lead first">TOEFL Preparations</p>
	    	<a href="#" class="list-group-item">TOEFL Barron Preparation</a>
	    	<a href="#" class="list-group-item">Longman Preparation</a>
	    	<a href="#" class="list-group-item">GRE Test Essentials</a>
	    	<a href="#" class="list-group-item">1100 Essential words for the TOEFL</a>
	    	<a href="#" class="list-group-item">TOEFL Check list</a>
	    </div>

	  	<a href="#" class="list-group-item">
	  		<span class="menu-item-1">Art</span> 
	  		<i class="fa fa-angle-right"></i>
	  	</a>
  		<div class="list-group sub">
  			<p class="lead first">Art</p>
	    	<a href="#" class="list-group-item">Painting</a>
	    	<a href="#" class="list-group-item">Sculpture</a>
	    	<a href="#" class="list-group-item">Music</a>
	    </div>
	 	
	  	<a href="#" class="list-group-item">
	  		<span class="menu-item-1">History</span> 
	  		<i class="fa fa-angle-right"></i>
	 	</a>
  		<div class="list-group sub">
  			<p class="lead first">History</p>
	    	<a href="#" class="list-group-item">Europe History</a>
	    	<a href="#" class="list-group-item">Crusade wars history</a>
	    	<a href="#" class="list-group-item">Old empires history</a>
	    	<a href="#" class="list-group-item">History of Islam</a>
	    </div>

	  	<a href="#" class="list-group-item">
	  		<span class="menu-item-1">Marketing</span> 
	  		<i class="fa fa-angle-right"></i>
	 	</a>
  		<div class="list-group sub">
  			<p class="lead first">Marketing</p>
	    	<a href="#" class="list-group-item">Priciples of Marketing</a>
	    	<a href="#" class="list-group-item">Successful Businesses</a>
	    	<a href="#" class="list-group-item">Market Management</a>
	    </div>

		</div>
	</div>
    
    
	<!-- <nav class="navbar" role="navigation">
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
	</nav> -->
    

    
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


	<script type="text/javascript">
		$(function(){

			function toggleNav() {
			    if ($('#courses').hasClass('show-nav')) {
			        // Do things on Nav Close
			        $('#courses').removeClass('show-nav');
			    } else {
			        // Do things on Nav Open
			        $('#courses').addClass('show-nav');
			    }
			}

		
		    $('#menu').click(function() {
		        // Calling a function in case you want to expand upon this.
		        toggleNav();
		    });

		   /* $('*:not("#menu")').click(function() {
		        if ($('#courses').hasClass('show-nav')) {
		            // Assuming you used the function I made from the demo
		            toggleNav();
		        }
		        
		        toggleNav();		        
		    });*/
		
			$(document).keyup(function(e) {
			    if (e.keyCode == 27) {
			        if ($('#courses').hasClass('show-nav')) {
			            // Assuming you used the function I made from the demo
			            toggleNav();
			        }
			    } 
			});	

			//$(".menubar").waypoint('sticky' , {
			//	offset:-200
			//});	
		});

	</script>


  </body>
</html>