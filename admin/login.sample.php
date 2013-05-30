<?php
        session_start();
	if($_POST['adminlogin_username']&&$_POST['adminlogin_password']){
		//array of users
		$administrators = array(
			//-roles-
			//3 = superadmin
			//2 = admin
			//1 = data entry
			//0 = logged out
			array(
				"username" => "SomeUername",
				"role" => 3,
				"password" => "Password as MD5",
			),
                    );
		foreach ($administrators as $user) {
			if(strtolower($user["username"]) == strtolower($_POST['adminlogin_username']) && md5($_POST['adminlogin_password']) == $user["password"]){
				$_SESSION['admin_info'] = array(
					"admin_auth" => $user["role"],
					"admin_username" => $user["username"]
				);
				header( 'Location: index.php' );
			}
		}
	return header ("LOCATION: login.php?error=1");
        /*if($_GET['adminlogin_username']==""||$_GET['adminlogin_password']==""){
		return header ("LOCATION: login.php?error=2");
	}*/
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Log In - PowerCast Radio - Program Schedule</title>
	</head>
	<body>
                <? if ( $_GET["error"] == 1 ) { echo "Incorrect username or password."; }
                else if ( $_GET["error"]== 2 ) { echo "username AND password are required."; } ?>
		<form action="" method="POST">
			Username: <input type="text" name="adminlogin_username" />
			Password: <input type="password" name="adminlogin_password" />
			<input type="submit" value="Log Into PowerCast Radio Program Schedule" name="adminlogin_submit" />
		</form>
	</body>
</html>