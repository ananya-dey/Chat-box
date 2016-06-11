echo "<center>";
		echo "You are now Login. click <a href='box.php'>here</a> to go back to main chat window";
		echo "</center>";
		
		mysql_query("INSERT INTO users (`username`,`password`) VALUES('$uname','$pword')");
				 $result = mysql_query("SELECT * FROM users WHERE username='$uname' AND password='$pword'");
					if(mysql_num_rows($result))
					{
						$res = mysql_fetch_array($result);
						
						$_SESSION['username'] = $res['username'];