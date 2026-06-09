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
                    if(file_exists("../statics/img/perfil_usuario.jpg")){
                        $ruta_imagen= "../statics/img/perfil_usuario.jpg";
                    }else{
                        $ruta_imagen="../statics/img/imagen-predeterminada.jpeg";
                    }
                    echo "<img src= '$ruta_imagen' class= 'alumno-icon' alt='Foto del alumno'>";
                ?>
                <!--
                <img src="../statics/img/imagen-predeterminada.jpeg" alt="Foto del alumno" class="alumno-icon">
                -->
                <a href="cambio-foto.php">
                    <button>Cambiar imagen del perfil</button>
                </a>
                <p>Historial académico</p>
                <p>Actualización de datos</p>
                <p>Grupo</p>
            </div>
            <div id="datos-alumno">
                <div >
                    <h3>Fatima Elvira Rosales Tecuapetla</h3>
                    <p name="correo-usuario">Email: ssss@gmail.com</p>
                    <p name="no-cuenta">No. de cuenta: 320300287</p>
                    <p name="telefono">Teléfono: 55 5538383837</p>
                </div>
            </div>
        </div>
        <!------------------------FOOTER --------------------------------->
        <?php
                include 'footer.php';
        ?> 
    </body>
</html>