<?php
	function checkLoginState()
	{
		if (isset($_POST['username']) && isset($_POST['password']))
	    {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$mydb = "mkm_assest";
			$mssg = "";
			
			$dbcon = mysqli_connect($servername, $username, $password, $mydb);
			
			if (!$dbcon)
			{
				$mssg = "Something when wrong while connection to main database ". $mysqli -> connect_error;;
				exit();
			}
			else
			{
				$mssg = "Default database is mkm_assest";
			}
			
			$user = $_POST['username'];
			$paswd = $_POST['password'];
			
			$result = mysqli_query($dbcon, "select * from user_log where user = '$user'");
			if (mysqli_num_rows($result) <= 0) 
			{
				mysqli_free_result($result);
				
				$result = mysqli_query($dbcon, "insert into user_log(user, signin) values('$user', NOW())");			  
			    $mssg = "User just Signed In";
            } 
			else
			{
				mysqli_free_result($result);
				
				$result = mysqli_query($dbcon, "select * from user_log where user = '$user' and signout IS NULL") ;
				if (mysqli_num_rows($result) > 0)
				{			
			        while($arr = mysqli_fetch_array($result))
					{
						$mssg = "Hai '$user', waktu login anda ".$arr[1];
                    }  						
			        
				}	
				else
				{
					$mssg = "User already Signed Out";	
				}
				mysqli_free_result($result);
            }
		}
		
		return $mssg;
	}
?>