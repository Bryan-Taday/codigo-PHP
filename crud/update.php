<?php 
include_once('../config/db_mysqli.php');
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$deporte = $_POST['deporte'];
$query = "UPDATE tbl_practica SET nombre='$nombre', edad=$edad, deporte='$deporte' where id=$id";
$conn->query($query);
var_dump($query);
$conn->close();
header("Location: ../index.php");
?>