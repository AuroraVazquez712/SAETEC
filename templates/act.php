<?php
    include '../dynamics/config.php';
    $conexion = connect();
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/act.css">
    <title>Mis actividades</title>
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
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    <main>
        <div class="cuadrado">Mis actividades</div>
        <div id="columna">
        <?php
            $id_estudiante=1;
            //1 es provicional en lo q se pone el de la sesion uwuwu
            $filtra = mysqli_query($conexion, "SELECT * FROM actividad ORDER BY id_actividad DESC");

            $consulta_estudiante = "SELECT id_grupo FROM estudiante WHERE id_estudiante = $id_estudiante";
            $query_estudiante = mysqli_query($conexion, $consulta_estudiante);
            $estudiante = mysqli_fetch_assoc($query_estudiante);
            $id_grupo = $estudiante['id_grupo'];

            $consulta_grupo = "SELECT nombre_grupo FROM grupo WHERE id_grupo = $id_grupo";
            $query_grupo = mysqli_query($conexion, $consulta_grupo);
            $grupo = mysqli_fetch_assoc($query_grupo);
            echo"
                <div class='grupo'>
                <p>" . $grupo['nombre_grupo'] . "</p>
            </div>";
                
            $filtra = mysqli_query($conexion, "SELECT * FROM actividad ORDER BY id_actividad DESC");

            while($tarea = mysqli_fetch_assoc($filtra)) {
                echo "
                    <div id='listact'>
                        <p>Actividad: </p>    
                        <p>" . $tarea['nombre_actividad'] . "</p>
                        <p>" . $tarea['descripcion'] . "</p>
                        <p>Fecha entrega:" . $tarea['fecha_entrega'] . "</p>
                    </div>";
            }

            $query_entregadas = mysqli_query($conexion, "SELECT COUNT(*) as total FROM asignacion WHERE id_estudiante = $id_estudiante AND calificacion IS NOT NULL");
            $entregadas = mysqli_fetch_assoc($query_entregadas);

            $query_faltantes = mysqli_query($conexion, "SELECT COUNT(*) as total FROM asignacion WHERE id_estudiante = $id_estudiante AND calificacion IS NULL");
            $faltantes = mysqli_fetch_assoc($query_faltantes);
        ?>
        <div id="actividades">
            <div class="bloque-tareas">
                <h1>Tareas</h1>
                <?php
                    echo"
                        <div class='tareas'>
                            <p>Entregadas:". $entregadas['total'] . "</p>
                            <p>Faltantes:". $faltantes['total'] . "</p>
                        </div>";
                ?>
            </div>
            <div class="calificaciones">
                <h1>Calificaciones</h1>
                    <p>Modulo 1:</p>
                    <p>Modulo 2:</p>
                    <p>Modulo 3:</p>
                    <p>Modulo 4:</p>
                    <p>Modulo 5:</p>
            </div>
        </div>
    </main>
    <!-------------------------FOOTER------------------------------------------------------>
    <?php
            include 'footer.php';
    ?>
</body>
</html>