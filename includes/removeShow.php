<?php
	include "./ScheduleClass.php";
	$Shows = new ScheduleClass ();
	$ID = mysql_escape_string($_POST['ID']);
	$Shows->removeShow($ID);
?>