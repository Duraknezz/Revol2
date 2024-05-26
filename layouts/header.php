<?php
require("../admin/bd.php");
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="..\css\menu.css">
<link rel="stylesheet" href="..\css\footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<title>Los Revolucionarios</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="" class="nav__logo">
                    <img src="..\imagenes\Logo_blanco.png" alt="revol-blanco">
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="home.php" class="nav__link">Inicio</a></li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link"><a href="menu_Landing.php">
                                Menu </a> <i class="ri-arrow-down-s-line dropdown__arrow"></i>

                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="category.php?category=tacos" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Tacos
                                </a>
                            </li>

                            <li>
                                <a href="category.php?category=especialidades" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Especialidades
                                </a>
                            </li>
                            <li>
                                <a href="category.php?category=a_la_parrilla" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> A la Parrilla
                                </a>
                            </li>
                            <li>
                                <a href="category.php?category=mariscos" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Mariscos
                                </a>
                            </li>
                            <li>
                                <a href="category.php?category=sandwich" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Sandwich
                                </a>
                            </li>
                            <li>
                                <a href="category.php?category=ensaladas" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Ensaladas
                                </a>
                            </li>
                            <li>
                                <a href="category.php?category=bebidas" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Bebidas
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li><a href="noso.php" class="nav__link">Sobre Nosotros</a></li>

                    <li><a href="contacto.php" class="nav__link">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <script src="..\js\scriptmenu.js"></script>
    <!--=============== MAIN JS ===============-->

    <!-- </body>

</html> -->