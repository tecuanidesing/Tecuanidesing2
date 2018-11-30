<?php
	
	
	$mbd = new PDO('mysql:host=localhost;dbname=prueba', 'root', '');
	
	
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$mensaje=$_POST['mensaje'];

	$sql="INSERT INTO datos(nombre,email,mensaje) VALUES('$nombre','$correo','$mensaje')";
	//echo $sql;
	$mbd->query($sql);
	header('location: index.php');
	
?>