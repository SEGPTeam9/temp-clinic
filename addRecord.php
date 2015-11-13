<?php
session_start();
include 'functions.php';
//checkLogin();

include "DBconfig.php";
			$currentDay = $_GET['day'];
			$currentMonth = $_GET['month'];
			$currentYear = $_GET['year'];
			$currentMonthWord = monthToWord( $currentMonth );
			
			if( isset($currentDay) && isset($currentMonth) && isset($currentYear) )	{
				$mysqli = new mysqli($host, $user, $password, $db) or die ("Couldn't connect to the database");
				
				/* check connection */
				if ($mysqli->connect_errno) {
						echo "Connect failed: " . $mysqli->connect_error;
						exit();
				}
				
				$query = "INSERT INTO patient_records VALUES('', '" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "', '" . $currentDay . "', '" . $currentMonth ."', '" . $currentYear . "', '" . $_POST['phone'] . "', '" . $_POST['address'] . "', '" . $_POST['medic'] . "', '" . $_POST['reason'] . "', '" . $_POST['notes'] . "') ";
				if ($result = $mysqli->query($query)) {
						echo 'Success !';
						header('Location: ' . 'records.php?day=' . $currentDay . '&month=' . $currentMonth . '&year=' . $currentYear);
					}
				else {
					echo 'Not inserted.';
				}
			
				

				/* free result set */
				$result->free();
				$mysqli->close();
			}
			else
				die("Error establishing date");