<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact Me</title>
		<!-- Adding bootstrap files -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!-- Adding self created CSS file -->
		<link rel="stylesheet" href="ui/index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		
		<div class="container-fluid">
			<!-- start of navbar -->
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					  <a class="navbar-brand" href="ui/index.html">Bhaskar Bansal</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
							<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end of navbar -->
			<!-- start of main content -->
			<div class="row" style="margin-top:80px;">
				<div class="container text-justify">
					<div class="col-lg-10">
						<h2>Any Queries</h2>
						<h4>I would love to reply back to your Question/Queries</h4>
						<p>Hello! I am there to help you. I would love to hear suggestions from your side. Please feel free to contact me by filling the below details. I will try to get back to you as soon as possible. Cheers!</p>
					</div>
					<div class="col-lg-2">
						<center><img src="ui/contact.png" alt="Contact Me"/></center>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="col-lg-8" style="margin-bottom:10px;">
						<h2>CONTACT ME</h2>
						<form role="form">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" id="text">
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label>Message:</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-lg-4">
						<h2>My Info :</h2>
						<p>Shiv Nadar University, </p>
						<p>NH91, Tehsil Dadri, Greater Noida</p>
						<p>Uttar Pradesh-201314,</p>
						<p>India.</p>
						<p>Phone:+91-8941098194</p>
						<p>Email: bhaskarbansal96@gmail.com</p>
					</div>
				</div>
			</div>
			<!-- end of main content -->
		</div>
		<!-- closing the container-fluid div -->
		<!-- start of footer -->
		<div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#fff;margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>Information</h3></div>
						<div><a href="ui/about.php">About Me</a></div>
						<div><a href="ui/contact.php">Contact Me</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>My Account</h3></div>
						<div><a href="#myModal" role="button" data-toggle="modal">Login</a></div>
						<div><a href="signup.php">Signup</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>Contact Me</h3></div>
						<div>Contact: +91-18941098194</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of footer -->
		<!-- Modal in the navbar which is hidden initially -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="color:#000;">LOGIN</h4>
					</div>
					<div class="modal-body">
						<p>Don't have an account? <a href="" class="decor_anchor">Register</a></p>
						<form role="form" action="" method="POST">
							<div class="form-group">
								<input class="form-control"  placeholder="Email" name="e-mail">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password">
							</div>
						    <button type="submit" name="submit" class="btn btn-primary">Login</button>
						</form><br/>
						<a href="" style="color:#0000ff">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Modal -->
	</body>
</html>
