<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2356e8f8d0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="titulo-h1">
        <marquee behavior="" direction="" style="width: 30%;">
            SOLUCIONES RETAIL S.A.C
        </marquee>
    </h1>
    <div class="container">
        <div class="flex-contenido">
            <div class="contenedor-login">
                <h2 class="h2-titulo">Formulario de
                    Login</h2>
                <div class="div-imagen">
                    <img src="img/candado.jpg" alt="" class="imagen">
                </div>
                <div class="mb-3 input" style="padding: 0px 25px 0px 25px">
                    <input type="text" class="form-control" id="usuario" name="usuario"
                        placeholder="&#128272 Ingrese su usuario"  autocomplete="off">
                </div>
                <div id="passwordHelpBlock" class="form-text" style="padding: 0px 25px 0px 25px">
                    <input type="password" id="clave" name="clave" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="&#128272 Ingrese su contraseña" autocomplete="off">
                </div><br>
                <div class="d-grid gap-2" style="padding: 0px 35px 0px 35px">
                    <button type="button" class="btn btn-primary" onclick="irPagina()">Ingresar</button>
                    <button type="button" class="btn btn-link" style="color:blue;"><a href="Registrar_usuario.php">Registrarme</a></button>
                </div>
            </div>
            <div class="img-svg">
                <div class="img-div">
                    <img src="./img/undraw_completed_03xt.svg" alt="">
                </div>
            </div>
        </div>
        <!-- <div class="cont">
        </div> -->
        <div class="cont-letrero">
            <div id="letrero" class="desaparecer">
                <div id="content"></div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>