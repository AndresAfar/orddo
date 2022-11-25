<?php
    include 'includes/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap" rel="stylesheet">
    <title>ORDDO | login</title>
</head>
<body>
    
    <div>
        <form action="includes/login_registrar.php" method="post">
            <div class="circulo"><img src="img/logo_Orddo.png" width="85px" heigth= "100px"alt=""></div>
            
            <p class="title">Iniciar Sesion</p>
            <label>
                <input placeholder="usuario" type="text" id="user" name="usuario" min="5" maxlength="30">
            </label>
            <label>
                <input placeholder="contraseña" type="password" id="password" name="password" min="5" maxlength="30">
            </label>
            <div class="iper">
                <a href="registerUser.php">Restablecer contraseña</a><a href="registerUser.php">Registrarse</a>
            </div>
            <button id="button" name="btnIngresar">
                Ingresar
            </button>
        </form>
    </div>

</body>
</html>