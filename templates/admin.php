<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/admin.css">

    <title>SAETEC: Admin</title>
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
    <!----------------------------------------CONTENIDO------------------------------------------->
    <main>
        <div id="contenedor">
            <div class="titulos">
                <div id="alumn">
                    <a href="./lista-alumnos.php">
                        <p><u>CONSULTA ALUMNOS</u></p>
                    </a>
                </div>
                <div id="prof">
                    <a href="./admin-consulta-profe.php">
                        <p><u>CONSULTA PROFESORES</u></p>
                    </a>
                </div>
                <div id="grupo">
                    <a href="./crea_grupo.php">
                        <p><u>AGREGA GRUPOS</u></p>
                    </a>
                </div>
            </div>
            <div class="extras">
                <div id="material">
                    <a href="./material_extra.php">
                            <p>Material extra</p>
                    </a>
                </div>
                <div id="tips">
                    <a href="./tips.php">
                        <p>¡¡Asegura el éxito en la ETE!!</p>
                    </a>
                </div>
            </div>
        </div>
        <div id="calendario">
            <img src="../statics/img/calendario.png" alt="Calendario de la ENP 2024-2025"> 
        </div>
    </main>
    <?php
            include 'footer.php';
    ?>
    
</body>
</html>