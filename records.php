<?php
session_start();
include 'functions.php';
checkLogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<title>	Doctor &middot; Interface </title>

	<!--

	Hey friend! This file shows you how
	the CSS Theme you downloaded looks with
	some example HTML form markup.

	Check out the README.txt for more info.

	-->

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- JavaScript -->
	<script type="text/javascript" src="scripts/scr.js"></script>
	
	<!-- JQuery-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/structure.css" />
	<link rel="stylesheet" href="css/form.css" />
	<link rel="stylesheet" href="css/theme.css" type="text/css" />
	<link rel="canonical" href="http://www.wufoo.com/gallery/designs/template.html">
</head>

<body id="public">

	<?php 
		include 'menu.php';
	?>

	<div id="container" style="min-height: 500px;">    
		
		<?php
						
			include "DBconfig.php";
			$currentDay = $_GET['day'];
			$currentMonth = $_GET['month'];
			$currentYear = $_GET['year'];
			$currentMonthWord = monthToWord( $currentMonth );
			
			echo '<a href="home.php?curMonth=' . $currentMonth . '&curYear=' . $currentYear . '"> BACK<br /><br /> </a>';
			
			if( isset($currentDay) && isset($currentMonth) && isset($currentYear) )	{
				$mysqli = new mysqli($host, $user, $password, $db) or die ("Couldn't connect to the database");
				
				/* check connection */
				if ($mysqli->connect_errno) {
						echo "Connect failed: " . $mysqli->connect_error;
						exit();
				}
				
				$query = "SELECT * FROM `patient_records` WHERE day='" . $currentDay . "' AND month='" . $currentMonth . "' AND year='" . $currentYear . "';";
				if ($result = $mysqli->query($query)) {

					/* fetch associative array */
					while ($row = $result->fetch_assoc()) {
						echo 'First Name: ' . $row['First_name'] . '<br />' . 
							  'Last Name: ' . $row['Last_name'] . '<br />' . 
							  'Phone: ' . $row['Phone'] . '<br />' . 
							  'Address: ' . $row['Address'] . '<br />' . 
							  'Medic: ' . $row['Medic'] . '<br />' . 
							  'Reason: ' . $row['Reason'] . '<br />' . 
							  'Notes: ' . $row['Notes'] . '<br /><hr />';
					}
				}
				

				/* free result set */
				$result->free();
				$mysqli->close();
			}
			else
				die("Error establishing date");
		
		
		echo '<button id="addButton" onclick="showForm()">Add new entry</button>';
		echo '<div id="recordForm" style="display: none;"> 
			<form method="POST" action="addRecord.php?day=' . $currentDay . '&month=' . $currentMonth . '&year=' . $currentYear . '">
			<input type="text" name="first_name" placeholder="First Name" style="width: 300px;"></input> <br /><br />
			<input type="text" name="last_name" placeholder="Last Name" style="width: 300px;"></input> <br /><br />
			<input type="text" name="phone" placeholder="Phone" style="width: 300px;"></input> <br /><br />
			<input type="text" name="address" placeholder="Address" style="width: 300px;"></input> <br /><br />
			<input type="text" name="medic" placeholder="Medic" style="width: 300px;"></input> <br /><br />
			<input type="text" name="reason" placeholder="Reason" style="width: 300px;"></input> <br /><br />
			<textarea type="text" name="notes" placeholder="Notes" style="width: 300px; height: 200px;"></textarea> <br /><br />
			<input type="submit" value="Add Record"></input>
			</form> 
			</div>';
		echo '<script>
				function showForm() {
					$(\'#addButton\').hide();
					$(\'#recordForm\').show();
				}
			</script>';
		?>
	</div>


</body>

</html>