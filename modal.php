<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modal</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div id="miModal" class="modal">
        <div class="flex" id="flex">
            <div class="contenido-modal">
                <div class="modal-header flex">
                    <h2>Ingreso de datos</h2>
                    <span class="close" id="close">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="fomulario">
                        <div class="titulo">
                            <!-- <h2>PRACTICA CHECKBOX</h2> -->
                        </div>
                        <div class="formulario-datos">
                            <div class="div-terminos">
                                <div class="input-nombre">
                                    <input type="text" id="nombre" placeholder="Nombres*">
                                </div>
                                <div class="inputs-apellidos">
                                    <input type="text" id="paterno" placeholder="Apellido paterno*">
                                    <input type="text" id="materno" placeholder="Apellido materno*">
                                </div>
                                <div class="input-dninum">
                                    <input type="text" maxlength="9" id="numero" placeholder="Numero* ">
                                    <input type="text" maxlength="8" id="dni" placeholder="dni">
                                </div>
                                <div class="inputdate">
                                    <input type="date" id="fecha">
                                    <select name="carrera" id="carrera">
                                    </select>
                                </div>
                                <div class="input-email">
                                    <input type="email" id="email" placeholder="E-mail*">
                                </div>
                                <div class="textarea">
                                    <textarea name="comentarios" id="comentarios" cols="" rows="5"></textarea>
                                </div>
                                <div class="check">
                                    <input type="checkbox" id="terminos" name="terminos" class="terminos"
                                        onclick="checkBoton()">
                                    <label for="terminos" style="font-weight: 100;">Acepto lo siguientes <a
                                            href="">Terminos y condiciones</a> y autoriso la validación de mis
                                        datos.</label>
                                </div>
                            </div>
                            <div class="input-datos">
                                <button id="btncheck" disabled onclick="mandarDatos()">Enviar datos</button>
                            </div>
                            <div id="resultadoDatos"></div>
                            <div id="cuerpotabla"></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="footer">
                    <h3>Hecho pro Enoc Rubio &copy;</h3>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>