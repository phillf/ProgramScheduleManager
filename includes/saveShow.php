<?php
	include "./ScheduleManager.class.php";
	$Shows = new ScheduleClass ();
	$AirTime = mysql_escape_string($_POST['AirTime']); 
	$EndTime = mysql_escape_string($_POST['EndTime']);
	$ShowName = mysql_escape_string($_POST['ShowName']);
	$ShowDesc = mysql_escape_string($_POST['ShowDesc']);
	$Sunday = mysql_escape_string($_POST['Sunday']);
	$Monday = mysql_escape_string($_POST['Monday']);
	$Tuesday = mysql_escape_string($_POST['Tuesday']);
	$Wednesday = mysql_escape_string($_POST['Wednesday']);
	$Thursday = mysql_escape_string($_POST['Thursday']);
	$Friday = mysql_escape_string($_POST['Friday']);
	$Saturday = mysql_escape_string($_POST['Saturday']);
	$Shows->saveShow($ID, $AirTime, $EndTime, $ShowName, $ShowDesc, $Sunday, $Monday, $Tuesday, $Wednesday, $Thursday, $Friday, $Saturday);
?>