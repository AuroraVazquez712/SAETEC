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
    <meta name="autor" content="Equipo 4: Star horses">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/publi-tarea.css">
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
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    
    <main>
        <div id="margen-content">
            <input type="checkbox" id="toggle">
            <div id="publi-nueva-tarea"> 
                <div id="nueva-tarea"> 
                    <div id="bloque">
                        <div class="titu">
                        <label for="toggle">    
                                <div class="boton">+</div>
                        </label>
                            <h2>Publica una nueva tarea</h2>
                        </div>
                    </div>
                </div>
                
                <div id="text-tarea">
                    <form method="POST" action="">
                        <label class="name_desc" >Nombre actividad:</label><br>
                        <input type="text" id="nombre_actividad" name="nombre_actividad"><br>
                        <label class="name_desc" >Descripción:</label><br>
                        <textarea placeholder="Descripcion de nueva tarea:" id="descripcion" name="descripcion" > </textarea>
                        <br><label class="name_desc" >Fecha de entrega:</label><br>
                        <input type="date" id="fecha_entrega" name="fecha_entrega"><br>
                        <br><input class="publicar" type="submit" name="crea_act" value="Publicar ">
                    </form>
                </div>
            </div>
            <div id="tarea-publi"> 
                <div id="bloque"></div>
                    <div class="publicadas">
                        <h3>Tareas publicadas:</h3>
                    </div>
                </div>
            <?php
                $filtra = mysqli_query($conexion, "SELECT * FROM actividad ORDER BY id_actividad DESC");

                while($tarea = mysqli_fetch_assoc($filtra)) {
                    echo "
                        <div id='tareas'>
                        <p>Actividad: </p>    
                        <p>" . $tarea['nombre_actividad'] . "</p>
                        <p>Descripcion: </p>
                        <p>" . $tarea['descripcion'] . "</p>
                        <p>Fecha entrega: </p>
                        <p>" . $tarea['fecha_entrega'] . "</p>
                        </div>";
                }
            ?>
            </div>
        </div>
    </main>

        
    <?php

        if(isset($_POST['crea_act'])) {
            $nombre_actividad= $_POST['nombre_actividad'];
            $descripcion= $_POST['descripcion'];
            $fecha_entrega= $_POST['fecha_entrega'];

            $insertar_datos = "INSERT INTO actividad (id_profesor,nombre_actividad ,descripcion ,fecha_entrega ) VALUES (4, '$nombre_actividad','$descripcion','$fecha_entrega')";
            
            $ejecutar_insertar = mysqli_query ($conexion,$insertar_datos);
        }
    ?>
    <!-------------------------FOOTER------------------------------------------------------>
    <?php
            include 'footer.php';
    ?>
</body>
</html>