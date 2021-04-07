<?php 
include_once('../config/db_mysqli.php');
$id = $_GET['id'];
$query = "delete from tbl_practica where id=$id";
$conn->query($query);
$conn->close();
header("Location: ../index.php");
?>