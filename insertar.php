<?php
	$conexion=mysqli_connect('localhost','root','','pquinde');

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];

	$sql="insert into cliente(id,nombre,apellido,direccion,telefono)
		      values('$id','$nombre','$apellido','$direccion','$telefono')";
	echo mysqli_query($conexion,$sql);
?>