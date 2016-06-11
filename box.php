<?php
 session_start();	
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

<form name="form1" class="form-horizontal" role="form">
	
	<table border="1" align="center">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="username">Username:</label>
		  <div class="col-sm-10">
			<input type="text" class="form-control" name="username" id="username" value="<?php echo $_SESSION['username']; ?>" style="width:60%;" >
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="msg">Your Message:</label>
		  <div class="col-sm-10">          
			<textarea type="text" class="form-control" name="msg" id="msg" placeholder="Type your message" style="width:60%;height:100px;"></textarea>
		  </div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">        
				<button type="button" class="btn btn-default btn-lg" onclick="submitChat()">Submit</button>
				<button type="button" class="btn btn-default btn-lg"><a href="logout.php" style="text-decoration:none;">Logout</a></button>			
			</div>
		</div>
	</table>
	
	
<div id="imageload" style="display:none;">
<img src="images/a.GIF"/>
</div>

<div id="chatlogs" style="width:100%;text-align:center;">
LOADING CHATLOGS PLEASE WAIT... <img src="images/a.GIF"/>
</div>


<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script type="text/javascript" src="chat.js"></script>


</body>
</html>