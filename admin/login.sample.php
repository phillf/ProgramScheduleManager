<?php
	if($_POST['adminlogin_username']&&$_POST['adminlogin_password']){
		//array of users
		$administrators = array(
			//-roles- (may be implemented later.
			//3 = superadmin
			//2 = admin
			//1 = data entry
			//0 = logged out
			array(
				"username" => "manager",
				"role" => 3,
				"password" => "Insert and MD5 Hash",
			),
                    );
		session_start();
		foreach ($administrators as $user) {
			if(strtolower($user["username"]) == strtolower($_POST['adminlogin_username']) && md5($_POST['adminlogin_password']) == $user["password"]){
				$_SESSION['admin_info'] = array(
					"admin_auth" => $user["role"],
					"admin_username" => $user["username"],
				);
				header( 'LOCATION: ./index.php' );
			}
		}
	}else{
	?>
		<!DOCTYPE html>
		<html>
			<head>
				<title>Log In - PowerCast Radio - Program Schedule</title>
			</head>
			<body>
				<form action="" method="POST">
					Username: <input type="text" name="adminlogin_username" />
					Password: <input type="password" name="adminlogin_password" />
					<input type="submit" value="Log Into PowerCast Radio Program Schedule" name="adminlogin_submit" />
				</form>
			</body>
		</html>
	<?
	}
?>