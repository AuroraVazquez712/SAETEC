<?php
    session_start();

    require  '../dynamics/config.php';
    $con = connect();

    // Verificar si el tipo de usuario fue seleccionado
    var_dump($_POST["tipo_usuario"]);
    if(isset($_POST["tipo_usuario"]))
    {
        $_SESSION["tipo_usuario"] = $_POST["tipo_usuario"];
    }
        $tipo_usuario = $_SESSION["tipo_usuario"];
        
        // Verifica si USUARIO, que es el no. de cuenta que ingreso, no esta vacío
        if (isset($_POST["usuario"]))
        {
            // USUARIO, CONTRASEÑA Y HASHEO para los datos ingresados 
            $usuario = trim($_POST["usuario"]);
            $contrasenha = trim($_POST["contrasenha"]);
            $hasheo = password_hash($contrasenha, PASSWORD_DEFAULT);

            // Cambia entre los diferentes tipos de usuario para realizar la consulta
            switch($tipo_usuario){
                case "estudiante":
                    // Query para buscar si el usuario está en 'estudiante'
                    $query = "SELECT  id_estudiante, id_grupo, nocta FROM estudiante WHERE nocta = '$usuario'";
                    $result = mysqli_query($con, $query);
                    // Contamos el numero de filas devueltas
                    $num_registros = mysqli_num_rows($result);

                    if($num_registros > 0){
                        // El usuario es estudiante
                        $registro1 = mysqli_fetch_assoc($result);
                        $id_perfil = $registro1["id_estudiante"];

                        // TABLA PERFIL CONSULTA 2
                        $query2 = "SELECT id_perfil, nombre, apellido_paterno, apellido_materno, correo, contrasenha 
                        FROM perfil WHERE id_perfil = '$id_perfil'";
                        //Cambiar el contrsenha a hasheo, después de hacer el formulario
                        $result2 = mysqli_query( $con, $query2);
                        $registro2 = mysqli_fetch_assoc($result2);

                        // Esta actualización del correo hasheado no debería realizarse aquí.
                        // Debemos suponer que el correo que tenemos guardado en la base de datos 
                        // ya está hasheado y solo compararemos hashes. Entonces, el hasheo de la 
                        // contraseña recibida del formulario que hiciste en la línea 21 
                        // está perfecto, por lo que solo falta comparar hashes para determinar 
                        // que las contraseñas sean las mismas.


                        // ACTUALIZA CONTRASEÑA CON HASH
                        $actualiza_contrasenha = 
                        "UPDATE perfil SET contrasenha = '$hasheo' WHERE contrasenha = '$contrasenha'";
                        mysqli_query($con, $actualiza_contrasenha);
                        
                        //CONSULTA DE GRUPO, TABLE GRUPO
                        $id_grupo = $registro1["id_grupo"];
                        $query3 = "SELECT id_grupo, nombre_grupo FROM grupo WHERE id_grupo = '$id_grupo'";
                        $result3 = mysqli_query( $con, $query3);
                        $registro3 = mysqli_fetch_assoc($result3);

                        $_SESSION["nombre_completo"] = $registro2["nombre"] . " " . $registro2["apellido_paterno"] . " " . $registro2["apellido_materno"];
                        $_SESSION["correo"] = $registro2["correo"];
                        $_SESSION["nocta"] = $registro1["nocta"];
                        $_SESSION["grupo"] = $registro3["nombre_grupo"];
                        $_SESSION["id_perfil"] = $registro2["id_perfil"];
                        $_SESSION["rol"] = "E";
                        setcookie("usuario", $registro1["nocta"], time() + (86400)); // 1 dia = 86400 segundos, expirará en un dia

                        header("Location: perfil-alumno.php");
                    }
                    break;

                case "profesor":
                    // Query para corroborar que sea prpofesor
                    $query = "SELECT * FROM profesor WHERE no_trabajador = '$usuario'";
                    $result = mysqli_query($con, $query);
                    $num_registros = mysqli_num_rows($result);
                    if($num_registros > 0){
                        // Sí era profesor, toca guardar sus respectivas variables de sesión, cookies,
                        // y redirigirlo

                        header("Location: profesor.php");
                    }
                    break;

                case "administrador":

                    break;
            }
        } else{
            header("Location: inicio-sesion.php");
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">

    <link rel="stylesheet" href="../statics/style/barra-busqueda-head.css">
    <link rel="stylesheet" href="../statics/style/cambio-foto.css">
    
    <title>SAETEC</title>
</head>
<body>

<!--Barra de búsqueda-->
<body>
    <header>
        <div id="iconos_unam">
            <div class="logo-unam">
                <a href="https://www.unam.mx/" target="_blank">

                    <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp">

                <a href="http://enp.unam.mx/">

                <a href="http://enp.unam.mx/" target="_blank">

                    <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp6">

                <a href="https://www.prepa6.unam.mx/ENP6/_P6/">

                <a href="https://www.prepa6.unam.mx/ENP6/_P6/" target="_blank">

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

                <a href="https://www.ete.enp.unam.mx/" target="_blank">

                    <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
                </a>
            </div>
            <div class="logo-ete"></div>

                <a href="https://www.ete.enp.unam.mx/CM.html">

                <a href="https://www.ete.enp.unam.mx/CM.html" target="_blank">

                    <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
                </a>
            </div>
            <div class="logo-40años"></div>
                    <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
            </div>
        </div>
    </header>

    <!------------------------BARRA DE NAVEGACIÓN------------------------>
    <?php
            include 'barrapro.php';
    ?>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <br>
    <!-------------------------------------CONTENIDO----------------------------------------->
    <p>INICIO DE SESIÓN</p>
    <!--Formulario de ingreso de datos-->
    <form action= "inicio-sesion.php" method ="POST">

        <label for="usuario">Ingrese su usuario:</label>
        <input name="usuario" type="text" placeholder="no. de cuenta" required>

        <label for="contrasenha">Ingrese su contraseña:</label>
        <input name="contrasenha" type="password" placeholder="ddmmaaaa" required>
        <br>
        <input type="submit" id="envio-datos" value="Iniciar sesión">
    </form>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?>
</body>
</html>