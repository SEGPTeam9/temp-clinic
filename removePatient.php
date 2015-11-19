 <?php
	
	if( !isset($_GET['id']) )
		header('Location: patients.php');
	else	{
		include 'DBconfig.php';
		
		//Connect to DB
			$mysqli = new mysqli($host, $user, $password, $db) or die ("Couldn't connect to the database");
		
		// Check connection 
			if ($mysqli->connect_errno) {
					echo "Connect failed: " . $mysqli->connect_error;
					exit();
			}
		
		$query = "DELETE FROM patients WHERE id='" . $_GET['id'] . "'";
		$mysqli->query( $query );
		
		$mysqli->close();
		header('Location: patients.php');
	}
 
 ?>