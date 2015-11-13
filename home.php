<?php
session_start();

if( !isset($_GET['curMonth']) && !isset($_GET['curYear']))	{
	$curDay = date('d');
	$curMonth = date('m');
	$curYear = date('Y');
}	else {
	$curMonth = $_GET['curMonth'];
	$curYear = $_GET['curYear'];
}
include 'functions.php';
$curMonthWord = monthToWord( $curMonth );
//loggedIn();
//checkLogin();
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
	
	<!-- Calendar CSS -->
	<link rel="stylesheet" href="css/calendar.css" />
	
</head>

<body id="public">

	<?php 
		
		
		
		include 'menu.php';
	?>

	<div id="container" style="min-height: 500px;">    
	<?php
		
		echo '<div><h2 id="calendarTitle">' . $curMonthWord . ' ' . $curYear .'</h2> <div id="changeMonthButtons"><a href="home.php?curMonth=' .  prevMonth($curMonth) . '&curYear=' . prevYear($curMonth, $curYear) . '">earlier</a><a href="home.php?curMonth=' .  nextMonth($curMonth) . '&curYear=' . nextYear($curMonth, $curYear) . '">later</a></div></div>';
		echo draw_calendar($curMonth, $curYear);
	?>
	</div>
	
</body>

</html>