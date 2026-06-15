<?php
<<<<<<< HEAD
    include './credencial.php';
=======
    include '../dynamics/config.php';
>>>>>>> main
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/syle.css">


    <title>SAETEC</title>
</head>
<body>
    <header>
        <div id="iconos_unam">
            <div class="logo-unam">
                <a href="https://www.unam.mx/" target="_blank">
                    <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escudo de la UNAM">
                </a>
            </div>
            <div class="logo-enp">
                <a href="http://enp.unam.mx/" target="_blank">
                    <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escudo de la UNAM">
                </a>
            </div>
            <div class="logo-enp6">
                <a href="https://www.prepa6.unam.mx/ENP6/_P6/" target="_blank">
                    <img class="iconos"src="../statics/img/logo-prepa6.png" alt="Escudo de la UNAM">
                </a>
            </div>
            <div class="logo-475años">
                <img class="iconos"src="../statics/img/logo-475años.png" alt="Escudo de la UNAM">
            </div>
        </div>
        <div id="titulo_encabezado">
            <a href="./index.html">
                <p>SAETEC</p>
            </a>
        </div>
        <div id="iconos_ete">
            <div class="logo-compu">
<<<<<<< HEAD
                <a href="https://www.ete.enp.unam.mx/CM.html" target="_blank">
=======
                <a href="https://www.ete.enp.unam.mx/CM.html">
>>>>>>> main
                    <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
                </a>
            </div>
            <div class="logo-ete"></div>
                <a href="https://www.ete.enp.unam.mx/" target="_blank">
                    <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
                </a>
            </div>
            <div class="logo-40años"></div>
                    <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
            </div>
        </div>
    </header>
    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <br>
    <main>
        <form method="GET">
            <div id="seleccion-perf">
                <label>¿Quien anda ahí?</label>
                    <div class="radio-perf">
                        <input type="radio" name="rol" id="ipt-admin" value="A" hidden>
                        <label class="imagen" for="ipt-admin">
                            <a href="./inicio-sesion.php?rol=A">
                                <img src="../statics/img/admin-icon.png" alt="Icono perfil administrador" style="width: 20%;">
                                Administrador
                            </a>
                        </label>

                        <input type="radio" name="rol" id="ipt-estudiante" value="E" hidden>
                        <label class="imagen" for="ipt-estudiante">
                            <a href="./inicio-sesion.php?rol=E">
                                <img src="../statics/img/alumn-icon.png" alt="Icono perfil estudiante" style="width: 20%;">
                                Estudiante
                            </a>
                        </label>

                        <input type="radio" name="rol" id="ipt-estudiante" value="P" hidden>
                        <label class="imagen" for="ipt-estudiante">
                            <a href="./inicio-sesion.php?rol=P">
                                <img src="../statics/img/prof-icon.png" alt="Icono perfil profesor" style="width: 20%;">
                                Profesor
                            </a>
                        </label>
                    </div>
                </label>
            </div>
        </form>
    </main>
</body>
</html>