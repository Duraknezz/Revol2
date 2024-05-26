<?php
require("../admin/bd.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Categorias</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
   <link rel="stylesheet" href="../css/menu_comida.css"> 
    
   <?php require('../layouts/header.php') ?>
</head>
<body>

<!--BARRA DE BUSQUEDA-->
    <div class="contenedor">
        <h1 class="menu">MENÚ</h1>
        <div class="carousel">
            <div class="carousel-inner">
                <!--SECCION DE TACOS-->
                <a href="category.php?category=tacos" class="circulito">
                    <div class="contenido">
                        <img src="../imagenes/TacosSub.jpg" alt="Imagen 1">
                        <span class="texto">TACOS</span>
                    </div>
                </a>
                <!--SECCION DE ESPECIALIDADES-->
                <a href="category.php?category=especialidades" class="circulito">
                    <div class="contenido">
                        <img src="../imagenes/hamburguesa.png" alt="Imagen 2">
                        <span class="texto">ESPECIALIDADES</span>
                    </div>
                </a>
                <!--SECCION DE A LA PARRILLA-->
                <a href="category.php?category=a_la_parrilla" class="circulito">
                    <div class="contenido">
                        <img src="../imagenes/ParrillaSub.jpg" alt="Imagen 3">
                        <span class="texto">A LA PARRILLA</span>
                    </div>
                </a>
                <!--SECCION DE MARISCOS-->
                <a href="category.php?category=mariscos" class="circulito">
                    <div class="contenido">
                        <img src="../imagenes/Mariscos.jpg" alt="Imagen 4">
                        <span class="texto">MARISCOS</span>
                    </div>
                </a>
                <!--SECCION SANDWICH-->
                <a href="category.php?category=sandwich" class="circulito">
                    <div class="contenido">
                        <img src="../imagenes/sanwish.jpg" alt="Imagen 5">
                        <span class="texto">SANDWICH</span>
                    </div>
                </a>
                <!--SECCION DE BEBIDAS-->
                <a href="category.php?category=ensaladas" class="circulito">
                    <div class="contenido">
                        <img src="../imagenes/hamburguesa.png" alt="Imagen 6">
                        <span class="texto">ENSALADAS</span>
                    </div>
                </a>
                <a href="category.php?category=bebidas" class="circulito">
                    <div class="contenido">
                        <img src="../imagenes/hamburguesa.png" alt="Imagen 7">
                        <span class="texto">BEBIDAS</span>
                    </div>
                </a>
            </div>
            <button class="carousel-control prev">❮</button>
            <button class="carousel-control next">❯</button>
        </div>
    </div>

    <section id="platillos">
        <?php
            $category = $_GET['category'];
            $sentencia = $conexion->prepare("SELECT * FROM `tbl_menu` WHERE category = ?");
            $sentencia->execute([$category]);
            //COLOCANDO EL TITULO DEPENDIENDO DE LO QUE SE SELECCIONO
            $titulo_categoria = ucfirst($category);
            // Mostrar el título de la categoría
            echo '<h1 class="tacos">' . htmlspecialchars($titulo_categoria) . '</h1>';
        ?><br><br>
        <h1 class="tacos"></h1><BR></BR>
    </section>

    <section class="prueba"></section>


<section class="products">
    <?php
         if($sentencia->rowCount() > 0){
            while($fetch_products = $sentencia->fetch(PDO::FETCH_ASSOC)){
    ?>
   <div class="tarjetas-container">


      <div class="tarjeta">
         <input type="hidden" name="pid" value="<?= $fetch_products['ID']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['nombre']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['precio']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['foto']; ?>">
         <img src="../imagenes/menu/<?= $fetch_products['foto']; ?>" alt="">
         <div class="name"><?= $fetch_products['nombre']; ?></div>
         <div class="flex">
            <div class="price"><span>$</span><?= $fetch_products['precio']; ?></div>
            </div>
        </div>
      <?php
            }
         }else{
            echo '<p class="empty">no products added yet!</p>';
         }
      ?>

   </div>
</section>
<script src="../js/carousel.js"></script>
</body>
<?php require('../layouts\footer.php') ?>
</html>
