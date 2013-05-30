<?php
	include "./ScheduleManager.class.php";
        include "./IncludeMe.php";
	$Shows = new ScheduleClass ();
	$ID = mysql_escape_string($_POST['ID']);
	$AirTime = $_POST['AirTime']; 
	$EndTime = mysql_escape_string($_POST['EndTime']);
	$ShowName = $_POST['ShowName'];
	$ShowDesc = $_POST['ShowDesc'];
	$Sunday = mysql_escape_string($_POST['Sunday']);
	$Monday = mysql_escape_string($_POST['Monday']);
	$Tuesday = mysql_escape_string($_POST['Tuesday']);
	$Wednesday = mysql_escape_string($_POST['Wednesday']);
	$Thursday = mysql_escape_string($_POST['Thursday']);
	$Friday = mysql_escape_string($_POST['Friday']);
	$Saturday = mysql_escape_string($_POST['Saturday']);
	$Shows->saveShow($ID, $AirTime, $EndTime, $ShowName, $ShowDesc, $Sunday, $Monday, $Tuesday, $Wednesday, $Thursday, $Friday, $Saturday);
?>