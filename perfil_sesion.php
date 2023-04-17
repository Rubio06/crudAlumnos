<div class="container">
    <div class="cont-bienvenida">
        <div class="admin">
            <h2>Bienvenido administrador ||</h2>
            <p><?php echo $_SESSION['usuario'] ?></p>
            <p><?php 
                    $varsesion = $_SESSION['usuario'];
                    $query = mysqli_query($cn, "SELECT logearse_imagen FROM logearse WHERE logearse_usuario = '$varsesion';");
                    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                <img style="border-radius: 10px;" height="60px" src="<?php echo $data["logearse_imagen"] ?>" alt="">
                <?php
                     }
                    }
                ?>
            </p>
        </div>
        <div class="btn-cerrarsesion">
            <div class="btn-div">
                <a href="cerrar_sesion.php"><button>Cerrar sesión</button></a>
            </div>
        </div>
    </div>
</div>


<marquee direction="left">
    <div class="marque"></div>
</marquee>