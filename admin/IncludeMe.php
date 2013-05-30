<?php 
	include "../includes/ScheduleManager.class.php";
        $Schedule = new ScheduleClass();
	session_start();
	$Schedule = new ScheduleClass();
	//Check if logged in - Otherwise kill this page and take to login page
	if(!$_SESSION['admin_info']['admin_auth'] > 0){
		header( 'Location: login.php' );
		die();
	}
?>