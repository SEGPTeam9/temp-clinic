

	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.php" accesskey="1" title="">Appointments</a></li>
			<?php
				if( isset($_SESSION['position']) && ( $_SESSION['position'] == 'medic' || $_SESSION['position'] == 'admin' ) )	{
					echo '<li class="current_page_item"><a href="patients.php"  title="">Our Patients</a></li>';
				}
				
				if( isset($_SESSION['position']) && $_SESSION['position'] == 'admin' )	{
					echo '<li class="current_page_item"><a href="staff.php" accesskey="2" title="">Staff</a></li>';
				}
			?>
			<li class="current_page_item"><a href="logout.php" accesskey="4" title="">Sign Out</a></li>					
		</ul>
	</div> 

