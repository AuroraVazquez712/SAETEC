<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/tips.css">

    <title>SAETEC</title>
</head>
<body>
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
    <!------------------------BARRA DE NAVEGACIÓN------------------------------->
    <?php
            include 'barrapro.php';
    ?>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!--------------------------------CONTENIDO------------------------------------->
    <main>
        <div id="margen-content">
            <div id="tit-tips">
                <p>¡10 tips para concluir con exito la ETE!</p>
            </div>

            <div id="10-tips">

                <div class="tip">
                    <div class="num-tip">
                    <h2> 1 </h2>
                </div>
                    <p> Procura ser constante con los temas vistos en clase, el aprendizaje es progresivo, 
                        por lo que si te rezagas en algún punto, puede resultar difícil comprender lo que sigue.</p>
                </div>

                <div class="tip">
                    <div class="num-tip">
                    <h2> 2 </h2>
                </div>
                    <p>No te quedes con dudas. Todos aprendemos en conjunto, muchas veces la pregnta que tú tienes también
                        la puede compartir otro de tus compañeros. Este es un ambiente de confianza, así que expresar las 
                        inquietudes nos fortalecen a todos. </p>
                </div>

                <div class="tip">
                    <div class="num-tip">
                    <h2> 3 </h2>
                </div>
                    <p>Revisa tus tiempos, prioridades, ocupaciones y tareas. La opción técnica exige dedicación y constancia,
                        por lo que una buena organización permite aprovechar el tiempo de estudio.</p>
                </div>

                <div class="tip">
                    <div class="num-tip">
                    <h2> 4 </h2>
                </div>
                    <p>Planifica con anticipación el tiempo que dedicarás a la entrega de tareas o proyectos. Saber organizarte evita 
                        que trabajes bajo presión, lo cual, te permitirá obtener un resultado de calidad. 
                    </p>
                </div>

                <div class="tip">
                    <div class="num-tip">
                    <h2> 5 </h2>
                </div>
                    <p>Reforzar lo visto en clase de manera autónoma es fundamental para progresar.
                        En nuestro espacio de <a href="./material_extra.php">Material extra</a> encontrarás bibliografía y prácicas
                        diseñadas para que continues aprendiendo.
                    </p>
                </div>

                <div class="tip">
                    <div class="num-tip">
                    <h2> 6 </h2>
                </div>
                    <p>Aprende a trabajar en equipo y escucha las opiniones de los demás.
                        Cada aportación es valiosa, y en conjunto, pueden enriquecer el aprendizaje.
                    </p>
                </div>

                <div class="tip">
                    <div class="num-tip">
                    <h2> 7 </h2>
                </div>
                    <p>Aprender a programar requiere práctica constante, por lo que 
                        no atrasarse con las actividades y tareas vistas en clase, es fundamental.</p>
                </div>

                <div class="tip">
                    <div class="num-tip">
                    <h2> 8 </h2>
                </div>
                    <p>Evita faltar a clases, nunca sabes de lo que te puedes estar perdiendo. </p>
                </div>

                <div class="tip">
                    <div class="num-tip">
                    <h2> 9 </h2>
                </div>
                    <p>Conoce a tus compañeros, muchas veces comparten intereses, grupos o gustos similares.
                        Ellos, pueden convertirse en tus mejores amigos  y acompañarte a lo largo de la carrera
                    </p>
                </div>

                <div class="tip">
                    <div class="num-tip">
                    <h2> 10 </h2>
                </div>
                    <p>Busca el apoyo de tus profesores y compañeros. El ambiente de confianza, permite que cada dificultad sea una
                        oportunidad para aprender y avanzar. </p>
                </div>

            </div>
        </div>

        


    </main>
    <?php
            include 'footer.php';
    ?>
</body>
</html>