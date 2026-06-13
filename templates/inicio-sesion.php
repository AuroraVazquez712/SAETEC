<?php   
    if(isset($_FILES['foto_perfil']))
    {
        $archivo = $_FILES['foto_perfil'];
        $nombre_archivo = $archivo['name'];
        $ruta_temporal = $archivo['tmp_name'];

        move_uploaded_file($ruta_temporal, '../statics/img/perfil-usuario.jpg');
    }
?>
<?php
    session_start();

    if (isset($_POST["usuario"]))
    {
        require  '../dynamics/config.php';
        $con = connect();

        $usuario = trim($_POST["usuario"]);
        $contrasenha = trim($_POST["contrasenha"]);

        //Debe agregarse un usuario administrador, y profesor para checar credenciales

        //PERFIL DE ESTUDIANTE consulta 1
        $query1 = "SELECT nocta, id_grupo FROM estudiante WHERE nocta = '$usuario'";
        $result1 = mysqli_query( $con, $query1);
        $registro1 = mysqli_fetch_assoc($result1);

        //consulta 2 para contrasenha
        $query2 = "SELECT  nombre, apellido_paterno, apellido_materno, correo, contrasenha FROM perfil WHERE contrasenha = '$contrasenha'";
        $result2 = mysqli_query( $con, $query2);
        $registro2 = mysqli_fetch_assoc($result2);

        //CONSULTA DE GRUPO, TABLE GRUPO
        $id_grupo = $registro1["id_grupo"];
        $query3 = "SELECT id_grupo, nombre_grupo FROM grupo WHERE id_grupo = '$id_grupo'";
        $result3 = mysqli_query( $con, $query3);
        $registro3 = mysqli_fetch_assoc($result3);
        

        if ($registro1 && $registro2)
        {
            $_SESSION["nombre_completo"] = $registro2["nombre"] . " " . $registro2["apellido_paterno"] . " " . $registro2["apellido_materno"];
            $_SESSION["correo"] = $registro2["correo"];
            $_SESSION["nocta"] = $registro1["nocta"];
            $_SESSION["grupo"] = $registro3["nombre_grupo"];
            setcookie("usuario", $registro1["nocta"], time() + (86400)); // 1 dia = 86400 segundos, expirará en un dia
            header("Location: perfil-alumno.php");
            exit();
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

    <link rel="stylesheet" href="../statics/style/barra-busqueda-head.css">
    <link rel="stylesheet" href="../statics/style/cambio-foto.css">
    
    <title>SAETEC</title>
</head>
<body>
    <!<!-------------------------------------BARRA DE BUSQUEDA----------------------------------------->
        < <header>
        <div id="iconos_unam">
            <div class="logo-unam">
                <a href="https://www.unam.mx/">

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

    <!--Cuerpo después de la barra de busqueda-->
    <div class="cont-general">
        <div id="img-puma">
            <img id="img-inisesion" src="../statics/img/puma-telefono.jpg" alt="Puma con un teléfono">
        </div>
        <div id="form-inisesion">

            <p>INICIO DE SESIÓN</p>
            <!--Formulario de ingreso de datos-->
            <form method="POST">
                <p>Ingrese su usuario:</p>
                <input type="text" placeholder="no. de cuenta">
                <p>Ingrese su contraseña:</p>
                <input type="text" placeholder="dd/mm/aaaa">
                <br>
                <button type="submit" id="envio-datos">Enviar</button>
            </form method="POST">
            <br>
            <div>
                <p class="tienes-cuenta">¿No tienes una cuenta?</p>
                <p  class="crea-cuenta">Crea una</p>

        <!------------------------BARRA DE NAVEGACIÓN------------------------>
    <?php
            include 'barrapro.php';
    ?>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <div class="contenedor-general" style="margin-top: 50px;">
        <header class="form-header">
            <h2>Edición de foto de perfil</h2>
        </header>
            
            <div class="vista-previa">
                <?php
                    $ruta_imagen="";
                    if(file_exists("../statics/img/perfil-usuario.jpg")){
                        $ruta_imagen= "../statics/img/perfil-usuario.jpg";
                    }else{
                        $ruta_imagen="../statics/img/imagen-predeterminada.jpeg";
                    }
                    echo "<img src= '$ruta_imagen' class= 'profile-pic'>";
                ?>

                <a href="perfil-alumno.php" class="btn-editar">Regresar al perfil</a>

            </div>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?>
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
</body>
</html>