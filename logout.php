<?php
 session_start(); 
 session_unset(); 

 session_destroy(); 
 echo "<center>";
 echo "You have logged out. Click <a href='index.php'>here to login again</a>";
 echo "</center>";
			 
 
?>	