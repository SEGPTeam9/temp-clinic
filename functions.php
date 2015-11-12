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
	
	function monthToWord( $month ) {
		switch( $month ) {
			case 1:
				return "January";
				break;
			case 2:
				return "February";
				break;
			case 3:
				return "March";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "May";
				break;
			case 6:
				return "June";
				break;
			case 7:
				return "July";
				break;
			case 8:
				return "August";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "October";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "December";
				break;
		}
	}
	
	function prevMonth($month){
		if($month == 1) return 12;
		else 
			return $month - 1;
	}
	
	function prevYear($month, $year) {
		if($month == 1) return $year - 1; 
		else 
			return $year;
	}
	
	function nextMonth($month){
		if($month == 12) return 1;
		else 
			return $month + 1;
	}
	
	function nextYear($month, $year) {
		if($month == 12) return $year + 1; 
		else 
			return $year;
	}
	
	/* draws a calendar */
	function draw_calendar($month,$year){

		/* draw table */
		$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

		/* table headings */
		$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
		$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

		/* days and weeks vars now ... */
		$running_day = date('w',mktime(0,0,0,$month,1,$year));
		$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
		$days_in_this_week = 1;
		$day_counter = 0;
		$dates_array = array();

		/* row for week one */
		$calendar.= '<tr class="calendar-row">';

		/* print "blank" days until the first of the current week */
		for($x = 0; $x < $running_day; $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
			$days_in_this_week++;
		endfor;

		/* keep going with days.... */
		for($list_day = 1; $list_day <= $days_in_month; $list_day++):
			$calendar.= '<td class="calendar-day"><a href="records.php?day=' . $list_day . '&month=' . $GLOBALS['curMonth'] . '&year=' . $GLOBALS['curYear'] . '" target="_blank">';
				/* add in the day number */
				$calendar.= '<div class="day-number">'.$list_day.'</div>';

				/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
				$calendar.= str_repeat('<p> </p>',2);
				
			$calendar.= '</a></td>';
			if($running_day == 6):
				$calendar.= '</tr>';
				if(($day_counter+1) != $days_in_month):
					$calendar.= '<tr class="calendar-row">';
				endif;
				$running_day = -1;
				$days_in_this_week = 0;
			endif;
			$days_in_this_week++; $running_day++; $day_counter++;
		endfor;

		/* finish the rest of the days in the week */
		if($days_in_this_week < 8):
			for($x = 1; $x <= (8 - $days_in_this_week); $x++):
				$calendar.= '<td class="calendar-day-np"> </td>';
			endfor;
		endif;

		/* final row */
		$calendar.= '</tr>';

		/* end the table */
		$calendar.= '</table>';
		
		/* all done, return result */
		return $calendar;
	}
	
?>