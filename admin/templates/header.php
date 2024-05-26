<?php
session_start();

$url_base="https://localhost/Los Revolucionarios/Revolucionarios/admin/";
if(!isset($_SESSION["usuario"])){
    header("Location:".$url_base."login.php");
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Administrador del Sitio Web</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="./css/navAdmin.css">
        <!-- TABLA PARA SECCIONES -->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    </head>

    <body>
        <section id="lateral">
            <!-- place navbar here -->
            <nav class="nav">
                <ul class="list">
                    <div class="logo">
                        <img src="../imagenes/Logo_color.png" alt="Logo de los revolucionarios">
                    </div>
                    <li class = "list__item">
                        <div class ="list__button">
                            <img src="../assets/bell.svg" alt="">
                            <a class="nav-link" href="<?php echo $url_base;?>index.php" aria-current="page">Inicio <span class="visually-hidden">(current)</span></a> 
                        </div>
                    </li>
                    <li class = "list__item">
                        <div class = "list__button">
                            <img src="../assets/dashboard.svg" alt="list__img">
                            <a class="nav-link" href="<?php echo $url_base;?>seccion/menu/crear.php">Agregar</a>
                        </div>
                    </li>
                    <li class = "list__item">
                        <div class ="list__button">
                            <img src="../assets/docs.svg" alt="list__img">
                            <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/menu/">Modificar</a>
                        </div>
                    </li>
                    <li class = "list__item">
                        <div class ="list__button">
                            <img src="../assets/stats.svg" alt="list__img">
                            <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/usuarios/">Usuarios</a>
                        </div>
                    </li>
                    <li class ="salir">
                        <div class="list__button">
                            <img src="../assets/message.svg" alt="list__img">
                            <a class="nav__link" href="<?php echo $url_base;?>cerrar.php">Cerrar Sesion</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </section>
    <section class="container">