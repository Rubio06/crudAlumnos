<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/registro.css">
</head>

<body>
    <div class="contenedor-principal">
        <div class="container cont-general">
            <div>
                <h1>DATOS PERSONALES</h1><br>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="logearse_usuario" name="logearse_usuario"
                        placeholder="Ingrese su usuario">
                </div>
                <div id="passwordHelpBlock" class="form-text">
                    <label for="inputPassword5" class="form-label">Contraseña</label>
                    <input type="password" id="logearse_contrasena" name="logearse_contrasena" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Ingrese su contraseña">
                </div><br>
                <div class="mb-3 fotografias">
                    <label for="formFile" class="form-label">Elegir imagen</label>
                    <input type="file" name="imagen" accept="ruta_imagenes/" id="imagen" onchange="previewImage(event, '#imgPreview')"><br><br>
                    <img id="imgPreview" width="140" style="border:2px solid black; padding: 10px;">
                </div>
                <div class="d-grid gap-2 btn-registro">
                    <button type="button" class="btn btn-primary" id="btn-registrar">Registrarme</button>
                    <button type="button" class="btn btn-link"><a href="index.php">Regresar</a></button>
                </div>
            </div>
            <div id="verRegistro"></div>
        </div>
        <script src="js/registros.js"></script>
    </div>
</body>

</html>