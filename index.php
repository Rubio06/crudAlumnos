<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2356e8f8d0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="container-login">
            <h2>Formulario de Login</h2>
            <div class="cont-usuario">
                <input type="text" placeholder="&#128272 Ingrese su usuario" name="usuario" id="usuario" autocomplete="off">
            </div>
            <div class="cont-clave">
                <input type="password" placeholder="&#128272 Ingrese su contraseña" name="clave" id="clave" autocomplete="off">
                <!-- <div class="cambio">
                    <i class="fa-solid fa-eye fa-eye-slash" onclick="mostrarClave()"></i>
                </div> -->
            </div>
            <div class="btn-ingresar">
                <button onclick="irPagina()">Ingresar</button>
            </div><br><br>
            <div class="btn-ingresar">
                <a href="Registrar_usuario.php">Registrar usuario</a>
            </div>
        </div>
    </div>
    <div id="content"></div>
    <script src="js/main.js"></script>
</body>
</html>