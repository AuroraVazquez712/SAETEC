<?php
    include '../dynamics/config.php';
    $con = connect();
    include './login.php';
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

                <?php
                    switch ($_SESSION["tipo_usuario"])
                    {
                        case $_SESSION["rol"] = 'A':
                ?>
                            <label for="usuario">Ingrese su usuario:</label>
                            <input name="usuario" type="text" placeholder="nombre de usuario" required>
                <?php
                            break;
                        case $_SESSION["tipo_usuario"] = 'E':
                ?>
                            <label for="usuario">Ingrese su usuario:</label>
                            <input name="usuario" type="text" placeholder="no. de cuenta" required>
                <?php
                            break;
                        case $_SESSION["tipo_usuario"] = 'P':
                ?>
                            <label for="usuario">Ingrese su usuario:</label>
                            <input name="usuario" type="text" placeholder="no. de trabajador" required>
                <?php
                            break;
                    }
                ?>

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