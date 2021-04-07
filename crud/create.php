<?php 
include_once('../config/db_mysqli.php'); 
$query = "Insert into tbl_practica (nombre, edad, deporte) Values('".$_POST['nombre']."','".$_POST['edad']."','".$_POST['deporte']."')";
$conn->query($query);
$conn->close();
header("Location: ../index.php");
?>