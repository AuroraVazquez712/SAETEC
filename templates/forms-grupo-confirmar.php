<?php 
    include '../dynamics/config.php';
    $conexion = connect();
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Diego Ivan Salcedo Perez">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/formalu.css">
    <title>Confirmar grupo</title>
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
    <!-------------------------------------------FORMS------------>
    <div class="container" style="margin-top: 50px;">
        <header class="form-header">
            <h2>¡Grupo Registrado!</h2>
        </header>

        <div class="alumno-registro" style="background: #f8f9fa; padding: 20px; border-left: 5px solid #3f2f83; border-radius: 5px;">
            <h3>Datos del alumno:</h3>
            
            <!-- Aquí va el PHP para mostrar los datos recibidos -->
            <?php
                if (isset($_POST['registro'])){
                    // logica de validacion de los datos y guardado de estos
                    //$id_perfil= $_POST["id_perfil"];
                    $grupo = $_POST["grupo"];
                    $plantel= $_POST["plantel"];
                    $cupo= $_POST["cupo"];
                    $salon= $_POST["salon"];
                    $id_profesor=$_POST["id_profesor"];
                    //Guardar en base de datos 

                    $insertar_datos= "INSERT INTO grupo (nombre_grupo, plantel, cupo, salon, id_profesor)
                                    VALUES('$grupo', '$plantel', '$cupo', '$salon', '$id_profesor')";

                    $inster= mysqli_query($conexion, $insertar_datos);
                    //}
                    // El ultimo id insertado en la base
                    // $last_id
                    $id_perfil = mysqli_insert_id($conexion);

                    // Ahora insertamos el resto de los datos en la tabla 
                    // estudiante. Acá ya usamos el nocta, id_grupo y id_perfil
                    $sql2 = "INSERT INTO grupo (id_grupo)
                        VALUES ($id_perfil);
                    ";
                    $query2 = mysqli_query($conexion, $sql2);

                    // nos preguntamos si sí se insertó el registro
                    if($inster){
                        // Guardar las variables que usaremos en otras vistas en variables de sesion
                        $_SESSION["id_perfil"] = $id_perfil;
                        $_SESSION["grupo"]=$grupo;
                        $_SESSION["plantel"] = $plantel;
                        $_SESSION["cupo"]=$cupo;
                        $_SESSION["salon"]=$salon;

                        echo "<p> Grupo: $grupo </p>";
                        echo "<p> Plantel: $plantel</p>";
                        echo "<p> Cupo: $cupo </p>";
                        echo "<p> Salón: $salon</p>";
                    }
                }
            ?>
        </div>
        
        <br>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>