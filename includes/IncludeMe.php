<?php
    session_start();
	//Check if logged in - Otherwise kill this page and take to login page
	if(!$_SESSION['admin_info']['admin_auth'] > 0){
		header( "Location: admin/index.php" );
        }
?>