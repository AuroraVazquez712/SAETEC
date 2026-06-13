<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Diego Ivan Salcedo Perez">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/crea_grupo.css">
    <title>Crea grupo</title>
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
    <br>
    <!-------------------------------------------FORMS------------>
    <div id="contenedor">
        <div id="grupo">
            <p><u>AGREGA GRUPOS</u></p>
        </div>
        <div class="botones">
            <div id="añade">
                <a href="./forms-grupo.php">
                    <p><strong>+</strong></p>
                </a>
                </div>
                <div id="borra">
                    <p><strong>-</strong></p>
                </div>
            </div>
            <div id="lista-profes">
        
                <?php  /* 
                    $sql = "SELECT * FROM perfil WHERE rol = 'P'";
                    $filtra = mysqli_query($conexion, $sql);

                    while($perfil = mysqli_fetch_assoc($filtra)) {
                        echo "
                        <form method='POST' action=''>
                            <input type='hidden' name='id_perfil' value='" . $perfil['id_perfil'] . "'>
                            <button type='submit' class='alumno' name='ver_profe'>
                                    <p>" . $perfil['nombre'] . " 
                                    " . $perfil['apellido_paterno'] . " 
                                    " . $perfil['apellido_materno'] . "</p> 
                            </button>
                        </form>";
                    }  */  
                ?>
            </div>
        </div>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>