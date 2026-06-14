<?php
    include '../dynamics/config.php';
    $conexion = connect();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Frida Garcia">
    <meta name="description" content="Lista de Alumnos">
    <link rel="stylesheet" href="../statics/style/lista-alumnos.css">
    <title>SAETEC: Lista de alumnos</title>
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
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!--------------------------------------------------CONTENIDO---------------------------------->
    <main>
        <div id="bloque-list">
            <div id="grupo">
                <a class="tit" href="./admin.php"><u>LISTA ALUMNOS</u></a>
            </div>

            <div id="anade">
                <div id="añade">
                    <a href="./formalu.php">
                        <p><strong>+</strong></p>
                    </a>
                </div>
                <p> Añade Alumnos </p>
            </div>
            <?php
                //$_SESSION["tipo_perfil"] = consulta["rol"];
                $_SESSION["tipo_perfil"] = 'P';
                $tipo_perfil_pro = $_SESSION["tipo_perfil"];
                        
                $sql = "";
                //Búsqueda con el perfil Admin
                if($tipo_perfil_pro == 'A'){
                    $sql = "SELECT * FROM perfil WHERE rol ='E'";
                    $filtra = mysqli_query($conexion, $sql);
                    while($perfil = mysqli_fetch_assoc($filtra)) {
                        echo "
                            <div class='alumno'> 
                            <p>" . $perfil['nombre'] . "
                            " . $perfil['apellido_paterno'] . "
                            " . $perfil['apellido_materno'] . "</p>
                            </div>";
                    }
                }//Búsqueda con el perfil profesor
                else if ($tipo_perfil_pro == 'P'){

                    $id_profesor= 3;
                    //Grupos que coincidan con la id del profesor
                    $sql= "SELECT * FROM grupo WHERE id_profesor= $id_profesor";
                    $query= mysqli_query($conexion, $sql);
                    //var_dump($query);
                    while($grupo= mysqli_fetch_assoc($query)){

                        $id_grupo = $grupo['id_grupo'];

                        echo "<div class='boton-grupos'>
                            <p> Grupo: " .$grupo['nombre_grupo']. "<p>
                        </div>";
                        //Estudiantes que coincidan con la id del grupo que tenga el profesor
                        $sql2="SELECT id_estudiante FROM estudiante WHERE id_grupo=$id_grupo";
                        $query2= mysqli_query($conexion, $sql2);
                        //var_dump($query2);
                        while($estudiante= mysqli_fetch_assoc($query2)){

                            $id_estudiante=$estudiante['id_estudiante'];
                            //var_dump($id_estudiante);
                            //datos de los alumnos que coincidan con la id del perfil
                            $sql3="SELECT nombre, apellido_paterno, apellido_materno FROM perfil WHERE id_perfil=$id_estudiante";
                            $query3= mysqli_query($conexion, $sql3);
                            //var_dump($query3);
                            $datos_alumno= mysqli_fetch_assoc($query3);
                            echo "<div class='alumno'>
                                <p>" .$datos_alumno['nombre']. "
                                " .$datos_alumno['apellido_paterno']. "
                                " .$datos_alumno['apellido_materno']. "</p>
                            </div>";
                        }
                    }
                }
        ?>
        </div>

        <div id="barra-lateral">
            <div class="perfil_prof">
                <p>PERFIL DEL PROFESOR </p>
            </div>
            <div  class="calendario">
                <img src="../statics/img/Calendario-2027.png">
            </div>
        </div>
    </main>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>