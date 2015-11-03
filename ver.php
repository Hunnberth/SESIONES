<?php
	session_start();
	$nombre = $_SESSION['v1'];
	$aPaterno = $_SESSION['v2'];
	$aMaterno = $_SESSION['v3'];
	echo "Nombre: $nombre<br>Apellido Paterno: $aPaterno<br>Apellido Materno: $aMaterno";
	echo '<br><br><a href="index2.php">regresar</a>'
?>