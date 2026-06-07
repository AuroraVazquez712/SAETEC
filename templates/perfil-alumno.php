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
                <img class="iconos" src="../statics/img/logo-escudo-unam.png" alt="Escudo de la UNAM">
                <img class="iconos" src="../statics/img/logo_enp.jpeg" alt="Escudo de la UNAM">
                <img class="iconos" src="../statics/img/logo-prepa6.png" alt="Escudo de la UNAM">
                <img class="iconos" src="../statics/img/logo-475años.png" alt="Escudo de la UNAM">
            </div>
            <div id="titulo_encabezado">
                <p>SAETEC</p>
            </div>
            <div id="iconos_ete">
                <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
                <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
                <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
            </div>
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
                <img src="../statics/img/imagen-predeterminada.jpeg" alt="Foto del alumno" class="alumno-icon">
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