<!DOCTYPE html>
<html>
	<head>
		<title>Password to MD5</title>
	</head>
	<body>
		<?php
			if($_POST['md5_password']){
				echo md5($_POST['md5_password']).'<br />';
			}
		?>
		<form action="" method="POST">
			Password: <input type="text" name="md5_password" />
			<input type="submit" value="MD5 ME!" />
		</form>
	</body>
</html>