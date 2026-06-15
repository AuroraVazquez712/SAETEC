<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/acerca-de.css">
    
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
        <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
        <?php
            include 'barrapro.php';
        ?>
        <!-------------------------------------BARRA LATERAL----------------------------------------->
        <?php
            include 'barra-lateral.php';
        ?>
        <!------------------------ACERCA DE SAETEC------------------------>
        <div id="cont-general">
            <div id="cont-acerca-de">
                <div id="nombres-saetec">
                    <p class="acerca-de">ACERCA DE</p>
                    <p class="nom-pag">SAETEC</p>
                </div>
                <div id="puma-acerca-de">
                    <img class="puma-like" src="../statics/img/puma-like.png" alt="Puma de la UNAM, con pose de like">
                </div>
            </div>
            <div id="cont-info">
                <div class="subtemas">
                    <h3>¿QUÉ ES SAETEC?</h3>
                    <p>SAETEC (Sociedad de Apoyo de el Estudio Técnico Especializado en Computación).</p>
                    <p>Es una plataforma que permite a los usuarios (maestros, estudiantes o administradores) llevar un seguimiento periódico en torno al logro de objetivos en el Estudio Técnico en Computación.</p>
                </div>
                <div class="subtemas">
                    <h3>METAS</h3>
                <ul>
                    <li>Crear una plataforma virtual que evite la deserción del estudio técnico.</li>
                    <li>Crear un sitio que lleve el historial de los estudiantes de forma eficaz y eficiente.</li>
                    <li>Transmitir una sensación de confianza y apoyo.</li>
                </ul>
                </div>
                <div class="subtemas">
                    <h3>OBJETIVOS</h3>
                    <ul>
                        <li>Brindar a los profesores un sistema de registros de sus alumnos, que le permita saber sus calificaciones, dudas o comentarios.</li>
                        <li>Darles  a los alumnos una atención acorde a las características y apoyos que requieran.</li>
                        <li>Brindar información que haga consciente al estudiante de su historial académico.</li>
                        <li>Brindar apoyo a los estudiantes con recomendaciones y material extra a fin de evitar la deserción del estudio técnico.</li>
                    </ul>
                </div>
            </div>
        </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
    </body>
</html>