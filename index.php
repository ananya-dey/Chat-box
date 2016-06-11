<html>
<head>


	<meta charset="utf-8">
	<title>Chat Box</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
	<link rel="stylesheet" type="text/css" href="style.css"  />
	<link rel="stylesheet" type="text/css" href="chat.css" />

</head>
<body>

<?php
 session_start();

if(!isset($_SESSION['username']))
	{
?>	
	<div class="container">
		<div class="col-md-3">
		
		</div>
		<div class="col-md-6">
			<form class="form-horizontal" role="form" name="form2" action="login.php" method="post">
				<h2 class="form-signin-heading">Sign in to your account</h2>
				<div class="form-group">
				  <div class="col-sm-1">
					<span class="glyphicon glyphicon-user"></span>
				  </div>
				  <div class="col-sm-8">
					<input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-sm-1">
					<span class="glyphicon glyphicon-asterisk"></span>
				  </div>
				  <div class="col-sm-8">          
					<input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-1 col-sm-10">
					<div class="checkbox">
					  <label><input type="checkbox"> Remember me</label>
					</div>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-1 col-sm-10">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				  </div>
				</div>
				</form>
				
				
				  
				
				  <div class="col-sm-12">
					<div class="link">
					  <label>Not a member?<a href="#" id="myBtn"> Sign up</a></label>
					 
						 <div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4>Please fill up the form to Register now</h4>
								</div>
								<div class="modal-body">
								  <form role="form" name="form3" action="register.php" method="post">
									<div class="form-group">
									  <label for="usertname">Username</label>
									  <input type="text" class="form-control" name="username" id="username" placeholder="Enter user name" required>
									</div> 
									
									<div class="form-group">
									  <label for="password">Password</label>
									  <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
									</div>
									<div class="form-group">
									  <label for="password2">Confirm Password</label>
									  <input type="password" class="form-control" name="password2" id="password2" placeholder="Re-enter password" required>
									</div>
									
									   <input type="checkbox" value="" checked/> <label>I agree to the <a href="">Terms & Conditions</a></label>
								   <div class="form-group">
									  <button type="submit" name="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-ok-sign"></span> Submit</button>
								   </div>
								  </form>
								</div>
								<div class="modal-footer">
								 
								</div>
							  </div> 
							</div>
						 </div> 
					</div>
				  </div>
				
		</div>
				
		<div class="col-md-3">
		
		</div>		  
				
			
		</div>
		
		
	</div><!-- End container -->

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

<?php
	exit();
	}
?>





<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script type="text/javascript" src="chat.js"></script>


</body>
</html>