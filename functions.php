<?php
	function checkLogin(){
		include 'DBconfig.php';
		if(isset($_SESSION['username']) && isset($_SESSION['password']))	{
			$mysqli = new mysqli($host, $user, $password, $db) or die ("Couldn't connect to the database");
	
			/* check connection */
			if ($mysqli->connect_errno) {
				echo "Connect failed: " . $mysqli->connect_error;
				exit();
			}
			
			$query = "SELECT username, password FROM logindb WHERE username='" . $_SESSION['username'] . "'";
			
			if ($result = $mysqli->query($query)) {

				/* fetch associative array */
				while ($row = $result->fetch_assoc()) {
					if($_SESSION['password'] != $row['password']) {		//Check if passwords from SESSION and DB coincide
						header('Location: index.php');
						
					}
				}

				/* free result set */
				$result->free();
				$mysqli->close();
			}
			else
				echo '<script> alert("Please log in1."); </script>';
				header('Location: index.php');
		}
		else
			echo '<script> alert("Please log in. Session doesn\'t exist"); </script>';
			header('Location: index2.php');
	}
	
	function loggedIn(){
		if( isset($_SESSION['username']) ) 	{
			echo '<script> alert("Logged in as: ' . $_SESSION['username'] . '"); </script><br />';
			echo '<script> alert("Password: ' . $_SESSION['password'] . '"); </script><br />';
		}
		else {
			echo '<script> alert("Not logged in"); </script>';
		}
	}
	
?>