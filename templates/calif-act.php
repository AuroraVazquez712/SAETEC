<?php
    include '../dynamics/config.php';
    $conexion = connect();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Star horses">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/calif-act.css">
    <link rel="stylesheet" href="../statics/style/barra-busqueda-head.css">

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
    <?php
        //$_SESSION["id_actividad"];
        $id_actividad = $_GET['id'];
        if(isset($_POST['calificar'])) {
            $calificaciones = $_POST['calificacion'];
            $asignaciones = $_POST['id_asignacion'];

            foreach($asignaciones as $cali => $id_asignacion) {
                $calif = $calificaciones[$cali];
                if($calif = '') {
                    $asigna = "UPDATE asignacion SET calificacion = NULL WHERE id_asignacion = $id_asignacion";
                } 
                else {
                    $asigna = "UPDATE asignacion SET calificacion = $calif WHERE id_asignacion = $id_asignacion";
                }
                mysqli_query($conexion, $asigna);
            }
        }
    ?>
    <main>
        <div id="margen-content">   
            <h1 class="tit">Califica tu actividad:</h1>
            <?php
                $query_act = mysqli_query($conexion, "SELECT * FROM actividad WHERE id_actividad = $id_actividad");
                $actividad = mysqli_fetch_assoc($query_act);

                echo"
                <h2 class='nom_act'>" . $actividad['nombre_actividad'] . " 
                :" . $actividad['descripcion'] . "</h2>
                ";
            ?> 
            <form action="?id=<?php echo $id_actividad; ?>" method="POST">
            <?php
                $consulta_asignaciones = "SELECT * FROM asignacion WHERE id_actividad = $id_actividad";
                $query_asignaciones = mysqli_query($conexion, $consulta_asignaciones);

                $grupo_actual = null;

                while($asignacion = mysqli_fetch_assoc($query_asignaciones)) {
                    $id_estudiante = $asignacion['id_estudiante'];
                    $consulta_estudiante = "SELECT id_grupo FROM estudiante WHERE id_estudiante = $id_estudiante";
                    $query_estudiante = mysqli_query($conexion, $consulta_estudiante);
                    $estudiante = mysqli_fetch_assoc($query_estudiante);
                    $id_grupo = $estudiante['id_grupo'];

                    $consulta_grupo = "SELECT nombre_grupo FROM grupo WHERE id_grupo = $id_grupo";
                    $query_grupo = mysqli_query($conexion, $consulta_grupo);
                    $grupo = mysqli_fetch_assoc($query_grupo);
                    $nombre_grupo = $grupo['nombre_grupo'];

                    $consulta_perfil = "SELECT * FROM perfil WHERE id_perfil = $id_estudiante";
                    $query_perfil = mysqli_query($conexion, $consulta_perfil);
                    $perfil = mysqli_fetch_assoc($query_perfil);

                    if($grupo_actual != $id_grupo) {
                        if($grupo_actual != null) 
                        echo "</div>";
                        echo"
                        <div class='bloque-grupo'>
                        <div class='grupo'>Grupo " . $nombre_grupo . "
                        </div>";
                        $grupo_actual = $id_grupo;
                        }
                    echo"
                    <div id='lista-alumnos'>
                    <span class='alumno'>" . $perfil['nombre'] . " " . $perfil['apellido_paterno'] . " " . $perfil['apellido_materno'] . "</span>
                    <input type='number' name='calificacion[]' value='" . $asignacion['calificacion'] . "' min='0' max='10'>
                    <input type='hidden' name='id_asignacion[]' value='" . $asignacion['id_asignacion'] . "'>
                    <button type='submit' name='calificar' class='boton'>Calificar</button>
                    </div>";
                }
                if($grupo_actual != null) 
                echo"
                <br><div class='grupo'>Grupo " . $grupo['nombre_grupo'] . "</div>
                ";
                
            ?>
            </form>
        </div>
    </main>
    <!-------------------------FOOTER------------------------------------------------------>
    <?php
            include 'footer.php';
    ?>
</body>
</html>