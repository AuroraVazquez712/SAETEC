<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/material_extra.css">
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
    <aside>
        <div class="capa"> </div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu"/>
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <h2>324308734</h2>
                    <a href="./perfil-alumno.html">Mi perfil</a>
                    <hr>
                    <a href="vista-perf-alumnos.html">Mis calificaciones</a>
                    <hr>
                    <a href="vista-perf-alumnos.html">Mis actividades</a>
                    <hr>
                    <a href="#">¿Cómo te has sentido?</a>
                    <hr>
                    <a href="../docs/2019_Acuerdo_Rectoria_02.pdf">Políticas de seguridad</a>
                    <hr>
                    <a href="#">Modificar datos</a>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
    </aside>
    <!----------------------------------------CONTENIDO------------------------------------------->
    <main>
        <div id="materiales">
            <div id="modulo">
                <div class="titulo_modulo">Módulo 1</div>
                <div class="ejercicio">
                    <h3> Ejercicios: </h3>
                        <p>Aquí va el ejercicio UwU</p>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        <p>Link al super video</p>
                </div>
            </div>
            <div id="modulo">
                <div class="titulo_modulo">Módulo 2</div>
                <div class="ejercicio">
                    <h3> Ejercicios: </h3>
                        <p>Aquí va el ejercicio UwU</p>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        <p>Link al super video</p>
                </div>
            </div>
            <div id="modulo">
                <div class="titulo_modulo">Módulo 3</div>
                <div class="ejercicio">
                    <h3> Ejercicios: </h3>
                        <p>Aquí va el ejercicio UwU</p>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        <p>Link al super video</p>
                </div>
            </div>
            <div id="modulo">
                <div class="titulo_modulo">Módulo 4</div>
                <div class="ejercicio">
                    <h3> Ejercicios: </h3>
                        <p>Aquí va el ejercicio UwU</p>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        <p>Link al super video</p>
                </div>
            </div>
            <div id="modulo">
                <div class="titulo_modulo">Módulo 5</div>
                <div class="ejercicio">
                    <h3> Ejercicios: </h3>
                        <p>Aquí va el ejercicio UwU</p>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        <p>Link al super video</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>