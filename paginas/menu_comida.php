<?php
require("../admin/bd.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu_comida.css">

    <?php require('../layouts/header.php'); ?>
</head>

<body>
    <div class="menu-section">
        <h1>MENÚ</h1>
        <div class="menu-options">
            <div class="menu-option">
                <img src="../imagenes/tacos.jpg" alt="Tacos">
                <span>TACOS</span>
            </div>
            <div class="menu-option">
                <img src="../imagenes/especialidades.jpg" alt="Especialidades">
                <span>ESPECIALIDADES</span>
            </div>
            <div class="menu-option">
                <img src="../imagenes/parrilla.jpg" alt="A la Parrilla">
                <span>A LA PARRILLA</span>
            </div>
            <div class="menu-option">
                <img src="../imagenes/mariscos.jpg" alt="Mariscos">
                <span>MARISCOS</span>
            </div>
            <div class="menu-option">
                <img src="../imagenes/sandwich.jpg" alt="Sandwich">
                <span>SANDWICH</span>
            </div>
            <div class="menu-option">
                <img src="../imagenes/ensaladas.jpg" alt="Ensaladas">
                <span>ENSALADAS</span>
            </div>
            <div class="menu-option">
                <img src="../imagenes/bebidas.jpg" alt="Bebidas">
                <span>BEBIDAS</span>
            </div>
        </div>
    </div>

    <div class="tarjetas-container">
        <?php
        try {
            $miConsulta = "SELECT * FROM tbl_menu";
            $sql = $conexion->prepare($miConsulta);
            $sql->execute();

            if ($sql->rowCount() == 0) {
        ?>
                <p>NO HAY DATOS</p>
                <?php
            } else {
                while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class='tarjeta'>
                        <img src="../imagenes/menu/<?php echo $row['foto']; ?>" width="300" height="300" />
                        <h2><?php echo $row['nombre']; ?></h2>
                        <p><?php echo $row['descripcion']; ?></p>
                        <h3>Precio: <?php echo $row['precio']; ?></h3>
                    </div>
        <?php
                }
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>

    <?php require('../layouts/footer.php'); ?>

</body>

</html>
