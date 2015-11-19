<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password']))	{
	echo 'POST USERNAME: ' .  $_POST['username'] . '<br />';
	echo 'POST PASSWORD: ' .  $_POST['password'] . '<br />';
}

include "DBconfig.php";

if( isset($_POST['username']) && isset($_POST['password']) )	{
    $mysqli = new mysqli($host, $user, $password, $db) or die ("Couldn't connect to the database");
	
	/* check connection */
	if ($mysqli->connect_errno) {
		echo "Connect failed: " . $mysqli->connect_error;
		exit();
	}

    $query = "SELECT username, password, name, position FROM logindb WHERE username='" . $_POST['username'] . "'";
	
	if ($result = $mysqli->query($query)) {
		/* fetch associative array */
		while ($row = $result->fetch_assoc()) {
			if($_POST['username'] == $row['username'] && $_POST['password'] == $row['password'])	{
				
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $_POST['password'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['position'] = $row['position'];
				header('Location: home.php');
				
			}
			else {
				header('Location: index.php?notLoggedIn=1');
			}
		
		}
    }
	if( $result->num_rows == 0 )	{
		header('Location: index.php?notLoggedIn=1');
	}

    /* free result set */
    $result->free();
	$mysqli->close();
	
	
}
else
	die("Please enter a username and password");
?>