<?php 
    require('functions/connection.php');

    $errors = array();

    $flag = 0;

        if(isset($_POST['enviar'])){
            $mi_nombre = $mysqli -> real_escape_string($_POST['mi_nombre']);
            $mi_calificacion = $mysqli -> real_escape_string($_POST['mi_calificacion']);
            $mi_comentario = $mysqli -> real_escape_string($_POST['mi_comentario']);
            $mi_id = $mysqli -> real_escape_string($_POST['mi_id']);

            if(!empty($mi_nombre) && !empty($mi_calificacion) && !empty($mi_comentario) && !empty($mi_id)){
                $mi_fecha = date("Y-m-d H:i:s");

                $sql = "UPDATE comentarios SET nombre = '$mi_nombre', comentario = '$mi_comentario', calificacion = '$mi_calificacion' WHERE id = '$mi_id'";
                $result = $mysqli -> query($sql);
            }else{
                $errors[] = "Rellena todos los campos";
            }
        }else{
            $errors[] = "Noi me estas enviando un id";
        }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de comentarios</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="css/all.min.css">
    <link href="./assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="./img/vendor/aos/aos.css" rel="stylesheet">
    <link href="./img/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./img/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./img/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./img/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>
<body>
<section id="lineaInicial" class="d-flex align-items-center correoEscuela">
        <div class="container  d-flex justify-content-center justify-content-md-between">
            <div class="contacto-informacion  d-flex align-items-center">
                <i style="color: green; margin-right: 5px" class="bi bi-envelope-fill animate__animated animate__flash"></i><a class="animate__animated animate__flash" href="cbtis150.controlescolar@uemstis.sems.gob.mx">cbtis150.controlescolar@uemstis.sems.gob.mx</a>
            </div>
            <div class="redes-sociales d-none d-md-block redesEscuela">
                <a target="_blank" href="https://www.facebook.com/cbtis150cmb" class="facebook"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
    </section>

    <header id="header">
        <!-- Barra de navegacion -->
        <nav class="navbar navbar-expand-lg navbar-dark  navb" style="background-color: rgba(25, 25, 25, 0.95);">
            <div class="container-fluid" style="margin-left: 15%;">
                <a class="navbar-brand logo" href="./index.html">ECOLOGÍA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navegacion" style="margin-right: 20%;">
                        <li class="nav-item" style="margin-right: 7px;">
                            <a class="nav-link active secciones scrollto" aria-current="page" style="color: #fff;" href="./index.html">Inicio</a>
                        </li>
                        <li class="nav-item" style="margin-right: 7px;">
                            <a class="nav-link scrollto" style="color: #fff;" href="./huellaHidrica.html">Calcula tu huella hídrica</a>
                        </li>
                        <li class="nav-item" style="margin-right: 7px;">
                            <a class="nav-link scrollto" style="color: #fff;" href="./nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-item" style="margin-right: 7px;">
                            <a class="nav-link scrollto" style="color: #fff;" href="./index.php">Comentarios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<div class="container">
        <div class="comentarios">
            <h2>Estado de la modificación</h2>
            
            
                <?php
                    if(isset($result)){
                        // checamos si la variable esta definida
                        if($result){
                            // Despues checamos si la variable nos dio true
                            if($mysqli -> affected_rows > 0){
                                echo "<div class='success'><i class='fas fa-check-circle'></i> Comentario modificado correctamente </div>";
                            }else{
                                $errors[] = "No se modifico ningun comentario";
                            }

                        }else{
                            $errors[] = "Error em la consulta";
                        }
                    }
                ?>
                <?php
                if(count($errors) > 0){
                    echo "<div class='error'>";
                    foreach($errors as $error){
                        echo "<i class='fas fa-exclamation-circle'></i>".$error."<br>";
                    }
                    echo "</div>";
                }
                $mysqli -> close();
                ?>
                <a href="index.php">Inicio</a>
            </div>
    </div>

    

    <div class="btn-add">
        <a href=""><button><i class="fa-solid fa-plus"></i></button></a>
    </div>
</body>
</html>