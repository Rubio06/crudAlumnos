<?php
    include("conexion/conexion.php");
    $cn = Conectarse();
    if(isset($_POST["op"])){
        $op=$_POST["op"];
        if($op=="insertar"){
            $nombre = $_POST["nombre"];
            $paterno = $_POST["paterno"];
            $materno = $_POST["materno"];
            $numero = $_POST["numero"];
            $dni = $_POST["dni"];
            $fecha = $_POST["fecha"];
            $email = $_POST["email"];
            $comentarios = $_POST["comentarios"];
            $carrera = $_POST["carrera"];

            $sql = "INSERT INTO `user`(`nombre`, `paterno`,`materno`, `numero`, `dni`,`fecha`, `email`, `comentarios`, `carrera_fk`) VALUES ('$nombre','$paterno','$materno','$numero','$dni','$fecha','$email','$comentarios','$carrera')";
            $query = mysqli_query($cn,$sql);

        }else if($op == "mostrartabla"){
            $sql = "SELECT user_id, nombre, paterno,materno, numero, dni, fecha, email, comentarios, carrera FROM user INNER JOIN carrera ON user.carrera_fk = carrera.carrera_id ORDER BY user_id DESC;";
            $query = mysqli_query($cn,$sql);
            while($lista = mysqli_fetch_array($query)){
                ?>
                <tr ondblclick="Enviardatos('<?php echo $lista['user_id']; ?>')">
                    <td> <?php echo $lista["user_id"]; ?></td>
                    <td> <?php echo $lista["nombre"]; ?></td>
                    <td> <?php echo $lista["paterno"]; ?></td>
                    <td> <?php echo $lista["materno"]; ?></td>
                    <td> <?php echo $lista["numero"]; ?></td>
                    <td> <?php echo $lista["dni"]; ?></td>
                    <td> <?php echo $lista["fecha"]; ?></td>
                    <td> <?php echo $lista["email"]; ?></td>
                    <td> <?php echo $lista["comentarios"]; ?></td>
                    <td> <?php echo $lista["carrera"]; ?></td>
                </tr>
            <?php
            }
        }else if($op == "busqueda"){
            if (isset($_POST["buscar"])) {
                $buscar = $_POST["buscar"];
                $sql = "SELECT user_id,nombre,paterno,materno,numero,dni,fecha,email,comentarios,carrera.carrera FROM `user` INNER JOIN `carrera` ON user.carrera_fk = carrera.carrera_id WHERE user.nombre LIKE '%$buscar%' OR user.paterno LIKE '%$buscar%' OR user.materno LIKE '%$buscar%' OR user.dni LIKE '%$buscar%' ORDER BY user_id DESC;";
                $query = mysqli_query($cn,$sql);
            }
            if ($query->num_rows > 0) {
                while($lista = mysqli_fetch_array($query)){
                ?>
                    <tr ondblclick="Enviardatos('<?php echo $lista['user_id']; ?>')">
                        <td> <?php echo $lista["user_id"]; ?></td>
                        <td> <?php echo $lista["nombre"]; ?></td>
                        <td> <?php echo $lista["paterno"]; ?></td>
                        <td> <?php echo $lista["materno"]; ?></td>
                        <td> <?php echo $lista["numero"]; ?></td>
                        <td> <?php echo $lista["dni"]; ?></td>
                        <td> <?php echo $lista["fecha"]; ?></td>
                        <td> <?php echo $lista["email"]; ?></td>
                        <td> <?php echo $lista["comentarios"]; ?></td>
                        <td> <?php echo $lista["carrera"]; ?></td>
                    </tr>
                <?php 
                }     
            }else{
                echo "<td colspan='9' style='font-size:18px;'>No existen datos registrados ...<td>";
            }
        }else if($op == "selectCarrera"){
            $sql = "SELECT * FROM carrera";
            $query = mysqli_query($cn,$sql);
            while($lista = mysqli_fetch_array($query)){
            ?>  
                    <!-- <option value="" hidden="true">SELECIONE UNA CARRERA ..</option>               -->
                    <option value="<?php echo $lista["carrera_id"]; ?>"> <?php echo $lista["carrera"]; ?></option>
            <?php 
            }  
        }else if($op == "totalregistros"){
            $sql = "SELECT COUNT(user_id)'REGISTROS' FROM user;";
            $query = mysqli_query($cn,$sql);
            if($lista = mysqli_fetch_array($query)){
            ?>
            <div class="registro"><?php echo "CANTIDAD DE REGISTROS: " . $lista["REGISTROS"];?><div>
            <?php
            }
        }else if($op == "mostrarInputs"){
            $id = $_POST["id"];
            $sql = "SELECT user_id,carrera.carrera_id,nombre,paterno,materno,numero,dni,fecha,email,comentarios,carrera_fk,carrera FROM user INNER JOIN carrera ON user.carrera_fk = carrera.carrera_id WHERE user_id= '$id';";
            $query = mysqli_query($cn,$sql);
            while($lista = mysqli_fetch_array($query)){
            ?>
                <div class="datosper">
                    <!-- <input type="text" id="user_id" hidden="true"> -->
                    <input type="text" id="datosid" hidden="true" value="<?php echo $lista["user_id"]; ?>">
                    <input type="text" id="datosnombre" placeholder="Nombres*" value="<?php echo $lista["nombre"]; ?>">
                    <input type="text" id="datospaterno" placeholder="Apellido paterno*" value="<?php echo $lista["paterno"]; ?>">
                    <input type="text" id="datosmaterno" placeholder="Apellido materno*" value="<?php echo $lista["materno"]; ?>">
                </div>
                <div class="datosper1">
                    <input type="number" id="datosnumero" placeholder="Numero* " value="<?php echo $lista["numero"]; ?>">
                    <input type="number" id="datosdni" placeholder="dni" value="<?php echo $lista["dni"]; ?>">
                    <input type="date" id="datosfecha" value="<?php echo $lista["fecha"]; ?>">
                </div>
                <div class="datosper2">
                    <select name="carrera_id" id="carrera_id">
                        <option hidden="true" value="<?php echo $lista["carrera_id"]; ?>"><?php echo $lista["carrera"]; ?></option>
                    <?php 
                        $sql1 = "SELECT * FROM carrera";
                        $query1 = mysqli_query($cn,$sql1);
                        while($lista1 = mysqli_fetch_array($query1)){
                    ?>
                        <option value="<?php echo $lista1["carrera_id"]; ?>"><?php echo $lista1["carrera"]; ?></option>
                    <?php } ?>
                    </select>

                    <input type="datosemail" id="datosemail" placeholder="E-mail*" value="<?php echo $lista["email"]; ?>">
                </div>
                <div class="datosper3">
                    <div class="datosper3-1">
                        <textarea class="comentarios" name="comentarios" id="datoscomentarios" cols="90" rows="3" placeholder="Comentarios*" ><?php echo $lista["comentarios"]; ?></textarea>
                    </div>
                    <div class="datosper3-2">
                        <button onclick="actualizar()">Actualizar datos</button>
                    </div>
                </div>
            <?php }
        }else if($op == "actualizar"){
            $datosid = $_POST["datosid"];
            $datosnombre = $_POST["datosnombre"];
            $datospaterno = $_POST["datospaterno"];
            $datosmaterno = $_POST["datosmaterno"];
            $datosnumero = $_POST["datosnumero"];
            $datosdni = $_POST["datosdni"];
            $datosfecha = $_POST["datosfecha"];
            $datosemail = $_POST["datosemail"];
            $datoscomentarios = $_POST["datoscomentarios"];
            $carrera_id = $_POST["carrera_id"];
            $sql = "UPDATE `user` INNER JOIN `carrera` ON user.carrera_fk = carrera.carrera_id SET `nombre`='$datosnombre',`paterno`='$datospaterno',`materno`='$datosmaterno',`numero`='$datosnumero',`dni`='$datosdni',`fecha`='$datosfecha',`email`='$datosemail',`comentarios`='$datoscomentarios',`carrera_fk`='$carrera_id' WHERE `user_id` = '$datosid'";
            $query = mysqli_query($cn,$sql);
            ?>
            <div id="resultActualizar"></div>
        <?php 
        }else if($op == "eliminar"){
            $datosid = $_POST["datosid"];
            $query = mysqli_query($cn, "DELETE FROM `user` WHERE user_id ='$datosid'");
        
        }else if($op == "logearse"){
            session_start();
            $usuario = $_POST["usuario"];
            $clave = md5($_POST["clave"]);

            $_SESSION["usuario"] = $usuario;
            $_SESSION["clave"] = $clave;

            $consulta = "SELECT * FROM logearse WHERE logearse_usuario='$usuario' AND logearse_contrasena='$clave'";
            $resultado = mysqli_query($cn,$consulta);
        
            $filas = mysqli_num_rows($resultado);
            echo json_encode($filas,JSON_UNESCAPED_UNICODE);
            mysqli_free_result($resultado);
            mysqli_close($cn);

        }else if($op == "registrarme"){
            $usuario = $_POST["logearse_usuario"];
            $clave = md5($_POST["logearse_contrasena"]);
            $imagen = "";

            $verificar_usuario = mysqli_query($cn, "SELECT * FROM logearse WHERE logearse_usuario = '$usuario'");
            $verificar_contrasena = mysqli_query($cn, "SELECT * FROM logearse WHERE logearse_contrasena = '$clave'");
            
            if (mysqli_num_rows($verificar_usuario) > 0 || mysqli_num_rows($verificar_contrasena) > 0) {
                echo json_encode("Ya existe el usuario y la contraseña, escriba otro usuario o contraseña");        
                exit();       
            } else {
                if (isset($_FILES["imagen"])) {
                    $file = $_FILES["imagen"];
                    $nombre = $file["name"];
                    $tipo = $file["type"];
                    $ruta_provisional = $file["tmp_name"];
                    $size = $file["size"];
                    $dimensiones = getimagesize($ruta_provisional);
                    $width = $dimensiones[0];
                    $height = $dimensiones[1];
                    $carpeta = "ruta_imagenes/";
                    
                    if ($tipo != "image/jpg" && $tipo != "image/JPG" && $tipo != "image/jpeg" && $tipo != "image/png" && $tipo != "image/gif") {
                        echo "El archivo no es una imagen";
                    }else if($size > 3*2000*2000){
                        echo "Error, el tamañno maximo permitido es un 3MB";
                    }else{
                        $src = $carpeta . $nombre;
                        move_uploaded_file($ruta_provisional, $src);
                        $imagen = "ruta_imagenes/" . $nombre;
                    }
                }
                $query = mysqli_query($cn, "INSERT INTO `logearse`(`logearse_usuario`, `logearse_contrasena`, `logearse_imagen`) VALUES ('$usuario','$clave','$imagen')");

                    echo json_encode($query);
            }
        }
    }

    
?>
    
