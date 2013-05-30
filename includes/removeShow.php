<?php
	include "./ScheduleManager.class.php";
        include "./IncludeMe.php";
	$Shows = new ScheduleClass ();
	$ID = mysql_escape_string($_POST['ID']);
	$Shows->removeShow($ID);
?>