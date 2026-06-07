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
                <img class="iconos" src="../statics/img/logo-escudo-unam.png" alt="Escudo de la UNAM">
                <img class="iconos" src="../statics/img/logo_enp.jpeg" alt="Escudo de la ENP">
                <img class="iconos" src="../statics/img/logo-prepa6.png" alt="Escudo de la ENP6">
                <img class="iconos" src="../statics/img/logo-475años.png" alt="Escudo de la 475-años">
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
<<<<<<< HEAD:templates/acerca-de.html
        <footer>
            <div id="iconos_unam">
                <h3>
                    <img class="iconos" src="../statics/img/logo_unam.svg" alt="Escudo de la UNAM">
                    <img class="iconos" src="../statics/img/logo_ete.svg" alt="Escudo de los Estudios Tecnicos de la UNAM">
                    <img class="iconos" src="../statics/img/logo_enp.svg" alt="Escudo de la ENP">
                </h3>
                <p class="link">
                    <a href="https://www.ete.enp.unam.mx/" target="_blank">CONTACTO</a>
                    <strong> · </strong>
                    <a href="https://www.ete.enp.unam.mx/" target="_blank">HORARIO</a>
                    <strong> · </strong>
                    <a href="./creditos.html">CRÉDITOS</a>
                    <p>Sitio web administrado por la Coordinación General de Estudios Técnicos Especializados de la Escuela Nacional Preparatoria.</p>
                </p>
                
            </div>
        </footer>
=======
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
>>>>>>> f77ae3b11149cbd932033fc98a807e37737bd60c:templates/acerca-de.php
    </body>
</html>