<?php

$mysqli = new mysqli("localhost", "root", "", "curso");

// evaluamos que se haya conectado coinectado correctamente

if($mysqli -> connect_errno){
    // echo "Fallo al conectar, numero de error".$mysqli -> connect_errno."<br> Descripcion del error".$mysqli -> connect_error;
    echo "Error intentalo mas tarde";
}else{
    // echo "Se conecto exitosamente";
}


?>