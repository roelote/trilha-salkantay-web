<?php


$conexion = mysqli_connect("localhost","nctravel_chatnc","Nctravel_chatnC","testimonials_new");
// $conexion = mysqli_connect("localhost", "root", "", "comentarios");


if (!$conexion) {
	die("Error de conexión (".mysqli_connect_errno().")".mysqli_connect_error());
} 
?>