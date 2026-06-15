<?php
    header('Content-Type: text/html; charset=utf-8');
    // Corrobora si INICIÓ SESIÓN
    session_start();

    require '../dynamics/config.php';
    $con = connect();

    if (isset($_SESSION["rol"]) ){
        if ($_SESSION['rol'] == "E"){
            //header("Location: alumno.php");
        }

    } else {
        // REGRESA A LOGIN
        header("Location: inicio-sesion.php");
    }

    $nombre = $_SESSION["nombre_completo"];
    $correo = $_SESSION["correo"];
    $nocta = $_SESSION["nocta"];
    $grupo =  $_SESSION["grupo"];
    $id_perfil = $_SESSION["id_perfil"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/barra-busqueda-head.css">
    <link rel="stylesheet" href="../statics/style/perfil-alumno.css">
    
    <title>SAETEC</title>
</head>
    <body>
        <!--Barra de búsqueda-->
        <header>
        <div id="iconos_unam">
            <div class="logo-unam">
                <a href="https://www.unam.mx/" target="_blank">
                    <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escudo de la UNAM">
                </a>
            </div>
            <div class="logo-enp">
                <a href="http://enp.unam.mx/" target="_blank">
                    <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escudo de la UNAM">
                </a>
            </div>
            <div class="logo-enp6">
                <a href="https://www.prepa6.unam.mx/ENP6/_P6/" target="_blank">
                    <img class="iconos"src="../statics/img/logo-prepa6.png" alt="Escudo de la UNAM">
                </a>
            </div>
            <div class="logo-475años">
                <img class="iconos"src="../statics/img/logo-475años.png" alt="Escudo de la UNAM">
            </div>
        </div>
        <div id="titulo_encabezado">
            <a href="./index.php">
                <p>SAETEC</p>
            </a>
        </div>
        <div id="iconos_ete">
            <div class="logo-compu">
                <a href="https://www.ete.enp.unam.mx/CM.html">
                    <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
                </a>
            </div>
            <div class="logo-ete"></div>
                <a href="https://www.ete.enp.unam.mx/">
                    <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
                </a>
            </div>
            <div class="logo-40años"></div>
                    <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
            </div>
        </div>
    </header>
        </header>
        <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
        <?php
            include 'barrapro.php';
        ?>
        <!-------------------------------------BARRA LATERAL----------------------------------------->
        <?php
            include 'barra-lateral.php';
        ?>
        <!----------------------------------------CONTENIDO------------------------------------------->
        <div id="cont-general">
        <div id="barra-lateral">
            <?php
                $ruta_imagen="";

                //CONSULTA
                $consulta = "SELECT foto_perfil FROM perfil WHERE id_perfil = $id_perfil";
                $conecta = mysqli_query($con, $consulta);
                $consulta_fotoperfil = mysqli_fetch_assoc($conecta);

                $ruta = $consulta_fotoperfil['foto_perfil'];

                if(file_exists("$ruta")){
                    $ruta_imagen= "$ruta";
                }else{
                    $ruta_imagen="../statics/img/imagen-predeterminada.jpeg";
                }
                echo "<img src= '$ruta_imagen' class= 'profile-pic'>";
            ?>
            <a href="cambio-foto.php">
                <button>Cambiar imagen del perfil</button>
            </a>
            <p>Historial académico</p>
            <p>Actualización de datos</p>
            <p name="grupo"><?php echo "Grupo: $grupo"; ?></p>
        </div>
        <div id="datos-alumno">
            <div>

            </div>
            <h3><?php echo "Nombre: $nombre";?></h3>
            <p name="correo-usuario"><?php echo "Correo: $correo";?></p>
            <p name="no-cuenta"><?php echo "No. de cuenta: $nocta"; ?></p>
            <p name="grupo"><?php echo "Grupo: $grupo"; ?></p>
        </div>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
    </body>
</html>