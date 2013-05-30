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
		$error = "Incorrect username and/or password";
	}
	if($_POST['adminlogin_username']==""||$_POST['adminlogin_password']==""){
		$error = "Username AND password are required";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Log In - PowerCast Radio - Program Schedule</title>
	</head>
	<body>
		<?=isset($error) ? "<h4>".$error."</h4>" : ""?>
		<form action="" method="POST">
			Username: <input type="text" name="adminlogin_username" />
			Password: <input type="password" name="adminlogin_password" />
			<input type="submit" value="Log Into PowerCast Radio Program Schedule" name="adminlogin_submit" />
		</form>
	</body>
</html>