<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/2356e8f8d0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bienvenida.css">
</head>
<body>
    <header class="header">
        <img class="logo" src="./imagen/empresa.png" alt="">
        <div class="div-btnabrir">
            <button id="hambAbrir" class="abrir-menu"><i class="fa-solid fa-bars"></i></button>
        </div>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="hambCerrar"><i class="fa-sharp fa-solid fa-xmark"></i></button>
            <div class="container">
                <div class="hola">
                    <div class="cont-bienvenida">
                        <div class="admin">
                            <div class="datos-usuario">
                                <div class="datos-user">
                                    <h2 class="h2-bienvenida">Bienvenido administrador ||</h2>
                                    <p class="p-usuario"><?php echo $_SESSION['usuario'] ?></p>
                                </div>
                            </div>
                            <div class="img-perfil">
                                <div>
                                    <div class="img-dentro">
                                    <?php 
                                    $varsesion = $_SESSION['usuario'];
                                    $query = mysqli_query($cn, "SELECT logearse_imagen FROM logearse WHERE logearse_usuario = '$varsesion';");
                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                        <img height="60px"
                                            src="<?php echo $data["logearse_imagen"] ?>" alt="">
                                        <?php
                                        }  
                                    }
                                ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-cerrarsesion">
                            <div class="btn-div">
                                <a href="cerrar_sesion.php"><button>Cerrar sesión</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <marquee direction="left">
        <div class="marque"></div>
    </marquee>
</body>

</html>