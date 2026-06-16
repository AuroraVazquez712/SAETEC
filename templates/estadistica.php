<?php
    include '../dynamics/config.php';
    $con = connect();
    session_start();

    if (isset($_POST["interes"])) {
        var_dump($_POST);
        $id_estudiante = $_SESSION["id_perfil"];
        $id_interes = $_POST["interes"];
        $id_dificultad = $_POST["dificultad"];
        $id_razon = $_POST["razon_ingreso"];
        $id_habito = $_POST["habito_estudio"];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/estadistica.css">
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
    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <?php
            include 'barrapro.php';
    ?>
    <br>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    <main>
        <?php
            $query = "SELECT id_estudiante, id_interes FROM estudiante WHERE id_interes = 2";
            $result = mysqli_query($con, $query);
        ?>
        <div id="contenido">
            <div id="grupo">
                <a><u>ESTADISTICA</u></a>
            </div>
            <?php if (!empty($result)) {?>
                <table>
                    <h1>Interes en artes</h1>
                    <thead>
                        <tr>
                            <th>estudiante</th>
                            <th>interes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($result as $fila) {
                                $alumno = $fila["id_estudiante"];
                                $interes = $fila["id_interes"];
                        ?>
                                <tr>
                                    <td><?php echo "$alumno"; ?></td>
                                    <td><?php echo "$interes"; ?></td>
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            <?php } ?>

        <?php
        $query = "SELECT id_estudiante, id_interes FROM estudiante WHERE id_interes = 3";
        $result = mysqli_query($con, $query);
        ?>
            <?php if (!empty($result)) {?>
                <table>
                    <h1>Interes en tecnología</h1>
                    <thead>
                        <tr>
                            <th>estudiante</th>
                            <th>interes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($result as $fila) {
                                $alumno = $fila["id_estudiante"];
                                $interes = $fila["id_interes"];
                        ?>
                                <tr>
                                    <td><?php echo "$alumno"; ?></td>
                                    <td><?php echo "$interes"; ?></td>
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            <?php } ?>
        </div>

    
    </main>
    <!------------------------FOOTER --------------------------------->
    <?php
        include 'footer.php';
    ?> 
</body>
</html>