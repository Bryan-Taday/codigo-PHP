<?php 
include_once('../config/db_mysqli.php');
if(validar_reserva($_POST['nombre2'], $conn)){
    echo 'No se puede reservar';
}else{
    $query = "Insert into tbl_reservar (nombre, hora_reserva, fin_hora_reserva) Values('".$_POST['nombre']."','".$_POST['tiempo']."','".$fin_hora_reserva."')";
    $query = "UPDATE tbl_reservar SET fin_hora_reserva = ADDTIME(fin_hora_reserva, '00:20:00') WHERE nombre = "."'".$_POST['nombre2']."'";
    $conn->query($query);
    $conn->close();
    header("Location: ../horaElias.php");
}
function validar_reserva($usuario, $conn){
    $query = "SELECT * FROM tbl_reservar WHERE hora_reserva<(SELECT ADDTIME(fin_hora_reserva, '00:20:00') from tbl_reservar WHERE nombre = '$usuario') and fin_hora_reserva>=(SELECT ADDTIME(fin_hora_reserva, '00:20:00') from tbl_reservar WHERE nombre = '$usuario')";
    $result = $conn->query($query);
    if($result->num_rows>0){
        return true;
    }else{
        return false;
    }
}
?>