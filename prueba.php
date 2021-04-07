<?php

$mensaje = "";


if(feriado()){
    $mensaje = "dias de feriado";
    var_dump($mensaje);
}else{
    if(validar()){
        var_dump($mensaje);
    }else{
        var_dump($mensaje);
    }
}

function feriado(){
    return false;
}

function validar(){
    global $mensaje; 
    if(false){
        $mensaje= "si puede reservar";
    }else{
        $mensaje= "no puede reservar";
    }
    return true;
}





?>