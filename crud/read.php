<?php 
include('config/db_mysqli.php'); 
$query = "Select * from tbl_reservar";
$result = $conn->query($query);
$conn->close();
?>