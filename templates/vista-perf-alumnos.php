<?php
    include '../dynamics/config.php';
    $conexion = connect();
    session_start();
    $nombre = $_SESSION["nombre_completo"];
    $correo = $_SESSION["correo"];
    $nocta = $_SESSION["nocta"];
    $grupo =  $_SESSION["grupo"];
    $id_perfil = $_SESSION["id_perfil"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Frida Garcia">
    <meta name="description" content="Lista de Alumnos">
    <link rel="stylesheet" href="../statics/style/vista-perf-alumnos.css">
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
    <br>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    
    <main>
        <div id="margen">
            <div id="nom-alumn">
                <h2>Nombre del alumno: <?php echo "$nombre";?></h2>
            </div>

            <div id="bloq-info">
                <div id="info">
                    <div class="datos"> 
                        <p> E-mail: <?php echo "$correo";?></p>
                    </div>
                    <div class="datos"> 
                        <p> No. de cuenta: <?php echo "$nocta";?></p>
                    </div>
                    <div class="datos">
                        <p>Grupo: <?php echo "$grupo";?></p>
                    </div>
                </div>

                <div class="boton-ayuda">
                    <p>No. de ayudas: </p>
                </div>

                <div class="result-week">
                    <p>Resultados encuestas semanales:</p>
                    <p> Semana 1</p>
                    <p> Semana 2</p>
                    <p> Semana 3 </p>
                </div>
                <div class="otros-datos">
                <p>Otros datos</p>
            </div>            

            </div>


            <div id="escolar">
                <?php
                    $id_estudiante=1;
                    $query_entregadas = mysqli_query($conexion, "SELECT COUNT(*) as total FROM asignacion WHERE id_estudiante = $id_estudiante AND calificacion IS NOT NULL");
                    $entregadas = mysqli_fetch_assoc($query_entregadas);

                    $query_faltantes = mysqli_query($conexion, "SELECT COUNT(*) as total FROM asignacion WHERE id_estudiante = $id_estudiante AND calificacion IS NULL");
                    $faltantes = mysqli_fetch_assoc($query_faltantes);
                ?>
                <div class="tareas">
                    <h3>Tareas</h3>
                    <p>Entregadas: <?php echo $entregadas['total'];?></p>
                    <p>Faltantes: <?php echo $faltantes['total'];?></p>
                    </a>
                </div>

            <div class="Calificaciones">
                <h3>Calificaciones</h3>
                    <p>Modulo 1:</p>
                    <p>Modulo 2:</p>
                    <p>Modulo 3:</p>
                    <p>Modulo 4:</p>
                    <p>Modulo 5:</p>
                </div>
        </div>
    </main>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>