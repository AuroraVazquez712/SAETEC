<?php
        include '../dynamics/config.php';
        $conexion = connect();
        
        $nombre= "";
        $apellido_paterno= "";
        $correo= "";
        $no_trabajador="";
        if(isset($_POST["registro"])){
            $nombre= $_POST["nombre"];
            $apellido_paterno= $_POST["apellidopat"];
            $apellido_materno= $_POST["apellidomat"];
            $correo= $_POST["correo"];
            $fecha_nacimiento= $_POST["fecha_nacimiento"];
            $no_trabajador=$_POST["no_trabajador"];

            //Base de datos, aquí guardamos o algo así 
            $insertar_datos= "INSERT INTO perfil (rol, nombre, apellido_paterno, apellido_materno, correo, fecha_nacimiento)
                                VALUES('P','$nombre', '$apellido_paterno', '$apellido_materno', '$correo', '$fecha_nacimiento')";
            $inster= mysqli_query($conexion, $insertar_datos);

            $id_perfil = mysqli_insert_id($conexion);
            // Ahora insertamos el resto de los datos en la tabla 
            $sql2 = "INSERT INTO profesor (id_profesor, no_trabajador)
                    VALUES ($id_perfil, '$no_trabajador');
                    ";
            $query2 = mysqli_query($conexion, $sql2);

            
        
        }else{
            echo "No hemos enviado el form aún";
        }
        //Cambiar la vista por cada profe
        if (isset($_POST["ver_profe"])){

            $id_perfil=($_POST["id_perfil"]);

            $sql4= "SELECT * FROM perfil WHERE id_perfil=$id_perfil AND rol = 'P'";
            $query4 = mysqli_query($conexion, $sql4);
            $resp4 = mysqli_fetch_assoc($query4);
            //echo "<br>" ;
            //var_dump($resp4);

            $sql5= "SELECT * FROM profesor WHERE id_profesor=$id_perfil";
            $query5 = mysqli_query($conexion, $sql5);
            $resp5 = mysqli_fetch_assoc($query5);
            //echo "<br>" ;
            //var_dump($resp5);

            if ($resp4 && $resp5)
            {
                $nombre= $resp4['nombre'];
                $apellido_paterno= $resp4['apellido_paterno'];
                $correo= $resp4['correo'];
                $no_trabajador= $resp5['no_trabajador'];
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
    <link rel="stylesheet" href="../statics/style/admin-consulta-profe.css">

    <title>SAETEC: Admin</title>
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
        <div id="contenedor">
            <div id="prof">
                <a href=./admin.php><u>CONSULTA PROFESORES</u></a>
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
                <?php   
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
                    }    
                ?>
            </div>
        </div>
        <div id="datos-profe">
            <div id="nombre">
                <h1>Nombre: <i><?php echo "$nombre";?></i></h1>
            </div>
            <div id="datos-profe_esp">
                <div>
                    <p name="correo-usuario"><?php echo "Correo: $correo";?></p>
                    <p name="rfc"><?php echo "No. trabajador: $no_trabajador";?></p>
                </div>
            </div>
        </div>
    </main>
    <!---------------FOOTER------------>
    <?php
            include 'footer.php';
    ?>
    
</body>
</html>