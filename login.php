<?php
	session_start();
	if (isset($_SESSION["login"])) {
		# code...
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php"method="POST">
		<label>Usuario</label>
		<input type="text"name="usuario">
		<br/>
		<br/>
		<label>Password</label>
		<input type="password"name="contra">
		<br/>
		<br/>
		<input type="submit"value="Entrar">
	</form>
</body>
</html>



