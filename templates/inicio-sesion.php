<?php
    
    session_start();

    include '../dynamics/config.php';

    if (isset($_POST["usuario"]))
    {
        require  '../dynamics/config.php';
        $con = connect();

        $usuario = trim($_POST["usuario"]);
        $contrasenha = trim($_POST["contrasenha"]);
        $hasheo = password_hash($contrasenha, PASSWORD_DEFAULT);

        //Debe agregarse un usuario administrador, y profesor para checar credenciales

        // Primero revisamos que el registro esté en la tabla estudiante
        // Si sí, entonces será un usuario de tipo estudiante. Y ponemos los datos 
        // en las variables de sesión

        // Si no, revisamos la tabla de profesor
    

        // Query para bsucar si el usuario está en 'estudiante'
        $query = "SELECT  id_estudiante, id_grupo, nocta FROM estudiante WHERE nocta = '$usuario'";
        $result = mysqli_query($con, $query);
        // Contamos el numero de filas devueltas
        $num_registros = mysqli_num_rows($result);

        if($num_registros > 0){
            // El usuario es estudiante
            // Guardaremos los datos en variables de sesion, cookies,
            // y redirigirlo
            $registro1 = mysqli_fetch_assoc($result);
            $id_perfil = $registro1["id_estudiante"];

            // TABLA PERFIL CONSULTA 2
            $query2 = "SELECT id_perfil, nombre, apellido_paterno, apellido_materno, correo, contrasenha 
            FROM perfil WHERE id_perfil = '$id_perfil'";
            //Cambiar el contrsenha a hasheo, después de hacer el formulario
            $result2 = mysqli_query( $con, $query2);
            $registro2 = mysqli_fetch_assoc($result2);

            //CONSULTA DE GRUPO, TABLE GRUPO
            $id_grupo = $registro1["id_grupo"];
            $query3 = "SELECT id_grupo, nombre_grupo FROM grupo WHERE id_grupo = '$id_grupo'";
            $result3 = mysqli_query( $con, $query3);
            $registro3 = mysqli_fetch_assoc($result3);

            if ($registro2)
            {
                $_SESSION["nombre_completo"] = $registro2["nombre"] . " " . $registro2["apellido_paterno"] . " " . $registro2["apellido_materno"];
                $_SESSION["correo"] = $registro2["correo"];
                $_SESSION["nocta"] = $registro1["nocta"];
                $_SESSION["grupo"] = $registro3["nombre_grupo"];
                $_SESSION["id_perfil"] = $registro2["id_perfil"];
                $_SESSION["rol"] = "E";
                setcookie("usuario", $registro1["nocta"], time() + (86400)); // 1 dia = 86400 segundos, expirará en un dia

                header("Location: perfil-alumno.php");
                exit;
            }
        }

        // Si el codigo llega aquí, no era estudiante
        // Debemos revisar que sea profe o admin

        $query = "SELECT * FROM profesor WHERE no_trabajador = $usuario";
        $result = mysqli_query($con, $query);
        $num_registros = mysqli_num_rows($result);
        if($num_registros > 0){
            // Sí era profesor, toca guardar sus respectivas variables de sesión, cookies,
            // y redirigirlo
        }

        // Cuando haya admin, haremos lo mismo
        





        //TABLA ESTUDIANTE CONSULTA 1
        $query1 = "SELECT nocta, id_grupo FROM estudiante WHERE nocta = '$usuario'";
        $result1 = mysqli_query( $con, $query1);
        $registro1 = mysqli_fetch_assoc($result1);

        // TABLA PERFIL CONSULTA 2
        $query2 = "SELECT id_perfil, nombre, apellido_paterno, apellido_materno, correo, contrasenha 
        FROM perfil WHERE contrasenha = '$contrasenha'";
        //Cambiar el contrsenha a hasheo, después de hacer el formulario
        $result2 = mysqli_query( $con, $query2);
        $registro2 = mysqli_fetch_assoc($result2);

        //CONSULTA DE GRUPO, TABLE GRUPO
        $id_grupo = $registro1["id_grupo"];
        $query3 = "SELECT id_grupo, nombre_grupo FROM grupo WHERE id_grupo = '$id_grupo'";
        $result3 = mysqli_query( $con, $query3);
        $registro3 = mysqli_fetch_assoc($result3);

        
        // Verificar ci es E, A o P
        if ($registro1 && $registro2)
        {
            $_SESSION["nombre_completo"] = $registro2["nombre"] . " " . $registro2["apellido_paterno"] . " " . $registro2["apellido_materno"];
            $_SESSION["correo"] = $registro2["correo"];
            $_SESSION["nocta"] = $registro1["nocta"];
            $_SESSION["grupo"] = $registro3["nombre_grupo"];
            $_SESSION["id_perfil"] = $registro2["id_perfil"];
            setcookie("usuario", $registro1["nocta"], time() + (86400)); // 1 dia = 86400 segundos, expirará en un dia

            header("Location: perfil-alumno.php");
            exit;
        } else {
            $error = "No coinciden usuario o contraseña";
        }
    } 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/inicio-sesion.css">
    <link rel="stylesheet" href="../statics/style/syle.css">

    <title>SAETEC</title>
</head>
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
                <a href="http://enp.unam.mx/" target="_blank">
                    <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp6">
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
    <!----------------------------BARRA DE NAVEGACIÓN----------------------------->
    <nav class="nav">
        <div class="container">
            <nav class="menu">
                <a href="./index.php">Inicio</a>
                <a href="./inicio-sesion.php">Perfil</a>
                <a href="./inicio-sesion.php">Acerca</a>
                <a href="./inicio-sesion.php">Creditos</a>
            </nav>
        </div>
    </nav>
    <br>
    <!--Cuerpo después de la barra de busqueda-->
    <div class="cont-general">
        <div id="img-puma">
            <img id="img-inisesion" src="../statics/img/puma-telefono.jpg" alt="Puma con un teléfono">
        </div>
        <div id="form-inisesion">
            <br>
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
        </div>
    </div>
    <!-----------------------------------FOOTER----------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>