<?php
    header('Content-Type: text/html; charset=utf-8');
    // Corrobora si INICIÓ SESIÓN
    session_start();

    require '../dynamics/config.php';
    $con = connect();

    //$nombre_apellido = $_SESSION["nombre_apellido"];
    $correo = $_SESSION["correo"];
    $nombre_profesor = $_SESSION["nombre_completo"];
    $id_estudiante = $_SESSION["id_perfil"];
?>
<!-----------------------VISTA DE ALUMNO PARA CONTACTO--------------------------------->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/mensaje-alumno.css">
    <title>SAETEC: Alumno</title>
</head>
<body>
    <!---------------ENCABEZADO--------------------------->
    <header>
        <div id="iconos_unam">
            <div class="logo-unam">
                <a href="https://www.unam.mx/" target="_blank">
                    <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp">
                <a href="http://enp.unam.mx/"  target="_blank">
                    <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp6">
                <a href="https://www.prepa6.unam.mx/ENP6/_P6/"  target="_blank">
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
                <a href="https://www.ete.enp.unam.mx/CM.html"  target="_blank">
                    <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
                </a>
            </div>
            <div class="logo-ete"></div>
                <a href="https://www.ete.enp.unam.mx/"  target="_blank">
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
    <!------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    <div id="contenedor">
        <div id="img_perfil">
                <img src="../statics/img/puma.png" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
        </div>  
        <form id="alumno" method="POST">
            <div id="datos" >
                <p class="titulo">Dudas, comentarios y opiniones de los alumnos</p>    
                    <p name="nombre"><?php echo "Profesor@: $nombre_profesor";?></p>
                    <p name="correo"><?php echo "Correo: $correo";?></p>
            </div>
            <div id="comentario">
                <?php
                    $query = "SELECT id_comentario, id_estudiante, comentario, fecha_publicacion FROM comentario 
                    ORDER BY fecha_publicacion DESC";
                    $result = mysqli_query($con, $query);
                    
                    // Va leyendo los registros de los alumnos y los despliega junto a un textarea y un input
                    while($registro = mysqli_fetch_assoc($result))
                    {
                        $id_comentario = $registro['id_comentario'];
                        $id_estudiante = $registro["id_estudiante"];
                        $comentario = $registro["comentario"];
                        $fecha = $registro["fecha_publicacion"];


                        $query2 = "SELECT id_perfil, nombre, apellido_paterno, apellido_materno FROM perfil WHERE id_perfil = '$id_estudiante'";
                        $result2 = mysqli_query($con, $query2);
                        $registro2 = mysqli_fetch_assoc($result2);

                        $nombre_completo = $registro2["nombre"] . " " . $registro2["apellido_paterno"] . " " . $registro2["apellido_materno"];
                        
                        // Despliega el nombre, fecha y mensaje, su input para contestar y el botón de envio
                        echo "<p>$nombre_completo ($fecha):<br>$comentario</p>";
                        

                        $id_respuesta = "respuesta-profe_".$registro['id_comentario'];
                        // Recibe la respuesta del profesor y la inserta en la tabla 'respuesta'
                        if(isset($_POST[$id_respuesta])){
                            $respuesta_profe = $_POST[$id_respuesta];

                            $fecha = date("Y-m-d");
                            $query_insercion = "INSERT INTO respuesta (id_comentario, comentario, fecha_publicacion) 
                            VALUES ($id_comentario,'$respuesta_profe','$fecha')";
                            $result_insercion = mysqli_query($con, $query_insercion);                            
                            //echo "<p>$nombre_profesor ($fecha):<br>$respuesta_profe</p>";
                            
                        }
                        $query2 = "SELECT comentario, fecha_publicacion FROM respuesta
                            WHERE id_comentario = '$id_comentario'";
                        $result2 = mysqli_query($con, $query2);
                        while($registros3 = mysqli_fetch_assoc($result2)){
                            $hora_respuesta = $registros3["fecha_publicacion"];
                            $respuesta_al_comentario = $registros3["comentario"] ;
                            echo "<p>$nombre_profesor ($hora_respuesta):<br>$respuesta_al_comentario</p>";
                        }
                        echo "<textarea name ='respuesta-profe_".$registro['id_comentario']."' placeholder='Envie un mensaje''></textarea>";
                        echo "<input type='submit' id='envio-respuesta'>";
                    }
                    mysqli_close($con);
                ?>
            </div>
        </form>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>