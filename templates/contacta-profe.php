<?php
    header('Content-Type: text/html; charset=utf-8');
    // Corrobora si INICIÓ SESIÓN
    session_start();

    require '../dynamics/config.php';
    $con = connect();

    $correo = $_SESSION["correo"];
    $nombre = $_SESSION["nombre_completo"];
?>
<!-----------------------VISTA DE ALUMNO PARA CONTACTO--------------------------------->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/contacta-profe.css">
    <title>SAETEC: Alumno</title>
</head>
<body>
    <!---------------ENCABEZADO--------------------------->
    <header>
        <div id="iconos_unam">
            <div class="logo-unam">
                <a href="https://www.unam.mx/" target="_blank">
                    <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp">
                <a href="http://enp.unam.mx/"  target="_blank">
                    <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp6">
                <a href="https://www.prepa6.unam.mx/ENP6/_P6/"  target="_blank">
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
                <a href="https://www.ete.enp.unam.mx/CM.html"  target="_blank">
                    <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
                </a>
            </div>
            <div class="logo-ete"></div>
                <a href="https://www.ete.enp.unam.mx/"  target="_blank">
                    <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
                </a>
            </div>
            <div class="logo-40años"></div>
                    <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
            </div>
        </div>
    </header>

    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <?php
            include 'barrapro.php';
    ?>
    <br>
    <!------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    <div id="contenedor">
        <div id="img_perfil">
                <img src="../statics/img/puma.png" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
        </div>  
        <form id="alumno" method="GET">
            <div id="datos">
                <p class="titulo">Contacta a tu profesor</p>    
                    <p name="nombre"><?php echo "Alumn@: $nombre";?></p>
                    <p name="correo"><?php echo "Correo: $correo";?></p>
                    <input class="texto_ingresado" name="contacto-profe" placeholder="Comience a escribir">
                    <input type="submit" id="envio-comentario" value="Enviar comentario">
            </div>
            <div id="comentario">
                <?php
                    if(isset($_GET["contacto-profe"])){
                        $texto_ingresado = $_GET["contacto-profe"];
                        echo "<p name='texto_ingresado'>Texto recibido: $texto_ingresado</p>";

                    }
                    
                ?>
            </div>
        </form method="GET">
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>