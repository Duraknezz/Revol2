<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../../bd.php");

if($_POST){

    $txtID=(isset($_GET["txtID"]))?$_GET["txtID"]:"";
    $nombre=(isset($_POST["nombre"]))?$_POST["nombre"]:"";
    $descripcion=(isset($_POST["descripcion"]))?$_POST["descripcion"]:"";
    $precio=(isset($_POST["precio"]))?$_POST["precio"]:"";
    /* CATEGORIA*/
    $category=(isset($_POST["category"]))?$_POST["category"]:"";

    $sentencia=$conexion->prepare(" UPDATE `tbl_menu` SET nombre=:nombre, descripcion=:descripcion, precio=:precio, category=:category WHERE ID=:id");

    $sentencia->bindParam(":nombre",$nombre);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":precio",$precio);
    $sentencia->bindParam(":id",$txtID);
    $sentencia->bindParam(":category",$category); /*CATEGORIA*/
    
    $sentencia->execute();

    $foto=(isset($_FILES["foto"]["name"]))?$_FILES["foto"]["name"]:"";
    $tmp_foto= $_FILES["foto"]["tmp_name"];

    if($foto!=""){

        $fecha_foto= new DateTime();
        $nombre_foto=$fecha_foto->getTimestamp()."_".$foto;
        move_uploaded_file($tmp_foto,"../../../imagenes/menu/".$nombre_foto);

        $sentencia=$conexion->prepare("SELECT * FROM `tbl_menu` WHERE ID=:id");
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();

        $registro_foto=$sentencia->fetch(PDO::FETCH_LAZY);

        if(isset($registro_foto["foto"])){
            if(file_exists("../../../imagenes/menu/".$registro_foto["foto"])){
            unlink("../../../imagenes/menu/".$registro_foto["foto"]);

            }
        }

        $sentencia=$conexion->prepare("UPDATE `tbl_menu` SET foto=:foto WHERE ID=:id");
        $sentencia->bindParam(":foto",$nombre_foto);
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();

        header("Location:index.php");
    }

}

if(isset($_GET['txtID'])){

    $txtID=(isset($_GET["txtID"]))?$_GET["txtID"]:"";
    $sentencia=$conexion->prepare("SELECT * FROM `tbl_menu` WHERE ID=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $nombre=$registro["nombre"];
    $descripcion=$registro["descripcion"];
    $foto=$registro["foto"];
    $precio=$registro["precio"];
    $category=$registro["category"];
}

include("../../templates/header.php"); 
?>

<br/>
<div class="card">
    <div class="card-header">
        Menú de Comida
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data" >

    <div class="mb-3">
        <label for="" class="form-label">ID:</label>
        <input type="text"
            class="form-control" value="<?php echo $txtID;?> "name="txtID" id="txtID" aria-describedby="helpId" placeholder=""/>
    </div>
    

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text"
            class="form-control" value="<?php echo $nombre;?> "name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre"/>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion (separado por comas):</label>
        <input type="text"
            class="form-control" value="<?php echo $descripcion;?>" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion"/>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto:</label>
        <br/>
        <img width="50" src="../../../imagenes/menu/<?php echo $foto;?>" >
        <input type="file"
            class="form-control" name="foto" id="foto" placeholder="" aria-describedby="fileHelpId"/>
    </div>
    

    <div class="mb-3">
        <label for="precio" class="form-label">Precio:</label>
        <input type="text"
            class="form-control" value="<?php echo $precio;?>" name="precio" id="precio" aria-describedby="helpId" placeholder="Precio"/>
    </div>
    <!---- COMBOBOX PARA HACER LA CATEGORIA---->
    <div>
        <label for="category" class="form-label">Categoría:</label>
        <select class="form-select" name="category" id="category">
            <option value="tacos">Tacos</option>
            <option value="especialidades">Especialidades</option>
            <option value="a_la_parrilla">A la parrilla</option>
            <option value="mariscos">Mariscos</option>
            <option value="sandwich">Sandwich</option>
            <option value="ensaladas">Ensaladas</option>
            <option value="bebidas">Bebidas</option>
            <!--
            <option value="botanas">Botanas</option>
            <option value="fuente_de_sodas">Fuente de Sodas</option>
            <option value="cervezas">Cervezas</option>
            <option value="brandys">Brandys</option>
            <option value="rones">Rones</option>
            <option value="whisky">Whisky</option>
            <option value="tequilas">Tequilas</option>
            <option value="vodka">Vodka</option>
            <option value="cognac">Cogñac</option>
            <option value="botella">Botella</option>
            -->
        </select>
    </div>
    <!---- =============== ---->

    <button type="submit" class="btn btn-success">Modificar comida</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    

    </form>
    
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>

<?php include("../../templates/footer.php"); ?>