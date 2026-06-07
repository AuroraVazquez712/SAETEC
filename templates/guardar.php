<?php   
  if(isset($_FILES['foto_perfil']) ){
    //var_dump($_FILES['foto_perfil']);
    $archivo = $_FILES['foto_perfil'];
    $nombre_archivo = $archivo['name'];
    $ruta_temporal = $archivo['tmp_name'];

    move_uploaded_file($ruta_temporal, '../statics/img/perfil_usuario.jpg');
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>PizzaPlaneta | Confirmación</title>
    <link rel="stylesheet" href="../../actividad-PHP-pizzeria-faty/css/styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <h1>PizzaPlaneta</h1>
        </div>
        <div class="nav-right">
            <div class="profile-section">
                <!-- Aquí va el PHP para la imagen de perfil -->
                 <?php
                    $ruta_imagen="";
                    if(file_exists("../statics/img/perfil_usuario.jpg")){
                        $ruta_imagen= "../statics/img/perfil_usuario.jpg";
                    }else{
                        $ruta_imagen="../statics/img/imagen-predeterminada.jpg";
                    }
                    echo "<img src= '$ruta_imagen' class= 'profile-pic'>";
                 ?>

                <a href="perfil.php" class="btn-editar">EditarPerfil</a>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 50px;">
        <header class="form-header">
            <h2>
                <!-- Aquí va el PHP para mostrar mensaje de éxito o error -->
            </h2>
        </header>
        <div class="contenedor-foto-perfil">


        <!-- Aquí va el PHP para mostrar la foto de perfil actual en grande-->

        </div>
    </div>
</body>
</html>