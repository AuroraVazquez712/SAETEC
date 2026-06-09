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
<<<<<<< HEAD
            <div class="logo-40años"></div>
                    <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
            </div>
        </div>
    </header>
        <!------------------------BARRA DE NAVEGACIÓN------------------------>
    <?php
            include 'barrapro.php';
    ?>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
=======
        </header>
        <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
        <nav class="nav">
            <div class="container">
                <div class="btn-menu">
                    <label for="btn-menu">☰</label>
                </div>
                <nav class="menu">
                    <a href="./index.html">Inicio</a>
                    <a href="#">Perfil</a>
                    <a href="#">Acerca</a>
                    <a href="#">Contacto</a>
                </nav>
            </div>
        </nav>
        <!-------------------------------------BARRA LATERAL----------------------------------------->
        <aside>
            <div class="capa"> </div>
            <!--  --------------->
            <input type="checkbox" id="btn-menu"/>
            <div class="container-menu">
                <div class="cont-menu">
                    <nav>
                        <h2>324308734</h2>
                        <a href="./perfil-alumno.html">Mi perfil</a>
                        <hr>
                        <a href="#">Mis calificaciones</a>
                        <hr>
                        <a href="#">Mis actividades</a>
                        <hr>
                        <a href="#">¿Cómo te has sentido?</a>
                        <hr>
                        <a href="../docs/2019_Acuerdo_Rectoria_02.pdf">Políticas de seguridad</a>
                        <hr>
                        <a href="#">Modificar datos</a>
                    </nav>
                    <label for="btn-menu">✖️</label>
                </div>
            </div>
        </aside>
>>>>>>> 7efd7db497d63582c0dd4c6bf43f06a66afce988
        <!-------------------------------------CAMBIO DE FOTO----------------------------------------->
        <div class="contenedor-general" style="margin-top: 50px;">
            <header class="form-header">
                <h2>Edición de foto de perfil</h2>
                <form href="#contenedor-general">

                    <input type="file" name="foto_perfil" class="btn-perfil" accept="image/png, image/jpeg">
                    <button type="submit" class="btn-perfil">Cambiar foto</button>

                </form>
            </header>
            <?php   
                if(isset($_FILES['foto_perfil']))
                {
                    $archivo = $_FILES['foto_perfil'];
                    $nombre_archivo = $archivo['name'];
                    $ruta_temporal = $archivo['tmp_name'];
                    move_uploaded_file($ruta_temporal, '../statics/img/perfil_usuario.jpg');
                }
            ?>
            <div class="vista-previa">
                <?php
                    $ruta_imagen="";
                    if(file_exists("../statics/img/perfil_usuario.jpg")){
                        $ruta_imagen= "../statics/img/perfil_usuario.jpg";
                    }else{
                        $ruta_imagen="../statics/img/imagen-predeterminada.jpg";
                    }
                    echo "<img src= '$ruta_imagen' class= 'profile-pic'>";
                ?>

                <a href="perfil-alumno.php" class="btn-editar">Regresar al perfil</a>
            </div>
        </div>
</body>
</html>