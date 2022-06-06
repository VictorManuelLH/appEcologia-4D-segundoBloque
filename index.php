<?php

    require('functions/connection.php');

    $errors = array();

    $sql = "SELECT * FROM comentarios";

    $result = $mysqli -> query($sql); 

    // var_dump($result);

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
    <link rel="stylesheet" href="style2.css">
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
                            <a class="nav-link secciones scrollto" aria-current="page" style="color: #fff;" href="./index.html">Inicio</a>
                        </li>
                        <li class="nav-item" style="margin-right: 7px;">
                            <a class="nav-link scrollto" style="color: #fff;" href="./huellaHidrica.html">Calcula tu huella hídrica</a>
                        </li>
                        <li class="nav-item" style="margin-right: 7px;">
                            <a class="nav-link scrollto" style="color: #fff;" href="./nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-item" style="margin-right: 7px;">
                            <a class="nav-link active scrollto" style="color: #fff;" href="./index.php">Comentarios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<div class="container">
        <div class="comentarios">
            <h2>Sistema de comentarios</h2>
            <?php 
                if($result){
                    // El query se ejecuto correctamente
                    if($result -> num_rows > 0){
                        // Num rows mayor a 0, significa que si hay registros
                        while($comentario = $result -> fetch_assoc()){

                        

            ?>
            <div class="comentario">
                <p><span>Autor: </span><?php echo htmlspecialchars($comentario['nombre']) ?></p>
                <p><span>Calificacion: </span><?php echo htmlspecialchars($comentario['calificacion']) ?></p>
                <p><span>Fecha: </span><?php echo htmlspecialchars($comentario['fecha']) ?></p>
                <p><span>Comentarios: </span><?php echo htmlspecialchars($comentario['comentario']) ?></p>
                <div class="acciones">
                    <a href="borrar.php?id=<?php echo htmlspecialchars($comentario['id']); ?>"><button class="borrar"><i class="fa-solid fa-circle-minus"></i> Borrar</button></a>
                    <a href="editar.php?id=<?php echo htmlspecialchars($comentario['id']); ?>"><button class="editar"><i class="fa-solid fa-pen-to-square"></i> Editar</button></a>
                </div>
            </div>
            <?php  
                        }
                    }else{
                        $errors[] = "No hay ningún comentatrio";
                    }
                }else{
                    $errors[] = "Hubo un error en la consulta";
                }

                if(count($errors) > 0){
                    echo "<div class='error'>";
                    foreach($errors as $error){
                        echo "<i class='fas fa-exclamation-circle'></i>".$error."<br>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
    </div>

    <div class="btn-add">
        <a href="insertar.php"><button><i class="fa-solid fa-plus"></i></button></a>
    </div>

    <footer id="footer">
        <div class="footer-top container ">
            <div class="row fila">
                <div class="col-lg-2 col-md-6 footer-links m-5" style="color: #16cc1f;">
                    <h4 class="text-light">Páginas</h4>
                    <ul style="list-style: none;">
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light" href="#">Inicio</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light" href="./huellaHidrica.html">Calcula tu huella hidrica</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light" href="./nosotros.html">Nosotros</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12 footer-links m-5" style="color: #16cc1f;">
                    <h4 class="text-light">Integrantes</h4>
                    <ul style="list-style: none;">
                        <li>➣<a data-aos="zoom-out-down" class="text-light equipo" href="./nosotros.html">Victor Manuel Luis Hernández</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light equipo" href="./nosotros.html">Jorge Luis Martínez Contreras</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light equipo" href="./nosotros.html">Guendananaxhi Orozco Bustamantamante</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light equipo" href="./nosotros.html">Jose David Ortega Vasquez</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light equipo" href="./nosotros.html">Monserrat Noemi Sánchez Hernández</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light equipo" href="./nosotros.html">Elizabeth Vásquez Castillo</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light equipo" href="./nosotros.html">Soledad Velasco Santiago</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light equipo" href="./nosotros.html">Javier Pacheco Sarmiento</a></li>
                        <li><i data-aos="zoom-out-down" class="">➣</i> <a data-aos="zoom-out-down" class="text-light equipo" href="./nosotros.html">Yesenia Carmela Matías Martínez</a></li>
                    </ul>
                </div>
                <div class="text-center">
                    <p class="text-light equipo" id="fecha"></p>
                    <p class="bloque_footer">2 Bloque 4D</p>
                </div>

            </div>
        </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="./js/main.js"></script>
    <script src="./js/index.js"></script>
    <script src="./assets/libs/bootstrap/js/bootstrap.min.js "></script>
    <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>