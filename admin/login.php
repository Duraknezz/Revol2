<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if ($_POST) {
    include("bd.php");

    $usuario = (isset($_POST["usuario"])) ? $_POST["usuario"] : "";
    $password = (isset($_POST["password"])) ? $_POST["password"] : "";

    //VARIABLES PARA CAPTCHA
    $ip = $_SERVER["REMOTE_ADDR"];
    $captcha = $_POST['g-recaptcha-response'];
    $secretkey = "6Lfyrd4pAAAAALHLcj5u2bNfN4b6jllPvCvpLkhn";

    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

    //Conversion del JSON
    $atributos = json_decode($respuesta, TRUE);
    if (!$atributos['success']){
        $mensaje = "Error en el Captcha, intentelo de nuevo";
    } else {
        // No se cifra la contraseña ingresada por el usuario
        $sentencia = $conexion->prepare("SELECT *, count(*) n_usuario FROM `tbl_usuario` WHERE usuario=:usuario AND password=:password");
        $sentencia->bindParam(":usuario", $usuario);
        $sentencia->bindParam(":password", $password);
        $sentencia->execute();
        $lista_usuario = $sentencia->fetch(PDO::FETCH_LAZY);
        $n_usuario = $lista_usuario["n_usuario"];
        if ($n_usuario == 1) {
            $_SESSION["usuario"] = $lista_usuario["usuario"];
            $_SESSION["logueado"] = true;
            header("Location:crear.php");
            exit; // Agrega esto para detener la ejecución del script después de la redirección
        } else {
            $mensaje = "Usuario o contraseña incorrectos...";
        }
    }
}
?>

<?php

include("bd.php");

$sentencia = $conexion->prepare("SELECT * FROM `tbl_usuario`");
$sentencia->execute();
$usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/login.css">
    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="background">
        <div class="login-container">
            <div class="login-header">
                <br><br>
                <?php if (isset($mensaje)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong> <?php echo $mensaje; ?>
                    </div>
                <?php } ?>
                <img src="../imagenes/Logo_color.png" alt="Logo Los Revolucionarios"> <!-- Ajusta la ruta al logo -->
                <span>Inicio de Sesión</span>
            </div>
            <div class="login-form">
                <form action="login.php" method="post">
                    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Ingrese su nombre de usuario" />
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" />
                    <!--CAPCHA-->
                    <div class="g-recaptcha" data-sitekey="6Lfyrd4pAAAAAHWZkEqbCVwPmZVzuKdTbpOAZ7tM"></div>

                    <button type="submit" class="button">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>