<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rectángulos</title>
<link rel="stylesheet" href="../css/cuadraditos.css">
<?php require('../layouts\header.php') ?>
</head>

<body>

    <section id="principal">
        <section class="rectangulos">
            <!--TACOS-->
            <div class="rectangulo">
                <div class="imagen" style="background-image: url('../imagenes/papel.jpg');">
                    <a href="category.php?category=tacos" class="box"> <!--MANDANDO A LLAMAR A LA CATEGORIA-->
                        <img src="../imagenes/Posible tacos.png" alt="Icono">
                    </a>
                    <span class="titulo">TACOS</span>
                </div>
            </div>
            <!--ESPECIALIDADES-->
            <div class="rectangulo">
                <div class="imagen" style="background-image: url('../imagenes/papel.jpg');">
                    <a href="category.php?category=especialidades" class="box">
                        <img src="../imagenes/Special.png" alt="Icono">
                    </a>
                    <span class="titulo">ESPECIALIDADES</span>
                </div>
            </div>
            <!--A LA PARRILA--->
            <div class="rectangulo">
                <div class="imagen" style="background-image: url('../imagenes/papel.jpg');">
                    <a href="category.php?category=a_la_parrilla" class="box">
                        <img src="../imagenes/Parrilla.png" alt="Icono">
                    </a>
                    <span class="titulo">A LA PARRILLA</span>
                </div>
            </div>
            <!--MARISCOS-->
            <div class="rectangulo">
                <div class="imagen" style="background-image: url('../imagenes/papel.jpg');">
                    <a href="category.php?category=mariscos" class="box">
                        <img src="../imagenes/Marisques.png" alt="Icono">
                    </a>
                    <span class="titulo">MARISCOS</span>
                </div>
            </div>
            <!--SANDWICH-->
            <div class="rectangulo">
                <div class="imagen" style="background-image: url('../imagenes/papel.jpg');">
                    <a href="category.php?category=sandwich" class="box">
                        <img src="../imagenes/Sanwish.png" alt="Icono">
                    </a>
                    <span class="titulo">SANDWICH</span>
                </div>
            </div>
            <!--ENSALADAS-->
            <div class="rectangulo">
                <div class="imagen" style="background-image: url('../imagenes/papel.jpg');">
                    <a href="category.php?category=ensaladas" class="box">
                        <img src="../imagenes/Ensaladita.png" alt="Icono">
                    </a>
                    <span class="titulo">ENSALADAS</span>
                </div>
            </div>
            <!--COCTELES ESPECIALES-->
            <div class="rectangulo">
                <div class="imagen" style="background-image: url('../imagenes/papel.jpg');">
                    <a href="category.php?category=bebidas" class="box">
                        <img src="../imagenes/Bebidas.png" alt="Icono">
                    </a>
                    <span class="titulo">BEBIDAS</span>
                </div>
            </div>
            <!--BOTANAS
            <div class="rectangulo">
                <div class="imagen" style="background-image: url('Revolucionarios/imagenes/papel.jpg');">
                    <a href="category.php?category=botanas" class="box">
                        <img src="Revolucionarios\imagenes\sabrosa-hamburguesa-aislada-sobre-fondo-blanco-comida-rapida-hamburguesa-fresca-carne-queso_90220-1063.avif" alt="Icono">
                    </a>
                    <span class="titulo">BOTANAS</span>
                </div>
            </div>
            -->
    </section>
    
    <div class="descarga">
        <a href=""><h1><span>DESCARGAR MENÚ</span></h1></a>
    </div>
    
    
    <!-- Agrega más rectángulos aquí si lo necesitas -->
</section>

</body>
<?php require('../layouts\footer.php') ?>
</html>