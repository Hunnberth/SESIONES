<?php
	session_start();
	$_SESSION['v1'] = $_POST['nombre'];
	$_SESSION['v2'] = $_POST['ap'];
	$_SESSION['v3'] = $_POST['am'];
	header('Location:index2.php');
?>

	