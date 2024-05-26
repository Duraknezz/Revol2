<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Revolucionarios</title>
    <link rel="stylesheet" href="..\css\home.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"> -->



    <?php require('..\layouts\header.php') ?>

    <!-- </head>
<body>
    <header>
        <div class="menu-container">
            <iframe class="header_principal" src="menu.html" frameborder="0"></iframe>
        </div> -->

    <!-- <header>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#menu">Menú</a></li>
                <li><a href="#sobre">Acerca de Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header> -->
    <div class="wave">
        <label for="">Encuentra</label>
    </div>
    <div class="wave1">
        <label class="label">tu antojo</label>
    </div>
    <div class="wave2">
        <label class="label">Favorito</label>
        <a href="..\paginas\Menu_Landing.php" class="button-main-content">IR AL MENÚ</a>
        <p style="letter-spacing: .1rem;">Consulta nuestras platillos ahora mismo</p>
        <div class="swiper-pagination"></div>
    </div>

    <div class="swiper-container">

        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="../imagenes/editadas/_DSC0023.jpg" alt="Imagen 1">
            </div>
            <div class="swiper-slide">
                <img src="../imagenes/editadas/_DSC0047.jpg" alt="Imagen 2">
            </div>
            <div class="swiper-slide">
                <img src="../imagenes/editadas/_DSC0059.jpg" alt="Imagen 3">
            </div>
        </div>

        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Button placed over the carousel -->
    </div>





    <?php require('..\layouts\footer.php') ?>
    <!-- <footer>
        <img src="path/to/logo.png" alt="Logo de la compañía" class="logo">
        <p>Sucursales | Horario: 10:30am - 1:00am | Teléfono: 443 232 4326 | Nuestro Menú: Tacos, La Parrilla, Mariscos, Sandwich, Ensaladas, Especialidades, Botanas, Cocteles ESP</p>
    </footer> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- <script src="js\scriptmenu.js"></script> -->
    <script src="..\js\home.js"></script>
    <script>
        const waveElements = document.querySelectorAll('.wave label');
        waveElements.forEach(label => {
            label.innerHTML = label.textContent.split('').map((text, wave) =>
                `<span style="transition-delay: ${wave * 25}ms">${text}</span>`
            ).join('');
        });
    </script>


    </body>

</html>