<?php
    include '../dynamics/config.php';
    $conexion = connect();
    session_start();
    $id_estudiante = $_SESSION["id_perfil"];
?> 
<?php
    if (isset($_POST["cuesta_trabajo"])) {
        var_dump($_POST);
        $id_emocion = $_POST["emocion"];
        $cuesta_trabajo = $_POST["cuesta_trabajo"];
        $areas_oportunidad = $_POST["areas_oportunidad"];
        $explicacion = $_POST["explicacion"];
        $fecha_emision = $_POST["fecha_emision"];
        $query = "insert into cuestionario (id_estudiante, id_emocion, cuesta_trabajo, 
        areas_oportunidad, explicacion, fecha_emision)
        values ('$id_estudiante', '$id_emocion', '$cuesta_trabajo', '$areas_oportunidad', 
        '$explicacion', '$fecha_emision')";
        //echo "<br>$query";
        $result = mysqli_query($conexion, $query);
        if ($result) {
            header("Location: ./gracias.php");
            exit;
        } else {
            echo "Nada";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/form_semanal.css">

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
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    
    <main>
        <form id="contenido" method="POST">
            <div id="sentir_estudiante">
                <label>Esta semana me sentí:</label>
                    <div class="radio-group">
                        <input type="radio" name="emocion" id="ipt-feliz" value="1" hidden>
                        <label for="ipt-feliz"> <img src="../statics/img/emocion_feliz.png" alt="feliz"> </label>
                            
                        <input type="radio" name="emocion" id="ipt-maso" value="2" hidden>
                        <label for="ipt-maso"> <img src="../statics/img/emocion_maso.png" alt="mas o menos"> </label>
                            
                        <input type="radio" name="emocion" id="ipt-triste" value="3" hidden>
                        <label for="ipt-triste"> <img src="../statics/img/emocion_triste.png" alt="triste"> </label>

                        <input type="radio" name="emocion" id="ipt-cansado" value="4" hidden>
                        <label for="ipt-cansado"> <img src="../statics/img/emocion_cansado.png" alt="cansado"> </label>
                    </div>
            </div>
            <div id="preguntas">
                <div class="resp">
                    <label for="cuesta_trabajo">¿Qué te cuesta trabajo?:</label>
                    <textarea name="cuesta_trabajo" id="txta-instrucciones" rows="4" placeholder="Me cuesta..." required></textarea>
                </div>
                <div class="resp">
                    <label for="areas_oportunidad">¿Qué debo reforzar?:</label>
                    <textarea name="areas_oportunidad" id="txta-instrucciones" rows="4" placeholder="Debería repasar..." required></textarea>
                </div>
                <div class="resp">
                    <label for="explicacion">¿Qué no entendí:</label>
                    <textarea name="explicacion" id="txta-instrucciones" rows="4" placeholder="Me gustaría que me explicaran..." required></textarea>
                </div>
                <div class="resp">
                    <label for="fecha_emision">Fecha de envio:</label>
                    <input type="date" name="fecha_emision" id="ipt-fecha_emision" required>
                </div>
            </div>
            <div id="enviar">
                <button type="submit" class="btn-submit">Subir</button>
            </div>
        </form>
    </main>
    <?php
            include 'footer.php';
    ?>

</body>
</html>