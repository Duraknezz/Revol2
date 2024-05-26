<?php
session_start();

$url_base="https://localhost/Los Revolucionarios/Revolucionarios/admin/";
if(!isset($_SESSION["usuario"])){
    header("Location:".$url_base."login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navAdmin.css">
    <title>Admin</title>
</head>
<body>
    <section id="lateral">
        <nav class="nav">
            <ul class="list">
                <div class="logo">
                    <img src="../imagenes/Logo_color.png" alt="">
                </div>
                <li class="list__item">
                    <div class="list__button">
                        <img src="../assets/dashboard.svg" class="list__img">
                        <a href="#" class="nav__link">Agregar platillo</a>
                    </div>
                </li>
                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <img src="../assets/docs.svg" class="list__img">
                        <a href="#" class="nav__link">Modificar menu</a>
                    </div>
                </li>
                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <img src="../assets/docs.svg" class="list__img">
                        <a href="#" class="nav__link">Usuarios</a>
                    </div>
                </li>
                <li class="list__item">
                    <div class="list__button">
                        <img src="../assets/stats.svg" class="list__img">
                        <a href="#" class="nav__link">Eliminar</a>
                    </div>
                </li>
                <li class="salir">
                    <div class="list__button">
                        <img src="../assets/message.svg" class="list__img">
                        <a href="#" class="nav__link">Salir</a>
                    </div>
                </li>
            </ul>
        </nav>
    </section>
    