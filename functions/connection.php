<?php

$mysqli = new mysqli("us-cdbr-east-05.cleardb.net", "bbf18c5b27148f", "913a946a", "heroku_f5d46a24ee240ff");

// evaluamos que se haya conectado coinectado correctamente

if($mysqli -> connect_errno){
    // echo "Fallo al conectar, numero de error".$mysqli -> connect_errno."<br> Descripcion del error".$mysqli -> connect_error;
    echo "Error intentalo mas tarde";
}else{
    // echo "Se conecto exitosamente";
}


?>