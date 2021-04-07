<?php 
include_once('../config/db_mysqli.php');
$hora_reserva = $_POST['tiempo'];
$nombre = $_POST['nombre'];

if(validar_reserva($hora_reserva, $conn)){
    echo 'No se puede reservar';
}else{
    $hora_minuto_segundo = explode(":",$hora_reserva);
    $hora_minuto_segundo[1] += 20;
    if($hora_minuto_segundo[1]>59){
        $hora_minuto_segundo[0] += 1;
        $hora_minuto_segundo[1] = "00";
    }
    $fin_hora_reserva = $hora_minuto_segundo[0].":".$hora_minuto_segundo[1].":".$hora_minuto_segundo[2];
    $query = "Insert into tbl_reservar (nombre, hora_reserva, fin_hora_reserva) Values('".$nombre."','".$_POST['tiempo']."','".$fin_hora_reserva."')";
    $conn->query($query);
    $conn->close();
    header("Location: ../horaElias.php");
}

function validar_reserva($hora_reserva, $conn){
    $query = "SELECT * FROM tbl_reservar WHERE hora_reserva<='$hora_reserva' and fin_hora_reserva>'$hora_reserva'";
    $result = $conn->query($query);
    if($result->num_rows>0){
        return true;
    }else{
        return false;
    }
}
?>