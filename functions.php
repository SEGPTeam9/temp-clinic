<?php
	function checkLogin(){
		if(isset($_POST['username']) && isset($_POST['password']))	{
			$mysqli = new mysqli($host, $user, $password, $db) or die ("Couldn't connect to the database");
	
			/* check connection */
			if ($mysqli->connect_errno) {
				echo "Connect failed: " . $mysqli->connect_error;
				exit();
			}
			
			$query = "SELECT username, password FROM logindb WHERE username='" . $_POST['username'] . "'";
			
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
			//header('Location: index.php');
		}
		else
			echo '<script> alert("Please log in2."); </script>';
			//header('Location: index.php');
	}
	
	function loggedIn(){
		echo '<script> alert("Logged in as: ' . $_SESSION['username'] . '"); </script>';
	}
?>