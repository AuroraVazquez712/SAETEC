<?php   
    // Corrobora si INICIÓ SESIÓN
    session_start();

    require  '../dynamics/config.php';
    $con = connect();

    // VARIABLES DE SESIÓN
    $usuario = $_SESSION["nocta"];
    $id_perfil_ini = $_SESSION["id_perfil"];
    
    
    $ruta = '../statics/img/' . $usuario . '-foto-perfil.jpg';

    if(isset($_FILES['foto_perfil']))
    {
        $archivo = $_FILES['foto_perfil'];
        $nombre_archivo = $archivo['name'];
        $ruta_temporal = $archivo['tmp_name'];

        move_uploaded_file($ruta_temporal, $ruta);

        $guarda_ruta = "UPDATE perfil SET foto_perfil = '$ruta' WHERE id_perfil = $id_perfil_ini";
        mysqli_query( $con, $guarda_ruta);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/barra-busqueda-head.css">
    <link rel="stylesheet" href="../statics/style/cambio-foto.css">
    
    <title>SAETEC</title>
</head>
<body>
    <!<!-------------------------------------BARRA DE BUSQUEDA----------------------------------------->
    <header>
        <div id="iconos_unam">
            <div class="logo-unam">
                <a href="https://www.unam.mx/">
                    <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp">
                <a href="http://enp.unam.mx/">
                    <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp6">
                <a href="https://www.prepa6.unam.mx/ENP6/_P6/">
                    <img class="iconos"src="../statics/img/logo-prepa6.png" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-475años">
                <img class="iconos"src="../statics/img/logo-475años.png" alt="Escuedo de la UNAM">
            </div>
        </div>
        <div id="titulo_encabezado">
            <a href="./index.html">
                <p>SAETEC</p>
            </a>
        </div>
        <div id="iconos_ete">
            <div class="logo-compu">
                <a href="https://www.ete.enp.unam.mx/">
                    <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
                </a>
            </div>
            <div class="logo-ete"></div>
                <a href="https://www.ete.enp.unam.mx/CM.html">
                    <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
                </a>
            </div>
            <div class="logo-40años"></div>
                    <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
            </div>
        </div>
    </header>
<<<<<<<< HEAD:templates/inicio-sesion.php
    <!--Cuerpo después de la barra de busqueda-->
    <div class="cont-general">
        <div id="img-puma">
            <img id="img-inisesion" src="../statics/img/puma-telefono.jpg" alt="Puma con un teléfono">
        </div>
        <div id="form-inisesion">
            <p>INICIO DE SESIÓN</p>
            <!--Formulario de ingreso de datos-->
            <form method="POST">
                <p>Ingrese su usuario:</p>
                <input type="text" placeholder="no. de cuenta">
                <p>Ingrese su contraseña:</p>
                <input type="text" placeholder="dd/mm/aaaa">
                <br>
                <button type="submit" id="envio-datos">Enviar</button>
            </form method="POST">
            <br>
            <div>
                <p class="tienes-cuenta">¿No tienes una cuenta?</p>
                <p  class="crea-cuenta">Crea una</p>
========
        <!------------------------BARRA DE NAVEGACIÓN------------------------>
    <?php
            include 'barrapro.php';
    ?>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <div class="contenedor-general" style="margin-top: 50px;">
        <header class="form-header">
            <h2>Edición de foto de perfil</h2>
        </header>
            
            <div class="vista-previa">
                <?php
                    $ruta_imagen="";
                    if(file_exists("$ruta")){
                        $ruta_imagen= "$ruta";
                    }else{
                        $ruta_imagen="../statics/img/imagen-predeterminada.jpeg";
                    }
                    echo "<img src= '$ruta_imagen' class= 'profile-pic'>";
                ?>

                <a href="perfil-alumno.php" class="btn-editar">Regresar al perfil</a>
>>>>>>>> 76d027077be124cfddca986a76f86fa57ca3b088:templates/guardar-foto.php
            </div>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?>
</body>
</html>