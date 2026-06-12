<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "SAETEC";

    function connect () {
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
        return $conexion;
    } 
    $conexion = connect ();
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Frida Garcia">
    <meta name="description" content="Lista de Alumnos">
    <link rel="stylesheet" href="../statics/style/lista-alumnos.css">
    <title>SAETEC: Lista de alumnos</title>
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
    <?php
        include 'barra-lateral.php';
    ?>
    <!--------------------------------------------------CONTENIDO---------------------------------->
    <main>
        <div id="bloque-list">
            <div class="lista_alum">
                <img src="../statics/img/lista_alumnos.png" alt="Imagen para acceder a la lista de alumnos" title="añadir alumno">
            </div>

            <div id="bloque-grupos">
                <div id="grupos">
                    <div class="boton-grupos">
                        <p>Grupo: 61B</p> 
                    </div>
                    <div class="boton">
                        <a href="./formalu.php">
                            <img class="sub" src="../statics/img/boton-list-alumn.png">
                        </a>
                    </div>
                </div>
                <?php
                    //$grupo = mysqli_query($conexion, "SELECT * FROM estudiante WHERE id_grupo = '1'");
                    $filtra = mysqli_query($conexion, "SELECT * FROM perfil WHERE rol = 'E'");
                    while($perfil = mysqli_fetch_assoc($filtra)) {
                        echo "<div class='alumno'>
                                <a href='vista-perf-alumnos.php'>
                                    <p>" . $perfil['nombre'] . " " . $perfil['apellido_paterno'] . " " . $perfil['apellido_materno'] . "</p>
                                </a>
                            </div>";
                    }
                ?>
            </div>

            <div class="bloque-grupos">
                <div id="grupos">
                    <div class="boton-grupos">
                        <p>Grupo: 61D</p> 
                    </div>
                    <div class="boton">
                        <a href="./formalu.php">
                            <img class="sub" src="../statics/img/boton-list-alumn.png">
                        </a>
                    </div>
                </div>
                <?php
                    //$grupo = mysqli_query($conexion, "SELECT * FROM estudiante WHERE id_grupo = '2'");
                    $filtra = mysqli_query($conexion, "SELECT * FROM perfil WHERE rol = 'E'");
                    while($perfil = mysqli_fetch_assoc($filtra)) {
                        echo "<div class='alumno'>
                                <a href='vista-perf-alumnos.php'>
                                    <p>" . $perfil['nombre'] . " " . $perfil['apellido_paterno'] . " " . $perfil['apellido_materno'] . "</p>
                                </a>
                            </div>";
                    }
                ?>
            </div>
        </div>

        <div id="barra-lateral">
            <div class="perfil_prof">
                <p>PERFIL DEL PROFESOR </p>
            </div>
            <div  class="calendario">
                <img src="../statics/img/Calendario-2027.png">
            </div>
        </div>
    </main>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>