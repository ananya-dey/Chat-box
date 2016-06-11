<?php

	if(isset($_POST['submit']))
	{
		$con = mysql_connect('localhost','root','');
		mysql_select_db('chatbox',$con);
	
		$uname  = $_POST['username'];
		$pword  = $_POST['password'];
		$pword2 = $_POST['password2'];
		
		if($pword != $pword2)
		{
			echo "<center>";
			echo "Password do not match.<br>";
			echo "</center>";
		}
		else
		{
			$checkexist = mysql_query("SELECT username FROM users WHERE username='$uname'");
			if(mysql_num_rows($checkexist))
			{
				echo "<center>";
				echo "Username already exists, please select different username<br>";
				echo "</center>";
			}
			else
			{
				mysql_query("INSERT INTO users (`username`,`password`) VALUES('$uname','$pword')");
				echo "<center>";				
				echo "You have successfully registered. click <a href='index.php'>here</a> to login first<br>";
				echo "</center>";					
			}
		}
	}
?>
<html>
<head>


	<meta charset="utf-8">
	<title>Chat Box</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>	

<link rel="stylesheet" type="text/css" href="chat.css" />

</head>
<body>

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
					<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script type="text/javascript" src="chat.js"></script>


</body>
</html>