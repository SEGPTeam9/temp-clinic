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
			echo '<i>Logged in as:</i> <b>' . $_SESSION['username'] . '</b> <br /> <i>Position:</i> <b>' . $_SESSION['position'] . '</b>';
		
			if( $_SESSION['position'] == 'admin' )	{
				$query = "SELECT * FROM patients";
			}	
			else if( $_SESSION['position'] == 'medic' )	{
				$query = "SELECT * FROM patients WHERE medic='" . $_SESSION['name'] . "'";
			}	
			else if( $_SESSION['position'] == 'nurse' )	{
				header('Location: index.php');
			}
			
			//Connect to DB
			$mysqli = new mysqli($host, $user, $password, $db) or die ("Couldn't connect to the database");
			
			// Check connection 
			if ($mysqli->connect_errno) {
					echo "Connect failed: " . $mysqli->connect_error;
					exit();
			}
			
			//Fetch patient records
			$result = $mysqli->query( $query );
			
			//Display records
			echo '<br /> <br />';
			
			while( $row = $result->fetch_assoc() )	{
				echo '<p>';
				echo 'First Name: ' . $row['First name'] . ' <br />';
				echo 'Last Name: ' . $row['Last name'] . ' <br />';
				echo 'Date Of Birth: ' . $row['DOB'] . ' <br />';
				echo 'Assigned Medic: ' . $row['Medic'] . ' <br />';
				echo 'Telephone no.: ' . $row['Telephone'] . ' <br />';
				echo 'Address: ' . $row['Address'] . ' <br />';
				echo 'Notes: ' . $row['Notes'];
				echo '<a style="float: right;" href="removePatient.php?id=' . $row['id'] . '">Remove patient</a> <br />';
				echo '<p /> <hr />';
			}
			
			
		?>
	</div>


</body>

</html>