<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "SAETEC";

    function connect () {
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
        return $conexion;
    } 
    $conexion = connect ();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Star horses">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/diseña-tarea.css">
    <link rel="stylesheet" href="../statics/style/barra-busqueda-head.css">

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
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    <?php
        $id_actividad = $_GET['id'];
        //1,3
        // $grupos = $_POST[select_grupo];
        /*
        foreach($grupos as $grupo){
            $sql1 = "SELECT id_estudiante FROM estudiante WHERE id_grupo = $grupo";
            $query1 = mysqli_query($conexion, $sql1);
            while($row = mysqli_fetch_assoc($query1)){
                $id_estudiante = $row['id_estudiante'];
                // acá va el insert into
            }
        }
        */
        
        if(isset($_POST['crea_asignacion'])) {
            $insertar = "INSERT INTO asignacion (id_actividad,id_estudiante) VALUES ('$id_actividad',)";
            $asignar = mysqli_query($conexion, $insertar);
        }
    ?>
    <main>
        <div id="margen-content">   
            <h1 class="tit">Diseña la actividad:</h1>
            <?php
                $query_act = mysqli_query($conexion, "SELECT *  FROM actividad WHERE id_actividad = '$id_actividad'");
                $actividad = mysqli_fetch_assoc($query_act);

                echo"
                <h2 class='nom_act'>" . $actividad['nombre_actividad'] . "</h2> 
                <p class='desc'>" . $actividad['descripcion'] . "</p>
                ";
            ?>
            <div id="diseña">
                <form method="POST" action="">
                    <input type="radio" class="grupo" name="select_grupo[]" value="61B">
                    <label for="61B">61B</label><br>
                    <input type="radio" class="grupo" name="select_grupo" value="61D">
                    <label for="61D">61D</label><br>
                    <br><input class="publicar" type="submit" name="crea_asignacion" value="Publicar ">
                </form> 
            </div>
        </div>
    </main>
    <!-------------------------FOOTER------------------------------------------------------>
    <?php
            include 'footer.php';
    ?>
</body>
</html>