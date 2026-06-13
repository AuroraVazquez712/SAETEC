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
    <link rel="stylesheet" href="../statics/style/forms-grupo.css">
    <title>Formulario de grupos</title>
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
    <div id="grupo">
        <a href="./admin.php"><u>AGREGA GRUPOS</u></a>
    </div>
    <form action="./forms-grupo-confirmar.php" method="POST">
        <div class="form-grid">

            <div class="input-group">
                <label for="grupo">Nombre del grupo:</label>
                <input type="text" name="grupo" id="ipt-grupo" placeholder="61B/61D" required>
            </div>
            <div class="input-group">
                <label for="plantel">Plantel:</label>
                <select name="plantel" id="ipt-plantel" required>
                    <option value="" disabled selected>Elige tu plantel...</option>
                    <option value="Escuela Nacional Preparatoria No. 6 Antonio Caso">
                        Escuela Nacional Preparatoria No. 6 Antonio Caso</option>
                </select>
            </div>
            <div class="input-group">
                <label for="cupo">Cupo: </label>
                <input type="number" name="cupo" id="ipt-cupo" placeholder="50" required>
            </div>
            <div class="input-group">
                <label for="salon">Salón :</label>
                <input type="text" name="salon" id="ipt-salon" placeholder="LACEC" required>
            </div>
            <div class="input-group">
                <label for="profesor">Profesor:</label>
                <select name="id_profesor" id="ipt-profesor" required>
                    <option value="" disabled selected>Elige un profesor...</option>
                    <?php
                        $sql = "SELECT id_perfil, nombre, apellido_paterno, apellido_materno FROM perfil WHERE rol = 'P'";
                        $query = mysqli_query($conexion, $sql);
                        while ($profe = mysqli_fetch_assoc($query)) {
                            echo "<option value='" . $profe['id_perfil'] . "'>"
                                . $profe['nombre'] . " "
                                . $profe['apellido_paterno'] . " "
                                . $profe['apellido_materno']
                                . "</option>";
                        }
                    ?>
                </select>
            </div>    
        </div>
        <button type="submit" name="registro" class="btn-submit">Confirmar</button>
    </form>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>