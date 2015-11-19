<?php
session_start();
include 'functions.php';
checkLogin();

include "DBconfig.php";
			
	$mysqli = new mysqli($host, $user, $password, $db) or die ("Couldn't connect to the database");
	
	/* check connection */
	if ($mysqli->connect_errno) {
			echo "Connect failed: " . $mysqli->connect_error;
			exit();
	}
	
	$query = "INSERT INTO patients VALUES('', '" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "', '" . $_POST['dob'] . "', '" . $_SESSION['name'] . "', '" . $_POST['telephone'] . "', '" . $_POST['address'] . "', '" . $_POST['notes'] . "') ";
	
	$mysqli->query($query);
	
	header('Location: patients.php');
	
					
		$mysqli->close();
