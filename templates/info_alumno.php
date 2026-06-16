<?php
    include '../dynamics/config.php';
    $conexion = connect();
    session_start();
    // Debemos usar aquí la variable $_POST["id_perfil"], porque de lista-alumnos.php se envía un formulario
    $id_perfil=$_POST["id_perfil"];
    //Perfil
    $sql="SELECT nombre, apellido_paterno, apellido_materno FROM perfil WHERE id_perfil=$id_perfil";
    $query= mysqli_query($conexion, $sql);
    $resp_perfil= mysqli_fetch_assoc($query);
    //Estudiante 
    $sql2= "SELECT * FROM estudiante WHERE id_estudiante=$id_perfil";
    $query2= mysqli_query($conexion, $sql2);
    $resp_estudiante= mysqli_fetch_assoc($query2);
    //var_dump($resp_estudiante);
    //Grupo
    $id_grupo=$resp_estudiante['id_grupo'];
    $sql3="SELECT nombre_grupo FROM grupo WHERE id_grupo=$id_grupo";
    $query3= mysqli_query($conexion, $sql3);
    $resp_grupo= mysqli_fetch_assoc($query3);
    //Interés
    $id_interes=$resp_estudiante['id_interes'];
    $sql4="SELECT nombre_interes FROM interes WHERE id_interes=$id_interes";
    $query4= mysqli_query($conexion, $sql4);
    $resp_interes= mysqli_fetch_assoc($query4);
    //Dificultad
    $id_dificultad=$resp_estudiante['id_dificultad'];
    $sql5="SELECT nombre_dificutad FROM dificultad WHERE id_dificultad=$id_dificultad";
    $query5= mysqli_query($conexion, $sql5);
    $resp_dificultad= mysqli_fetch_assoc($query5);
    //Motivación
    $id_razon=$resp_estudiante['id_razon'];
    $sql6="SELECT nombre_razon FROM razon_ingreso WHERE id_razon=$id_razon";
    $query6= mysqli_query($conexion, $sql6);
    $resp_razon= mysqli_fetch_assoc($query6);
    //Hábito
    $id_habito=$resp_estudiante['id_habito'];
    $sql7="SELECT nombre_habito FROM habito_estudio WHERE id_habito=$id_habito";
    $query7= mysqli_query($conexion, $sql7);
    $resp_habito= mysqli_fetch_assoc($query7);
    //Cuest. Semanal
    $sql8="SELECT * FROM cuestionario WHERE id_estudiante=$id_perfil";
    $query8= mysqli_query($conexion, $sql8);
    $resp_cuestionario= mysqli_fetch_assoc($query8);
    //Cuest. Sem nombre emocion
    $id_emocion=$resp_cuestionario['id_emocion'];
    $sql9= "SELECT nombre_emocion FROM emocion WHERE id_emocion=$id_emocion";
    $query9= mysqli_query($conexion, $sql9);
    $resp_emocion= mysqli_fetch_assoc($query9);

    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vázquez">
    <meta name="description" content="Lista de Alumnos">
    <link rel="stylesheet" href="../statics/style/info_alumno.css">
    <title>SAETEC: Lista de alumnos: info perfil</title>
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
    <!--------------------------------------------------CONTENIDO---------------------------------->
    <main>
        <div id="form-semanal">
            <div id="grupo">
                <a class="tit" href="./admin.php">SOBRE EL ALUMNO</a>
            </div>
            <div id="datos"> 
                <p><strong> Nombre: </strong><?php echo $resp_perfil['nombre']; ?></p>
                <p><strong>Apellido Paterno: </strong><?php echo $resp_perfil['apellido_paterno']; ?></p>
                <p><strong>Apellido Materno: </strong><?php echo $resp_perfil['apellido_materno']; ?></p>
                <p><strong>No. de cuenta: </strong><?php echo $resp_estudiante['nocta']; ?></p>
                <p><strong>Grupo: </strong><?php echo $resp_grupo['nombre_grupo']; ?></p>
                <p><strong>Interés: </strong><?php echo $resp_interes['nombre_interes']; ?></p>
                <p><strong>Dificultad: </strong><?php echo $resp_dificultad['nombre_dificutad']; ?></p>
                <p><strong>Motivación: </strong><?php echo $resp_razon['nombre_razon']; ?></p>
                <p><strong>Hábito de estudio: </strong><?php echo $resp_habito['nombre_habito']; ?></p>

            </div>
        </div>

        <div id="experiencia">
            <div id="grupo">
                <a class="tit" href="./admin.php">EXPERIENCIA</a>
            </div>
            <div id="emocion"> 
                <p><i>Esta semana me sentí: </i><?php echo $resp_emocion['nombre_emocion'] ?></p>
                <p><i>Cuesta trabajo: </i><?php echo $resp_cuestionario['cuesta_trabajo'] ?></p>
                <p><i>Debe reforzar: </i><?php echo $resp_cuestionario['areas_oportunidad'] ?></p>
                <p><i>No entendió: </i><?php echo $resp_cuestionario['explicacion'] ?></p>
                <p><i>Fecha de envío: </i><?php echo $resp_cuestionario['fecha_emision'] ?></p>

            </div>
        </div>
    </main>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>