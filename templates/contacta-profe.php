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
            <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escuedo de la UNAM">
            <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
            <img class="iconos"src="../statics/img/logo-prepa6.png" alt="Escuedo de la UNAM">
            <img class="iconos"src="../statics/img/logo-475años.png" alt="Escuedo de la UNAM">
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
    <br>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    <div id="contenedor">
        <div id="alumno">
            <div id="img_perfil">
                <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
            </div>
            <div id="datos">
                <h1>Contacta a tu profesor</h1>    
                    <p>superduperultramegacoolemail.com</p>
                <h1>Mensaje </h1>
            </div>
        </div>
        <div id="comentario">
            <p>Los amo Angie y Carlos, bsos</p>
        </div>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>