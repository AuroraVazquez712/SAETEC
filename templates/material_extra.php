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

    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <?php
            include 'barrapro.php';
    ?>
    <br>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
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
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>