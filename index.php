<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/modal.css">
</head>

<body>
    <?php 
    include("conexion/conexion.php");
    $cn = Conectarse();
    include("modal.php");
?>
    <div class="contenedor">
        <h1 class="titulo-primer">
            Tabla para mostrar información</h1>
        <div class="formulario-principal">
            <div id="mostrarInputs" class="mostrarInputs">
                <div class="datosper">
                    <input type="text" id="user_id" hidden="true">
                    <input type="text" id="datosnombre" placeholder="Nombres*" disabled>
                    <input type="text" id="datospaterno" placeholder="Apellido paterno*" disabled>
                    <input type="text" id="datosmaterno" placeholder="Apellido materno*" disabled>
                </div>
                <div class="datosper1">
                    <input type="number" id="datosnumero" placeholder="Numero*" disabled>
                    <input type="number" id="datosdni" placeholder="dni" disabled>
                    <input type="date" id="datosfecha" disabled>
                </div>
                <div class="datosper2">
                    <select name="carrera" id="datoscarrera" disabled>
                        <option value=""></option>
                    </select>
                    <input type="datosemail" id="datosemail" placeholder="E-mail*" disabled>
                </div>
                <div class="datosper3">
                    <div class="datosper3-1">
                        <textarea class="comentarios" name="comentarios" id="datoscomentarios" cols="90" rows="3"
                            placeholder="Comentarios*" disabled></textarea>
                    </div>
                    <div class="datosper3-2">
                        <button onclick="actualizar()">Actualizar datos</button>
                    </div>
                </div>
            </div>
            <div id="resultActualizar"></div>
        </div>
        <div class="tabla-container">
            <div class="botones">
                <div class="btn1">
                    <div class="btn1-1">
                        <input type="text" id="buscar" name="buscar" placeholder="Buscar por numero de DNI">
                        <button class="boton-buscar" onclick="buscar()">BUSCAR</button>
                    </div>
                    <div class="btn1-2">
                        <button class="boton-abrir" id="abrir">INSERTAR</button>
                    </div>
                </div>
                <div class="btn2">
                    <div class="btn2-1">
                        <button onclick="limpiarCampos()">LIMPIAR CAMPOS</button>
                    </div>
                    <div class="btn2-2">
                        <button onclick="eliminar()">ELIMINAR</button>
                    </div>
                </div>
            </div>
            <div class="div-tabla">
                <table cellspacing="0" id="tabla">
                    <thead class="thead">
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PATERNO</th>
                        <th>MATERNO</th>
                        <th>NUMERO</th>
                        <th>DNI</th>
                        <th>FECHA</th>
                        <th>EMAIL</th>
                        <th>COMENTARIO</th>
                        <th>CARRERA</th>
                    </thead>
                    <tbody id="tablabody" class="tbody">
                    </tbody>
                </table>
            </div>
            <div class="registros">
                <div id="resultRegistros" class="resultRegistros">
                    
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>