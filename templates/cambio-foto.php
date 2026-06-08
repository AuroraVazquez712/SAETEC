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
        <header>
            <div id="iconos_unam">
                <img class="iconos" src="../statics/img/logo-escudo-unam.png" alt="Escudo de la UNAM">
                <img class="iconos" src="../statics/img/logo_enp.jpeg" alt="Escudo de la UNAM">
                <img class="iconos" src="../statics/img/logo-prepa6.png" alt="Escudo de la UNAM">
                <img class="iconos" src="../statics/img/logo-475años.png" alt="Escudo de la UNAM">
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
        <!------------------------BARRA DE NAVEGACIÓN------------------------>
    <?php
            include 'barrapro.php';
    ?>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
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

                    $tamanio = getimagesize($ruta_temporal);
                    var_dump($tamanio);
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
        <!------------------------FOOTER --------------------------------->
        <?php
                include 'footer.php';
        ?> 
</body>
</html>