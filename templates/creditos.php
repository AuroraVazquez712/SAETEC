
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/barra-busqueda-head.css">
    <link rel="stylesheet" href="../statics/style/creditos.css">
    
    <title>SAETEC</title>
</head>
<body>
    <!------------------------Barra de búsqueda------------------------>
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
    <!------------------------BARRA DE NAVEGACIÓN------------------------>
    <?php
            include 'barrapro.php';
    ?>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!------------------------------CONTENIDO------------------------------------->
    <br>
    <h1>StatHorses</h1>
    <div id="equipo">
        <div>
            <h2>Desarrolladores</h2>
            <a href="https://github.com/Frida-ghdzz" target="_blank">García Hernández Frida</a><br>
            <a href="https://github.com/Faty1108" target="_blank">Rosales Tecuapetla Fatima Elvira</a><br>
            <a href="https://github.com/DiegoISP21" target="_blank">Salcedo Pérez Diego Iván<a><br>
            <a href="https://github.com/AuroraVazquez712" target="_blank">Vázquez Robles Aurora Betshabé</a>
        </div>
        <div>
            <h2>Asesores</h2>
            <a href="https://github.com/AlbertoFalcon" target="_blank">Gonzalez Falcon Jorge Alberto</a><br>
            <a href="https://github.com/TheUniqueFersa" target="_blank">López Morales Fernando Samuel</a>
        </div>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>