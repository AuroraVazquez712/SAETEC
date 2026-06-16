<?php
    header('Content-Type: text/html; charset=utf-8');
    // Corrobora si INICIÓ SESIÓN
    session_start();

    require '../dynamics/config.php';
    $con = connect();

    //$nombre_apellido = $_SESSION["nombre_apellido"];
    $correo = $_SESSION["correo"];
    $nombre_completo = $_SESSION["nombre_completo"];
    $id_estudiante_ini = $_SESSION["id_perfil"];
?>
<!-----------------------VISTA DE ALUMNO PARA CONTACTO--------------------------------->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/contacta-profe.css">
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
            <a href="./index.php">
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
            <div id="datos">
                <p class="titulo">Contacta a tu profesor</p>    
                    <p class="info-alumno" name="nombre"><?php echo "Alumn@: $nombre_completo";?></p>
                    <p class="info-alumno" name="correo"><?php echo "Correo: $correo";?></p>
                    <input type="text" class="texto_ingresado" name="contacto-profe" placeholder="Comience a escribir">
                    <input class="enviar-datos" type="submit" id="envio-comentario" value="Enviar comentario">
            </div>
            <?php
                if(isset($_POST["contacto-profe"])){
                    $texto_ingresado = $_POST["contacto-profe"];
                    $_SESSION["contactos"][] = $texto_ingresado;
                    
                    $fecha = date("Y-m-d");

                    $query2= "INSERT INTO comentario (id_estudiante, comentario, fecha_publicacion)
                    VALUES ('$id_estudiante_ini','$texto_ingresado', '$fecha')";
                    $result = mysqli_query($con, $query2);
                }
            ?>
            <div id="comentario">
                <?php
                    $query = "SELECT id_comentario, id_estudiante, comentario, fecha_publicacion 
                    FROM comentario WHERE id_estudiante = '$id_estudiante_ini' ORDER BY fecha_publicacion DESC";
                    $result = mysqli_query($con, $query);
                    
                    while($registro = mysqli_fetch_assoc($result))
                    {
                        $id_comentario = $registro['id_comentario'];
                        $id_estudiante = $registro["id_estudiante"];
                        $comentario = $registro["comentario"];
                        $fecha = $registro["fecha_publicacion"];

                        echo "<p class = 'nombre-estudiante'>$nombre_completo ($fecha):<br></p>";
                        echo "<p class = 'comentario-general'>$comentario</p>";

                        // Se muestran las repuestas del profesor de acuerdo al id_comentario
                        $query_respuesta = "SELECT comentario, fecha_publicacion
                        FROM respuesta WHERE id_comentario = '$id_comentario'";
                        $result_respuesta = mysqli_query($con, $query_respuesta);

                        // Se despliegan las respuestas relacionadas con los mensajes del alumno
                        while($respuesta = mysqli_fetch_assoc($result_respuesta)){
                            $fecha_publicacion = $respuesta['fecha_publicacion'];
                            $respuesta_profesor = $respuesta['comentario'];

                            // Revisar la variable con la que se guarda la clase en la que se encuentra el alumno
                            echo "<p class = 'nombre-profesor'>hola ($fecha_publicacion):<br></p>";
                            echo "<p class = 'comentario-general'>$respuesta_profesor</p>";
                        }

                        // Identificador para las respuestas del profesor
                        $id_respuesta = "respuesta-profe_$id_comentario";
                        if(isset($_POST[$id_respuesta]) && !empty($_POST[$id_respuesta])){
                            $respuesta_alumno = $_POST[$id_respuesta];

                            $hora_respuesta = date("Y-m-d");
                            $query_insercion = "INSERT INTO respuesta (id_comentario, comentario, fecha_publicacion) 
                            VALUES ($id_comentario,'$respuesta_alumno','$fecha')";
                            $result_insercion = mysqli_query($con, $query_insercion);

                        }
                        $query2 = "SELECT comentario, fecha_publicacion FROM respuesta
                            WHERE id_comentario = '$id_comentario'";
                        $result2 = mysqli_query($con, $query2);

                        while($registros3 = mysqli_fetch_assoc($result2)){
                            $hora_respuesta = $registros3["fecha_publicacion"];
                            $respuesta_al_comentario = $registros3["comentario"] ;
                        
                            echo "<p class = 'nombre-estudiante'>$nombre_completo ($hora_respuesta):<br></p>";
                            echo "<p class = 'comentario-general'>$respuesta_al_comentario</p>";
                        }
                        // Se agrega otro input para que el alumno pueda seguir contestando
                        echo "<form method='POST'>";
                        echo "<textarea class='texto_ingresado' name ='respuesta-profe_".$id_comentario."' placeholder='Envie un mensaje''></textarea>";
                        echo "<input type='submit' class='enviar-datos' id='envio-respuesta' value='Enviar respuesta'>";
                        echo "</form>";
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