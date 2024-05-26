<?php include("templates/navPrueba.php"); ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("bd.php");
if($_POST){

    $nombre=(isset($_POST["nombre"]))?$_POST["nombre"]:"";
    $descripcion=(isset($_POST["descripcion"]))?$_POST["descripcion"]:"";
    $precio=(isset($_POST["precio"]))?$_POST["precio"]:"";
    
    /* CATEGORIA*/
    $category =(isset($_POST["category"]))?$_POST["category"]:"";

    $sentencia=$conexion->prepare("INSERT INTO `tbl_menu` (`ID`, `nombre`, `descripcion`, `foto`, `precio`, `category`) 
    VALUES (NULL,:nombre,:descripcion,:foto,:precio,:category);");

    $foto=(isset($_FILES["foto"]["name"]))?$_FILES["foto"]["name"]:"";
    $fecha_foto= new DateTime();
    $nombre_foto=$fecha_foto->getTimestamp()."_".$foto;
    $tmp_foto= $_FILES["foto"]["tmp_name"];

    if($tmp_foto!=""){
        move_uploaded_file($tmp_foto,"../../../imagenes/menu/".$nombre_foto);
    }

    $sentencia->bindParam(":foto",$nombre_foto);
    $sentencia->bindParam(":nombre",$nombre);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":precio",$precio);
    $sentencia->bindParam(":category",$category); /*CATEGORIA*/

    $sentencia->execute();
    header("Location:index.php");


}

?>

    <section id="panel">
        <div class="titulo">
            <h1>Administrador de Menú</h1>
            <h2>¡Bienvenido de vuelta!</h2>
        </div>

        <div class="contenidoPanel">
            <p>Insertar una imagen</p>
        </div>

        <div class="upload-container">
            <label for="foto" class="upload-box">
                <span>Agregue una imagen</span>
            </label>
            <input type="file" id="file-input" name ="foto" placeholder="" accept="image/*" style="display:none;">
        </div>
        <form class="menu-form" action="" method="post" enctype="multipart/form-data">
            <label for="menu-section">Sección del menú:</label>
            <select id="menu-section" name="menu-section">
                <option value="tacos">Seleccion una opción</option>
                <option value="tacos">Tacos</option>
                <option value="especialidades">Especialidades</option>
                <option value="parrilla">A la Parrilla</option>
                <option value="mariscos">Mariscos</option>
                <option value="sandwich">Sandwich</option>
                <option value="ensaladas">Ensaladas</option>
                <option value="bebidas">Bebidas</option>
            </select>
            <!--Nombre de platillo-->
            <label for="dish-name">Nombre del platillo:</label>
            <input type="text" id="dish-name" name="dish-name" placeholder="Ingresa el nombre del platillo" required>
            <label for="dish-description">Descripción del platillo:</label>
            <textarea id="dish-description" name="dish-description" placeholder="Ingrese la descripción del platillo" required></textarea>
            <label for="dish-price">Precio:</label>
            <input type="text" id="dish-price" name="dish-price" placeholder="Ingrese precio del producto" required>
            <button type="submit" id="save-button">Guardar</button>
        </form>            
    </section>


