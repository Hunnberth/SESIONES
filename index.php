<?php
	$user = $_POST["usuario"];
	$pass = $_POST["contra"];

	if ($user == "Humberto" && $pass == "1234") {
		# code...
		session_start(); // funcion para iniciar sesion

	}else{
		header('Location:incorrectos.php');
	}
?>
<form action="guardar.php"method="POST">
	<label>Nombre</label><br/>
		<input type="text"name="nombre"size="25"maxlength="200">
			<br/><br/>
	<label>Apellido paterno</label><br/>
		<input type="text"name="ap"size="25"maxlength="100">
			<br/><br/> 
	<label>Apellido materno</label><br/>
		<input type="text"name="am"size="25"maxlength="100">
			<br/><br/>
		<input type="submit"value="Guardar">
			<br/><br/>
</Form>
<form action="ver.php"method="POST">
		<input type="submit"value="Ver datos">
			<br/><br/>
</form>
<a href="logout.php">cerrar sesion</a>









