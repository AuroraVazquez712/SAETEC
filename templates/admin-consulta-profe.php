<?php

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: forms-profe.php");
    exit();
}
    $nombre= $_POST["nombre"];
    $apellido_paterno= $_POST["apellidopat"];
    $correo= $_POST["correo"];
    $rfc=$_POST["rfc"];
    $grupo= $_POST["grupo"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/admin-consulta-profe.css">

    <title>SAETEC: Admin</title>
</head>
<body>
    <!---------------ENCABEZADO--------------------------->
    <header>
        <div id="iconos_unam">
            <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escuedo de la UNAM">
            <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
            <img class="iconos"src="../statics/img/logo-prepa6.png" alt="Escuedo de la UNAM">
            <img class="iconos"src="../statics/img/logo-475años.png" alt="Escuedo de la UNAM">
        </div>
        <div id="titulo_encabezado">
            <p>SAETEC</p>
        </div>
        <div id="iconos_ete">
            <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
            <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
            <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
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
        <div id="contenedor">
            <div id="prof">
                <p><u>CONSULTA PROFESORES</u></p>
            </div>
            <div class="botones">
                <div id="añade">
                    <a href="./forms-profe.php">
                        <p><strong>+</strong></p>
                    </a>
                </div>
                <div id="borra">
                    <p><strong>-</strong></p>
                </div>
            </div>
            <div id="lista-profes">
                <div class="profe">
                    <p><i><?php echo "$nombre";?></i></p>
                </div>
                <div class="profe">
                    <p>Carlos</p>
                </div>
            </div>
        </div>
        <div id="datos-profe">
            <div id="nombre">
                <h1>Nombre: <i><?php echo "$nombre";?></i></h1>
            </div>
            <div id="datos-profe_esp">
                <div>
                    <p name="correo-usuario"><?php echo "Correo: $correo";?></p>
                    <p name="rfc"><?php echo "RFC: $rfc";?></p>
                </div>
            </div>
            <div id="grupo">
                <p name="grupo"><?php echo "Grupo: $grupo";?></p>
            <div>
        </div>
    </main>
    <?php
            include 'footer.php';
    ?>
    
</body>
</html>